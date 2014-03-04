// JavaScript Document

$("#slider").responsiveSlides({
	auto: true,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks"
});

$(function() {
	$('#menu').click(function(){ 
		//$('#main').animate({'margin-left':'-10%'},300,function(){});                       		
		$("#menu_area").show();
		$('#menu_area').animate({'right':'0px'},300,function(){
		});            
	});
	
	$('#close').click(function(){
		$('#main').animate({'margin-left':'0px'},300,function(){});
	    $('#menu_area').animate({'right':'-300px'},300,function(){  
	    $("#menu_area").hide();
	    });
	});
});