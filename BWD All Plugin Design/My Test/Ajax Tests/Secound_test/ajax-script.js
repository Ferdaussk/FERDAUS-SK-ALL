var loadData = function(){

const id = $("#courseName").val();

 $.ajax({    
     type: "post",
     url: "display-script.php", 
     data:{courseId:id},      
     dataType: "html",                  
     success: function(data){   
      
        $("#displayData").html(data);
     }
 });
};