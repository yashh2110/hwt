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
  $("#focus_img").change(function(){
    $("#focus_imgholder").attr("src",URL.createObjectURL(event.target.files[0]));
    $(".focus_img_text").hide();
  })
  $("#work_img").change(function(){
    $("#work_imgholder").attr("src",URL.createObjectURL(event.target.files[0]));
    $(".work_img_text").hide();
  })
  $("#achivements_img").change(function(){
    $("#achivements_imgholder").attr("src",URL.createObjectURL(event.target.files[0]));
    $(".achivements_img_text").hide();
  })
  $("#gallery_img").change(function(){
    $(".gallery_img_text").hide();
    $(".gallery_img_display").html("");
    var files =$("#gallery_img")[0].files;
    for(var i=0;i<files.length;i++){
      $(".gallery_img_display").prepend("<img width='150px' height='150' style='border-radius:10px;margin:2px 2px 0 0' src='"+URL.createObjectURL(files[i])+"' alt='img'>");
    }
  })
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
  $(".sidebar-add-info").click(()=>{
    $.ajax({
      url:"addinfo.php",
      success:(e)=>{
        $("#main").html(e);
      }
    })
  })
})
