if(window.jQuery){
	$(function(){
		var $sitenav = $('#sitenav'),
			$siteMap = $('#site-map'),
			$sitenavmore = $sitenav.find('.more'),
			$sitenavBubble = $('#sitenav-bubble'),
			$siteMapContent = $('#site-map-content'),
			sitenavControler = {},
			siteMapControler = {};
		$sitenavmore.on('mouseenter',function(){
			sitenavControler.timer && clearTimeout(sitenavControler.timer);
			var $this = $(this);
			if(!$sitenavBubble[0]){
				$sitenavBubble = $('<div class="bubble-more-links" id="sitenav-bubble"></div>');
				$('body').append($sitenavBubble);
			};
			if(!sitenavControler.current || sitenavControler.current !== $this[0]){
				$sitenavBubble.css({'left':$this.offset().left - 10,'top':$this.offset().top + 20});
				var s = '';
				$.each($this.data('morelinks'),function(i,o){
					s += '<a href="' + o['url'] + '">' + o['content'] + '</a>';
				});
				$sitenavBubble.html(s);
			}
			sitenavControler.current = $this[0];
			$sitenavBubble.addClass('visible');
			$sitenavBubble.on('mouseenter',function(){
				sitenavControler.timer && clearTimeout(sitenavControler.timer);	
			});
			$sitenavBubble.on('mouseleave',function(){
				$sitenavBubble.removeClass('visible');	
				$sitenavBubble.off();
			});
		});
		$sitenavmore.on('mouseleave',function(){
			sitenavControler.timer = setTimeout(function(){
				$sitenavBubble.removeClass('visible');	
				$sitenavBubble.off();
			},200);
		});

		$siteMap.on({
			mouseenter:function(){
				$siteMapContent.addClass('visible');	
				$siteMapContent.on({
					mouseenter:function(){
						siteMapControler.timer && clearTimeout(siteMapControler.timer);		
					},
					mouseleave:function(){
						$siteMapContent.removeClass('visible');	
						$siteMapContent.off();	
					}	
				});
			},
			mouseleave:function(){
				siteMapControler.timer = setTimeout(function(){
					$siteMapContent.removeClass('visible');		
				},200)
			}
		});
	})
}