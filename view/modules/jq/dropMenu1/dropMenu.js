// JavaScript Document

/*
二级延迟+滑动下拉导航
参数：delayTime—延迟时间
*/

$.fn.dropMenu=function(obj){
	
	var ow=$(this).offset().left+$(this).innerWidth();//导航右侧到屏幕左上角的距离

	$(this).find("li").has("ul").each(function(i){
		var $eli=$(this);
		var $esub=$(this).children("ul");
		var eliw=$eli.innerWidth();
		var esubw=$esub.outerWidth();
		$eli.children("a").addClass("hasSub");//给包含下列菜单的项添加图标
		
		if($eli.hasClass("li1")){
			var eliLeft=$(this).offset().left;
			if(ow-eliLeft<esubw){
				$esub.css("right","0px");
			}else{
				$esub.css("left","0px");
			}
		}
		
		if($eli.hasClass("li2")){
			var eliLeft=$(this).closest(".li1").offset().left;
			if(ow-eliLeft-eliw-$eli.parent().outerWidth()<esubw){
				$esub.css("right",esubw+"px");
			}else{
				$esub.css("left",esubw+"px");
			}
		}
		
		var delaySub;//延迟
		var delayTime=(obj&&obj.delayTime)?obj.delayTime:0;//延迟时间
		
		$eli.mouseenter(function(){
			delaySub=setTimeout(function(){
					$eli.children("a").addClass("hasSubHov");
					$esub.show(); 
				},delayTime);
		});
		$eli.mouseleave(function(){
			clearTimeout(delaySub);
			$eli.children("a").removeClass("hasSubHov");
			$esub.hide(); 
		});
		
	});
};