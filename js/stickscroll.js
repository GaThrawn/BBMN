jQuery(document).ready(function($) {
    
    
var $ssmenu = $('#stickscrollmenu');

//white button under hero
$ssmenu.hover(
   function() {
      TweenLite.to($(this), 0.3, {x:70});
   },
   function() {
      TweenLite.to($(this), 0.15, {x:0});  
   }
);
    

var $tsdown = $('#topsectionbtn');

//white button under hero
$tsdown.hover(
   function() {
      TweenLite.to($(this), 0.3, {y:5});
   },
   function() {
      TweenLite.to($(this), 0.15, {y:0});  
   }
);  


var $portin = $('.portin');

//white button under hero
$portin.hover(
   function() {
      TweenLite.to($(this), 0.3, {y:5});
   },
   function() {
      TweenLite.to($(this), 0.15, {y:0});  
   }
);





    
    
  
    });