/*
    @Description:图片自动切换JS效果
    @author: ZP
    @update: 2015-09-18 17:41:04
*/
~function(){
    if(!window.jQuery) return;
    $.fn.flipview = function(options){
        var defaults = {   
            direction   :'horizontal',          // 方向，暂时只支持横向滚动
            distance    : 1016,                 // 运动距离
            speed       : 1e3,                  // 运动时间     
            auto        : false,                // 是否自动运行
            index       : 0,
            pageSpeed   : 3e3
        }; 

        $.extend(defaults,options);
        var $flipbox    = $(this),
            $previous   = $flipbox.find('.slide-previous'),
            $next       = $flipbox.find('.slide-next'),
            $overview   = $flipbox.find('.overview'),
            $close      = $flipbox.find('.slide-bubble-close1'),
            $tabs       = $flipbox.find('.tabs'),
            $item       = $overview.children(),
            itemLength  = $item.length,
            i           = defaults.index + 1,
            timer,
            max         = itemLength,
            Flipbox     = $flipbox[0];
        
        //$item.width($flipbox.width());

        if($tabs[0] && !$tabs.children()[0]){
            for(var k=0; k < itemLength;k++){
                $tabs.append('<i>'+ (k+1) +'</i>');   
            };  
            $tabs.children().eq(0).addClass('selected').siblings().removeClass();
        };
        if($item.data('caption')){
            var showCaption = true;
            var $caption = $('<div class="caption">'+ $item.data('caption') +'</div>'); 
            $flipbox.append($caption);
        };

        // 如果数量大于1，扩展并填充，并运动到指定位置
        if(itemLength && itemLength > 1){
            if(!Flipbox.flipviewed){
                $overview.append($item.eq(0).clone());
                $overview.prepend($item.eq(itemLength-1).clone());
                max = itemLength + 2;
                Flipbox.flipviewed = true;
            }
            $overview.css({left:-defaults.distance*i}); 
        }else{
            if($previous[0] && $next[0]){
                $previous.hide(); 
                $next.hide();  
            }
            return false;
        };

        function slide(j) {
            if ($overview.is(':animated') == false) {
                i = i + j;
                if(defaults.direction == 'horizontal'){
                    switch(i){
                        case max - 1:
                            $overview.animate({left: -i * defaults.distance},defaults.speed,function(){
                                i = 1;
                                $overview.css({left: - defaults.distance});
                                $caption && $caption.html($item.eq(0).data('caption'));
                                $tabs.children().eq(0).addClass('selected').siblings().removeClass();  
                            });
                            break;
                        case 0:
                            $overview.animate({left: -i * defaults.distance},defaults.speed,function(){
                                i = max - 2;
                                $overview.css({left: -defaults.distance * i});
                                $caption && $caption.html($item.eq(i-1).data('caption'));
                                $tabs.children().eq(i-1).addClass('selected').siblings().removeClass();  
                            });
                            break;
                        default:
                            $overview.animate({left: -i * defaults.distance},defaults.speed);  
                            $caption && $caption.html($item.eq(i-1).data('caption'));
                            $tabs.children().eq(i-1).addClass('selected').siblings().removeClass();    
                    };
                    
                };
            }    
        };
        $next.on('click',function(e){
            e.preventDefault();
            slide(-1);
        });
        $previous.on('click',function(e){
            e.preventDefault();
            slide(1);
        });
        $close.on('click',function(){
            $close.parent().parent().hide();
            $next.off('click');
            $previous.off('click');
            $close.off('click');
            $tabs.off('mouseenter');
            $flipbox.off();
        });
        function go(){
            go.timer && clearTimeout(go.timer);
            slide(1);
            go.timer = setTimeout(go,defaults.pageSpeed);
        };
        defaults.auto && setTimeout(go,defaults.pageSpeed);
        $flipbox.on('mouseenter',function(){
            go.timer && clearTimeout(go.timer);    
        });
        var leaveTimer;
        $flipbox.on('mouseleave',function(){
            leaveTimer && clearTimeout(leaveTimer);
            defaults.auto && (leaveTimer = setTimeout(go,defaults.pageSpeed));   
        });
        $tabs.on('mouseenter','i',function(){
            var $me = $(this);
            go.timer && clearTimeout(go.timer);
            i = $me.index();
            $overview.stop().animate({left: (i+1) * -defaults.distance},defaults.speed);
            $me.addClass('selected').siblings().removeClass();
            $caption && $caption.html($item.eq(i).data('caption'));
        });
    }
}();