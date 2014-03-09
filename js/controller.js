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
	
	var menu = $("#menu_area");
		$(window).resize(function(){  
		var w = $(window).width();  
		if(w > 786 && menu.is(':hidden')) {  
			menu.removeAttr('style');  
		}  
	}); 
	
});

$(document).ready(function() {
    $('.link_about').click(function(){
        $('html, body').animate({scrollTop:$('#about').position().top}, 'slow');        	return false;
    });
    $('.link_dk').click(function(){
        $('html, body').animate({scrollTop:$('#dewan_komisaris').position().top}, 'slow');        	return false;
    });
    $('.link_dd').click(function(){
        $('html, body').animate({scrollTop:$('#dewan_direksi').position().top}, 'slow');        	return false;
    });
    $('.link_sm').click(function(){
        $('html, body').animate({scrollTop:$('#senior_management').position().top}, 'slow');        	
	return false;
    });
    $('.link_ph').click(function(){
        $('html, body').animate({scrollTop:$('#penghargaan').position().top}, 'slow');        	return false;
    });
    $('.link_pm').click(function(){
        $('html, body').animate({scrollTop:$('#stasiun_pemancar').position().top}, 'slow');        	
	return false;
    });
    $('.link_pr').click(function(){
        $('html, body').animate({scrollTop:$('#program').position().top}, 'slow');        	return false;
    });
    $('.link_sdm').click(function(){
        $('html, body').animate({scrollTop:$('#sdm').position().top}, 'slow');        	return false;
    });
});