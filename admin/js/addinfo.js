$(document).ready(()=>{
    $("#focus").submit((e)=>{
        e.preventDefault();
        var form =$(e.target).closest("form");
        var fd= new FormData(form[0]);
        $.ajax({
            url:"./api/focus.php",
            type:"POST",
            data: fd,
            processData:false,
            contentType:false,
            success:(e)=>{
                alert(e);
                $("#focus")[0].reset();
                $("#focus_imgholder").attr("src","./images/image_rep.jpg");
                $(".focus_img_text").show()
            }
        })
    })
    $("#work").submit((e)=>{
        e.preventDefault();
        var form=$(e.target).closest("form");
        var fd= new FormData(form[0]);
        $.ajax({
            url:"./api/work.php",
            type: "POST",
            data:fd,
            processData:false,
            contentType: false,
            success:(e)=>{
                alert(e);
                $("#work")[0].reset();
                $("#work_imgholder").attr("src","./images/image_rep.jpg");
                $(".work_img_text").show()
            }
        })

    })
    $("#achivement").submit((e)=>{
        e.preventDefault();
        var form=$(e.target).closest("form");
        var fd= new FormData(form[0]);
        $.ajax({
            url:"./api/achivement.php",
            type: "POST",
            data:fd,
            processData:false,
            contentType: false,
            success:(e)=>{
                alert(e);
                $("#achivements")[0].reset();
                $("#achivements_imgholder").attr("src","./images/image_rep.jpg");
                $(".achivements_img_text").show()
            }
        })

    })
    $("#gallery").submit((e)=>{
        e.preventDefault();
        var count=document.getElementById("gallery_img").files.length;
        var fd= new FormData();
        for(var i=0; i<count; i++){
            fd.append("files[]",document.getElementById("gallery_img").files[i]);
        }
        $.ajax({
            url:"./api/gallery.php",
            type: "POST",
            data:fd,
            processData:false,
            contentType: false,
            success:(e)=>{
                alert(e);
                $("#gallery")[0].reset();
                $(".gallery_img_display").html("<img width='150px' height='150' style='border-radius:10px;margin:2px 2px 0 0' src='./images/image_rep.jpg' alt='img'>");
                $(".gallery_img_display").append(' <div class="darkbg gallery_img_text img_text" style="border-radius:10px"><p class="text-center">Upload Images <br> ctrl + select <br> for mutiple select</p></div>')
            }
        })

    })
})
