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
		//$('#main').animate({'margin-left':'-50px'},300,function(){});  
		$("body").addClass("no_scroll");
		$("#overlay").addClass("tutup");                   		
		$("#menu_area").show();
		$('#menu_area').animate({'right':'0px'},300,function(){
		});            
	});
	
	$('#close').click(function(){
		$("body").removeClass("no_scroll");  
		$("#overlay").removeClass("tutup"); 
		//$('#main').animate({'margin-left':'0px'},300,function(){});
	    $('#menu_area').animate({'right':'-270px'},300,function(){  
	    $("#menu_area").hide();
	    });
	});
	$('#overlay').click(function(){
		$("body").removeClass("no_scroll");  
		$("#overlay").removeClass("tutup"); 
		//$('#main').animate({'margin-left':'0px'},300,function(){});
	    $('#menu_area').animate({'right':'-270px'},300,function(){  
	    $("#menu_area").hide();
	    });
	});
});