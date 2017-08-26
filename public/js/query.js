


var user_id = $('#field1').data("field1-id");

var job_id = $('#field2').data("field2-id");


function getApply(){

	$.ajax({
		type:'GET',
		url : '/job/'+ user_id +'/apply/'+ job_id,
		success:function(data){
                  $("#msg").html(data.msg);
               }
            });
}