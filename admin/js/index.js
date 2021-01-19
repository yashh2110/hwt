$(document).ready(function(){
  $(".down").click(function(){
    $(".user").toggleClass("t100");
    $(this).toggle();
    $(".up").toggle();
  })
  $(".up").click(function(){
    $(".user").toggleClass("t100");
    $(this).toggle();
    $(".down").toggle();
  })
  setInterval(function(){
    $("#donation-table").load("index #donation-table");
    $("#donor-amount").load("index #donor-amount");
    $("#donors").load("index #donors");
  },3000)
})
