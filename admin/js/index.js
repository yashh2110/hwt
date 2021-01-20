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
  $(".menu-icon").click(()=>{
    $(".sidebar").toggleClass("menuclick");
    $(".main").toggleClass("ml0")
  })
  $(".sidebar-donation").click(()=>{
    $.ajax({
      url:"donation.php",
      success:(e)=>{
      $("#main").html(e);
      setInterval(()=>{
        $("#donation-table").load("donation #donation-table");
        $("#donor-amount").load("donation #donor-amount");
        $("#donors").load("donation #donors");
      },3000)
      }
    })
  })
})
