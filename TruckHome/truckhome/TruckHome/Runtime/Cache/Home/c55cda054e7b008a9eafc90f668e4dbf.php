<?php if (!defined('THINK_PATH')) exit();?><!--搜索-->
    <div class="es_top">
        <div class="es_top_logo">
            <a href="<?php echo U('Sindex/index');?>">
                <img src="/TruckHome/truckhome/Public/shop/home/images/shop_logo.jpg"></a>
        </div>
        <div class="es_top_search" id="search">

            <form id="searchForm" name="searchForm" method="get" action="<?php echo U('Sproduct/index');?>" onsubmit="return checkSearchForm()">
                <div class="top_search1" style="display:none">
                    <a href="###" class="qbss1" style="display:block" onmouseout="hiddenDiv('div_new_ecshop')" onmouseover="showDiv('div_new_ecshop')">
                        <span id="sd">全部搜索</span>
                    </a>
                    <ul class="qbss_fuchu" style="display: none; " onmouseout="hiddenDiv(this.id)" onmouseover="showDiv(this.id)" id="div_new_ecshop">
                        <li id="0" onclick="selt(this.id)">全部搜索</li>
                        <li id="86" onclick="selt(this.id)">重汽配件库</li>
                        <li id="89" onclick="selt(this.id)">柴油滤芯</li>
                        <li id="88" onclick="selt(this.id)">冷却液</li>
                        <li id="87" onclick="selt(this.id)">机油滤芯</li>
                        <li id="97" onclick="selt(this.id)">摩擦片</li>
                        <li id="96" onclick="selt(this.id)">多楔带</li>
                        <li id="95" onclick="selt(this.id)">润滑油</li>
                        <li id="94" onclick="selt(this.id)">涨紧轮</li>
                        <li id="93" onclick="selt(this.id)">燃油滤芯</li>
                        <li id="92" onclick="selt(this.id)">空滤</li>
                        <li id="91" onclick="selt(this.id)">机油</li>
                        <li id="75" onclick="selt(this.id)">机油</li>
                        <li id="76" onclick="selt(this.id)">刹车片</li>
                        <li id="74" onclick="selt(this.id)">测试</li>
                        <li id="34" onclick="selt(this.id)">柴油滤芯</li>
                        <li id="36" onclick="selt(this.id)">加装总成</li>
                        <li id="35" onclick="selt(this.id)">柴油粗滤</li>
                        <li id="52" onclick="selt(this.id)">柴油精滤</li>
                        <li id="53" onclick="selt(this.id)">柴滤套装</li>
                        <li id="69" onclick="selt(this.id)">机油滤芯</li>
                        <li id="63" onclick="selt(this.id)">机滤</li>
                        <li id="64" onclick="selt(this.id)">冷却滤</li>
                        <li id="71" onclick="selt(this.id)">空气滤芯</li>
                        <li id="72" onclick="selt(this.id)">弗列加空滤</li>
                        <li id="37" onclick="selt(this.id)">底盘部件</li>
                        <li id="68" onclick="selt(this.id)">挂车配件</li>
                        <li id="77" onclick="selt(this.id)">刹车片</li>
                        <li id="38" onclick="selt(this.id)">干燥器</li>
                        <li id="39" onclick="selt(this.id)">回位弹簧</li>
                        <li id="40" onclick="selt(this.id)">安全防护</li>
                        <li id="41" onclick="selt(this.id)">3M扎带</li>
                        <li id="42" onclick="selt(this.id)">3M胶布</li>
                        <li id="43" onclick="selt(this.id)">3M反光贴</li>
                        <li id="44" onclick="selt(this.id)">防盗螺丝</li>
                        <li id="59" onclick="selt(this.id)">测温贴</li>
                        <li id="46" onclick="selt(this.id)">文化主题</li>
                        <li id="47" onclick="selt(this.id)">车标</li>
                        <li id="49" onclick="selt(this.id)">行车必备</li>
                        <li id="90" onclick="selt(this.id)">手套</li>
                        <li id="73" onclick="selt(this.id)">脚垫</li>
                        <li id="85" onclick="selt(this.id)">湿厕纸</li>
                        <li id="84" onclick="selt(this.id)">车载音响</li>
                        <li id="62" onclick="selt(this.id)">加热器</li>
                        <li id="83" onclick="selt(this.id)">灭火器</li>
                        <li id="82" onclick="selt(this.id)">车载充电器</li>
                        <li id="80" onclick="selt(this.id)">机油</li>
                    </ul>
                </div>
                <div class="top_search2">
                    <input id="category" name="category" type="hidden">
                    <input name="proname" id="keywords" class="qbss_cz" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '我们只卖正品';}" value="我们只卖正品" type="text">
                    <input name="" value="" class="qbss_cz2" type="submit"></div>
            </form>
        </div>
    </div>