
$(document).ready(function(){


    $("#navicon").click(function(){
      $("#s1").toggleClass("span1");
      $("#s2").toggle();
      $("#s3").toggleClass("span3");
      $(".navlist").toggleClass("top100");
  });
  var cond;
  var winwidth =$(window).width();
  if(winwidth>1200){
    cond=($("#pc-carousel-1div").children().length > 3);
  }else if(winwidth<=1200 && winwidth>991){
    cond=($("#pc-carousel-1div").children().length > 2);
  }else if(winwidth<991){
    cond=($("#pc-carousel-1div").children().length > 1);
  }
  if(cond){
  var intervel1;
  function timer(){
   intervel1= setInterval(function(){
    $("#pc-carousel-1div").css("left","-366px");
    $("#pc-carousel-1div").css("transition","1.5s");
    $("#pc-carousel-1div").css("transition-timing-function","ease-in-out");
    setTimeout(function(){
      var ele = $("#pc-carousel-1div").children().first();
        $("#pc-carousel-1div").append(ele);
        $("#pc-carousel-1div").css("left","0px");
        $("#pc-carousel-1div").css("transition","0s");
    },1500);
  },10000);
  }
  timer();
  $(".pc-carousel-left").click(function(){
    $("#pc-carousel-1div").css("left","-366px");
    $("#pc-carousel-1div").css("transition","0s");
    var ele1 = $("#pc-carousel-1div").children().last();
    $("#pc-carousel-1div").prepend(ele1);
    setTimeout(function(){
      $("#pc-carousel-1div").css("left","0px");
      $("#pc-carousel-1div").css("transition","0.5s");
      $("#pc-carousel-1div").css("transition-timing-function","ease-out");
    },50);
    clearInterval(intervel1);
    timer();
  });
  $(".pc-carousel-right").click(function(){
    $("#pc-carousel-1div").css("left","-366px");
    $("#pc-carousel-1div").css("transition","0.5s");
    $("#pc-carousel-1div").css("transition-timing-function","ease-out");
    setTimeout(function(){
      $("#pc-carousel-1div").css("left","0px");
      $("#pc-carousel-1div").css("transition","0s");
      var ele2 = $("#pc-carousel-1div").children().first();
      $("#pc-carousel-1div").append(ele2);
    },500);
    clearInterval(intervel1);
    timer();
  });
}
if(cond){
var achievment_intervel1;
function timer1(){
achievment_intervel1= setInterval(function(){
  if(winwidth<=1200){
    $("#achivement-carousel-1div").css("left","-84em");
  }else{
    $("#achivement-carousel-1div").css("left","-90em");

  }
$(".achivement-carousel-imgdiv:nth-of-type(2)").css("transform","scale(1)");
$("#achivement-carousel-1div").css("transition","0.7s");
$("#achivement-carousel-1div").css("transition-timing-function","ease-in-out");
setTimeout(function(){
    var ele = $("#achivement-carousel-1div").children().first();
    $("#achivement-carousel-1div").append(ele);
    $(".achivement-carousel-imgdiv:nth-of-type(2)").css("transform","scale(1.2)");
    $("#achivement-carousel-1div").css("left","-40em");
    $("#achivement-carousel-1div").css("transition","0s");
},700);
},10000);
}
timer1();
$(".achievment-carousel-left ").click(function(){
  if(winwidth<=1200){
    $("#achivement-carousel-1div").css("left","-84em");
  }else{
    $("#achivement-carousel-1div").css("left","-90em");

  }
  $("#achivement-carousel-1div").css("transition","0s");
  $(".achivement-carousel-imgdiv:nth-of-type(2)").css("transform","scale(1)");
  var ele1 = $("#achivement-carousel-1div").children().last();
  $("#achivement-carousel-1div").prepend(ele1);
  setTimeout(function(){
    $("#achivement-carousel-1div").css("left","-40em");
    $(".achivement-carousel-imgdiv:nth-of-type(2)").css("transform","scale(1.2)");
    $("#achivement-carousel-1div").css("transition","0.7s");
    $("#achivement-carousel-1div").css("transition-timing-function","ease-out");
  },50);
  clearInterval(achievment_intervel1);
  timer1();
});
$(".achievment-carousel-right").click(function(){
  if(winwidth<=1200){
    $("#achivement-carousel-1div").css("left","-84em");
  }else{
    $("#achivement-carousel-1div").css("left","-90em");

  }
  $(".achivement-carousel-imgdiv:nth-of-type(2)").css("transform","scale(1)");
  $("#achivement-carousel-1div").css("transition","0.5s");
  $("#achivement-carousel-1div").css("transition-timing-function","ease-out");
  setTimeout(function(){
    $("#achivement-carousel-1div").css("left","-40em");
    $("#achivement-carousel-1div").css("transition","0s");
    var ele2 = $("#achivement-carousel-1div").children().first();
    $("#achivement-carousel-1div").append(ele2);
    $(".achivement-carousel-imgdiv:nth-of-type(2)").css("transform","scale(1.2)");
  },500);
  clearInterval(achievment_intervel1);
  timer1();
});
}
$('.owl-achivement').owlCarousel({
  loop:true,
  center:true,
  margin:100,
  autoplay:true,
  autoplayTimeout:4000,
  autoplayHoverPause:true,
  autoWidth:true,
  smartSpeed: 700,
  items:2,
  nav:false,
  autoHeight:true,
  responsive:{
      600:{
          items:2
      },

  }
});

$('.owl-work').owlCarousel({
loop:true,
margin:10,
autoplay:true,
autoplayTimeout:6000,
autoplayHoverPause:true,
autoWidth:true,
smartSpeed: 1000,
items:2,
nav:false,
autoHeight:true,
responsive:{
    0:{
      items:1
    },
    600:{
        items:2
    },
    1200:{
      items:3
    }

}
});
$('.pc-carousel-right').click(function() {
    $('.owl-work').trigger('stop.owl.autoplay');
    $('.owl-work').trigger('next.owl.carousel', [500]);
    $('.owl-work').trigger('play.owl.autoplay');
})
$('.pc-carousel-left').click(function() {
    $('.owl-work').trigger('stop.owl.autoplay');
    $('.owl-work').trigger('prev.owl.carousel', [500]);
    $('.owl-work').trigger('play.owl.autoplay');
})
$('.achievment-right').click(function() {
    $('.owl-achivement').trigger('stop.owl.autoplay');
    $('.owl-achivement').trigger('next.owl.carousel', [500]);
    $('.owl-achivement').trigger('play.owl.autoplay');
});
$('.achievment-left').click(function() {
    $('.owl-achivement').trigger('stop.owl.autoplay');
    $('.owl-achivement').trigger('prev.owl.carousel', [500]);
    $('.owl-achivement').trigger('play.owl.autoplay');
})
});
