
$(function(){
	$("select[name=group_id]").change(function(){
		
	var result = confirm("确定要修改用户对应的分组？");
        if (!result) 
            location.reload();
         //   return;
        
        //发送AJAX 请求到服务器端处理
        $.ajax({

            type : "post",
            url : "/laravel/public/Admin/user/setgroup",
            data : "groupid=" + $(this).val() + "&uid=" + $(this).attr("uid"), 
            dataType : "json",
      
            success : function (result) {
                alert(result.info);
                if (!result.status) location.reload();
            }

        });


  
        
    });
})