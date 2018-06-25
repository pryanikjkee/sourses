$(document).ready(function () {

// this is scrollmagic


var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
        triggerHook: 0
    }

});
var newScene = new ScrollMagic.Scene({
    duration:400,
    offset: -100,
    triggerElement: ".header__title__text"
})
.on("progress", function (e) {
    // console.log(e.progress.toFixed(3));
})
.setTween("#progress-bar",{width:'50%',ease:Linear.easenone})

.addTo(controller)


var newSceneblack = new ScrollMagic.Scene({
    duration:400,
 
    triggerElement: ".connected__wrapper"
})

.setTween("#progress-bar__black",{width:'50%',ease:Linear.easenone})

.addTo(controller)


var newScenethird = new ScrollMagic.Scene({
    duration:400,
  
 
    triggerElement: ".brand__description"
})

.setTween("#progress-bar__third",{width:'50%',ease:Linear.easenone})

.addTo(controller)



var newScenefloor = new ScrollMagic.Scene({
    duration:"80%",
    offset:-300,
  
 
    triggerElement: "#passion__wrapper"
})

.setTween("#progress-bar__floor",{height:'100%',ease:Linear.easenone})

.addTo(controller)



var newScenefloorsecond = new ScrollMagic.Scene({
    duration:"50%",
    offset:-300,
  
 
    triggerElement: ".ps_head_mobile"
})

.setTween("#progress-bar__floor__second",{height:'100%',ease:Linear.easenone})

.addTo(controller)




var newScenefloorfloor = new ScrollMagic.Scene({
    duration:"60%",
    offset:-350,
  
 
    triggerElement: "#footer__graphic__aliance"
})

.setTween("#progress-bar__floor__third",{height:'100%',ease:Linear.easenone})

.addTo(controller)

// scroll end
// animate lines
var desc__one = $(".description__background").first();
var desc__two = $(".description__background:eq(1)");
var desc__tree = $(".description__background:eq(2)");
var desc__four = $(".description__background:eq(3)");
var desc__five = $(".description__background:eq(4)");
var desc__six = $(".description__background:eq(5)");
var desc__seven = $(".description__background:eq(6)");
var desc__last = $(".description__background:eq(7)");
var onedesc = new ScrollMagic.Scene({
    duration:"60%",

  
 
    triggerElement: ".works__description__heading"
})

.setTween(desc__one,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseOne = onedesc.reverse();

onedesc.reverse(false);

var twodesc = new ScrollMagic.Scene({
    duration:"60%",
    offset:100,

  
 
    triggerElement: ".works__description__heading"
})

.setTween(desc__two,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseTwo = twodesc.reverse();

twodesc.reverse(false);

var threedesc = new ScrollMagic.Scene({
    duration:"60%",
    offset:500,

  
 
    triggerElement: ".works__description__heading"
})

.setTween(desc__tree,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseThree = threedesc.reverse();

threedesc.reverse(false);
var fourdesc = new ScrollMagic.Scene({
    duration:"60%",
    offset:600,

  
 
    triggerElement: ".works__description__heading"
})

.setTween(desc__four,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseFour = fourdesc.reverse();

fourdesc.reverse(false);
var fivedesc = new ScrollMagic.Scene({
    duration:"60%",
    offset:900,

  
 
    triggerElement: ".works__description__heading"
})

.setTween(desc__five,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseFive = fivedesc.reverse();

fivedesc.reverse(false);
var sixdesc = new ScrollMagic.Scene({
    duration:"60%",
    offset:990,

  
 
    triggerElement: ".works__description__heading"
})

.setTween(desc__six,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseSix = sixdesc.reverse();

sixdesc.reverse(false);
var sevendesc = new ScrollMagic.Scene({
    duration:"60%",
   offset:-600,

  
 
    triggerElement:desc__last
})

.setTween(desc__seven,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseSeven = sevendesc.reverse();

sevendesc.reverse(false);
var lastdesc = new ScrollMagic.Scene({
    duration:"60%",
    offset:-600,

  
 
    triggerElement: desc__last
})

.setTween(desc__last,{width:'370px',ease:Linear.easenone})

.addTo(controller);
var reverseLast = lastdesc.reverse();

lastdesc.reverse(false);
var newSceneimage = new ScrollMagic.Scene({
    duration:"90%",
    offset:-600,

  
 
    triggerElement: "#show__work__done"
})

.setTween("#showcase__carousel .carousel-item",{right:'0%',ease:Linear.easenone})

.addTo(controller);

// end
$("#next__testimonials").hide();
$("#prev__testimonials").hide();
$(".carousel-inner").hover(function(){
    $("#next__testimonials").show(400);
    $("#prev__testimonials").show(400);
},function(){
    $("#next__testimonials").hide(200);
    $("#prev__testimonials").hide(200);
})
$("#next__work__carousel").hide();
$("#prev__work__carousel").hide();
$("#works__slider").hover(function(){
    $("#next__work__carousel").show(400);
    $("#prev__work__carousel").show(400);
},function(){
    $("#next__work__carousel").hide(200);
    $("#prev__work__carousel").hide(200);
})
    $('.burger__menu').click(function () {
        if ($('.menu').is(":visible")) {
            $('body').unbind('touchmove');
            $("body").removeClass("stop-scrolling");
            $(".menu").animate({
                opacity: "0"
            }, "slow", function () {
                $('.menu').hide();

            });
          
            $('.g__a__logo').removeClass('fixed');
            $('.g__a__logo__black').removeClass('fixed');
            $('.burger__fixed').removeClass('fixed');
            var burg_line = $(".menu__button").toArray();
            $(burg_line[0]).removeClass('burger_top');
            $(burg_line[1]).removeClass('burger_center');
            $(burg_line[2]).removeClass('burger_bottom');
        } else {
            $("body").addClass("stop-scrolling");
            $('body').bind('touchmove', function(e){e.preventDefault()});

            $('.menu').show();
            $(".menu").animate({
                opacity: "1"
            }, "fast", "linear");


            $('.g__a__logo').addClass('fixed');
            $('.g__a__logo__black').addClass('fixed');
            $('.burger__fixed').addClass('fixed');
            var burg_line = $(".menu__button").toArray();
            $(burg_line[0]).addClass('burger_top');
            $(burg_line[1]).addClass('burger_center');
            $(burg_line[2]).addClass('burger_bottom');
        }

    });
});