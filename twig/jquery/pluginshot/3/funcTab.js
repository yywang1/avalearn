// JavaScript Document

/*
tab页
*/

$.fn.funcTab=function(obj){
	
	var $o=$(this);
	var $tags=$(this).children(".tabTit").children("li");
	var $conts=$(this).children(".tabCont").children(".tabCont_c");
	
	var init=0;	//默认展开的tab页索引
	$tags.each(function(i){
		if($(this).hasClass("cur")){ init=i; }
	});
	$tags.removeClass("cur").eq(init).addClass("cur");	
	$conts.hide().eq(init).show();
	
	$tags.click(function(){
		var i=$(this).index();
		$tags.removeClass("cur").eq(i).addClass("cur");
		$conts.hide().eq(i).show();
	});
	
	$tags.mouseenter(function(){ $(this).addClass("hov"); }).mouseleave(function(){ $(this).removeClass("hov"); });
	
};