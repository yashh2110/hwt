$(document).ready(()=>{

    $("#login").submit((e)=>{
        e.preventDefault();
        $.ajax({
            url:"./api/login.php",
            type: "POST",
            data:$("#login").serialize(),
            success:data=>{
                var status = JSON.parse(data);
                if(status.status==200){
                    location.href="http://localhost/hwt/admin/index";
                }else if(status.status==201){
                    alert("incorrect username");
                }else if(status.status==202){
                    alert("incorrect password");
                }else{
                    alert("somting");
                }
            }
        })
    })
})