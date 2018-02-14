jQuery(document).ready(function($) {
  var controller = new ScrollMagic.Controller();


var tween1 = TweenMax.fromTo(".pixel-1", 5,
    {scale: 1.0, opacity: 1},
    {scale: 1.0, opacity: 0.3, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
var tween2 = TweenMax.fromTo(".pixel-4", 7,
    {scale: 1.0, opacity: 1},
    {scale: 1.0, opacity: 0.0, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
var tween3 = TweenMax.fromTo(".pixel-6", 6,
    {x: "-100%", opacity: 1},
    {x: "100%", opacity: 0.7, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
var tween4 = TweenMax.fromTo(".pixel-7", 7,
    {scale: 1.0, opacity: 1},
    {scale: 1.0, opacity: 0.3, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
var tween5 = TweenMax.fromTo(".pixel-8", 9,
    {y: "-150%", opacity: 1},
    {y: "0%", opacity: 0.3, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
var tween6 = TweenMax.fromTo(".pixel-10", 9,
    {scale: 1.0, opacity: 1},
    {scale: 1.0, opacity: 0.1, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
var tween7 = TweenMax.fromTo(".pixel-12", 4,
    {y: "-100%", opacity: 1},
    {y: "0%", opacity: 0.3, repeat: -1, yoyo: true, ease: Circ.easeInOut}
);
// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#pixelstrigger", duration: 400, offset: -50})
    .setTween(tween1, tween2, tween3, tween4, tween5, tween6, tween7)
    //.addIndicators({name: "loop"}) // add indicators (requires plugin)
    .addTo(controller);
});