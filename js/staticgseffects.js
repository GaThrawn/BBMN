//jQuery('#thing').css({ background: 'red' });
//STATIC BASED TWEEKS
jQuery(document).ready(function($) {
// TOP SECTION
var color = {gray:0.3};
var image = $("#topsection")[0];


TweenMax.to(color, 15, {gray:0.7, onUpdate:applyColor, onUpdateParams:[image], repeat:0, yoyo:false})

function applyColor(element) {
//apply filter yourself
  element.style["-webkit-filter"] = "grayscale(" + color.gray + ")"
}
    
jQuery('#wrapper-navbar').css({ background: '#1d1d1d', height: '55px', margin: '-5px 0px 0px 0px'});
    
//TweenLite.fromTo("#logostuff", 2, {left: 0, top: 0, scale:0.1, autoAlpha: 0, ease:Back.easeIn}, {left: -30, top: -40, scale:0.6, autoAlpha: 1, ease:Back.easeIn});    
    
    //TOP INDEX HERO SECTION
TweenLite.fromTo("#topsection", 2, {left: 30, top: -100, scale:0.8, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn});
    
TweenLite.fromTo("#topsectiontext", 5, {scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {scale:1, autoAlpha: 1, ease:Back.easeIn});
       
TweenLite.to("#wrapper-hero", 4, {backgroundColor:"#1c1c1c", ease:Power2.easeInOut});

    
//BACKGROUND PIXEL EFFECTS    

jQuery('#pixels-1').css({ margin: '100px 0px 0px 20%', position: 'absolute', opacity: '0.1', transform: 'rotate(90deg)'});    
jQuery('#pixels-2').css({ margin: '400px 0px 0px 70%', position: 'absolute', opacity: '0.3'});     
jQuery('#pixels-3').css({ margin: '700px 0px 0px 10%', position: 'absolute', opacity: '0.2', opacity: '0.1', transform: 'rotate(180deg)'});     
jQuery('#pixels-4').css({ margin: '1000px 0px 0px 50%', position: 'absolute', opacity: '0.1'});     
jQuery('#pixels-5').css({ margin: '1300px 0px 0px 30%', position: 'absolute', opacity: '0.3'});     
jQuery('#pixels-6').css({ margin: '1600px 0px 0px 60%', position: 'absolute', opacity: '0.1', opacity: '0.1', transform: 'rotate(270deg)'});     
jQuery('#pixels-7').css({ margin: '2000px 0px 0px 10%', position: 'absolute', opacity: '0.3'});     
jQuery('#pixels-8').css({ margin: '2300px 0px 0px 70%', position: 'absolute', opacity: '0.3', opacity: '0.1', transform: 'rotate(-90deg)'});
jQuery('#pixels-9').css({ margin: '2400px 0px 0px 10%', position: 'absolute', opacity: '0.3'});
jQuery('#pixels-10').css({ margin: '2700px 0px 0px 90%', position: 'absolute', opacity: '0.3', opacity: '0.1', transform: 'rotate(180deg)'});

//STICKYMENU

 
//GREY-SCALE
function show_grey(obj) {
$(obj).addClass(".grey-scale75");
}
function show_original(obj) {
$(obj).removeClass(".grey-scale75");
}
    
//TweenLite.fromTo("#frontfirst", 5, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn}); 
   
//TweenLite.fromTo("#meimage", 5, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn});       
//TweenLite.fromTo("#metext", 5, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn}); 
    
//PAGE FRONT SECOND EFFECTS SECTION
//TweenLite.fromTo("#frontsecond", 1, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn}); 
//
//TweenLite.fromTo("#workicon", 15, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn});    
//
////PAGE FRONT THIRD EFFECTS SECTION
//TweenLite.fromTo("#frontthird", 1, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn}); 
//    
////PAGE FRONT FOURTH EFFECTS SECTION
//TweenLite.fromTo("#frontfourth", 1, {left: 30, top: -100, scale:0.2, autoAlpha: 0, ease:Back.easeIn}, {left: 30, top: -10, scale:1.0, autoAlpha: 1, ease:Back.easeIn});     
//var $demo = $('#demo'),       
//    tl = new TimelineLite();
//
//tl.set("#demo", {visibility:"visible"})
//	.from($demo, 10.5, {scale:0.2, autoAlpha: 0, ease:Back.easeIn});
//	
//TweenLite.to("#scoreDisplay", 10, {backgroundColor:"#dd4d04", width:"50%", top:"100px", ease:Power2.easeInOut});	
//TweenLite.to("#wrapper-index", 15, {backgroundColor:"#e50a0a", ease:Power2.easeInOut});	
});