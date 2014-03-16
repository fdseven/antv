// JavaScript Document

/*$("img.lazy").lazyload({
    effect : "fadeIn",
	delay: 2000
});*/

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

var grids = [], overlays = [], gridState = [0,0,0,0,0,0,0], displayState = ["none","none","none","none","none","none","none"];

/*function toggleOverLay(theGrid) {
	(gridState[theGrid] === 1) ? gridState[theGrid] = 0 : gridState[theGrid] = 1;
	for (var i = 0; i < 7; i++) {
		overlays[i].css("opacity", gridState[i]);
	}
}*/

function toggleOverlay(theGrid) {
	(gridState[theGrid] === 1) ? gridState[theGrid] = 0 : gridState[theGrid] = 1;
	(gridState[theGrid] === 1) ? displayState[theGrid] = "block" : displayState[theGrid] = "none";
	for (var i = 0; i < 7; i++) {
		overlays[i].css("opacity", gridState[i]);
		overlays[i].css("display", displayState[i]);
	}
}

$(document).ready(function() {
	
	grids.push($("#1"));
	grids.push($("#2"));
	grids.push($("#3"));
	grids.push($("#4"));
	grids.push($("#5"));
	grids.push($("#6"));
	grids.push($("#7"));
	
	overlays.push($("#a"));
	overlays.push($("#b"));
	overlays.push($("#c"));
	overlays.push($("#d"));
	overlays.push($("#e"));
	overlays.push($("#f"));
	overlays.push($("#g"));
	
	if (Modernizr.touch) {
		grids[0].on('tap', 0, function (){ toggleOverlay(0) });
		grids[1].on('tap', 0, function (){ toggleOverlay(1) });
		grids[2].on('tap', 0, function (){ toggleOverlay(2) });
		grids[3].on('tap', 0, function (){ toggleOverlay(3) });
		grids[4].on('tap', 0, function (){ toggleOverlay(4) });
		grids[5].on('tap', 0, function (){ toggleOverlay(5) });
		grids[6].on('tap', 0, function (){ toggleOverlay(6) });
		/*} else {
		grids[0].on( "mouseenter mouseleave", function (){ toggleOverlay(0) } );*/
		}
	});