// JavaScript Document

/*
二级延迟+滑动下拉导航
参数：delayTime—延迟时间
		subKey—子菜单筛选关键字
*/

$.fn.dropMenu=function(obj){
	
	var delayTime=(obj&&obj.delayTime)?obj.delayTime:0;//延迟时间
	var subKey=(obj&&obj.subKey)?obj.subKey:"ul";//子菜单筛选关键字
	
	var $oli=$(this).find("li").has(subKey);//包含下拉菜单的li
	var ow=$(this).innerWidth();
	
	$oli.each(function(i){
		$(this).children("a").addClass("hasSub");//给包含下列菜单的项添加图标
		
		var $eli=$(this);
		var $esub=$(this).children(subKey);
		var esubw=$esub.outerWidth();
		var esubh=$esub.height();
		
		var posli=$eli.position().left;//li的横坐标
		if(ow-posli<esubw){
		$esub.css("right","0px");
		}else{
			$esub.css("left","0px");
		}	//子菜单的位置
		
		var delaySub;//延迟
		$eli.mouseenter(function(){
			delaySub=setTimeout(function(){
					$eli.addClass("cur");
					$esub.show().stop().animate({height:esubh},"fast"); 
				},delayTime);
		});
		$eli.mouseleave(function(){
			clearTimeout(delaySub);
			$eli.removeClass("cur");
			$esub.stop().animate({height:0},"fast",function(){ $(this).hide(); }); 
		});
		
		$esub.height(0).hide();//子菜单高度初始化
	});
};