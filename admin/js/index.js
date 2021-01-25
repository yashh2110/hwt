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
    if($(window).width()>768){
    $(".main").toggleClass("ml0");
    }
  })
  if($(window).width()< 768){
    $(".sidebar-item>li").click(()=>{
      $(".sidebar").toggleClass("menuclick")
    })
  }
  $(".sidebar-donation").click(()=>{
    if(typeof(refreshTable)==="function"){
      clearInterval(refreshTable);
  
      }
    $.ajax({
      url:"donation.php",
      success:(e)=>{
      $("#main").html(e);
      refreshTable = setInterval(()=>{
        $("#donation-table").load("donation?page=1 #donation-table");
      },3000)
      }
    })
  })
  $(".sidebar-volenteer").click(()=>{
    if(typeof(refreshTable)==="function"){
      clearInterval(refreshTable);
  
      }
    $.ajax({
      url:"volenteer.php",
      success:(e)=>{
        $("#main").html(e);
        refreshTable =setInterval(()=>{
          $("#volenteer-table").load("volenteer?page=1 #volenteer-table");
        },3000);
      }
    })
  })
  $(".sidebar-subscriber").click(()=>{
    $.ajax({
      url:"subscriber.php",
      success:(e)=>{
        $("#main").html(e);
      }
    })
  })
  ajax_pagination=(i,page)=>{

    clearInterval(refreshTable);
    

    $.ajax({
      url:page+"?page="+i,
      success:(e)=>{
        $("#main").html(e);
        refreshTable = setInterval(()=>{
          $("#"+page+"-table").load(page+"?page="+i+" #"+page+"-table");
        },3000)
      }
    })
  }
})
