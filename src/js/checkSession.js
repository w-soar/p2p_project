$.ajax({
    type:'get',
    url:'./api/sessionState.php',
    dataType:'json',
    success:function(data){
        // console.log(data);
        if(!data.isSuccess){
            alert(data.msg);
            location.href="login.php";
        }
    }



});