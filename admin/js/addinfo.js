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
})
