/**
 * 
 */
$(document).ready(function(){
	$(".btn").click(function(e){
		$("#uneDiv").hide();
		e.preventDefault();
	});
	
	$(".ajax").click(function(e){
		$.ajax({url:"/cvs/Users/all"}).done(
				function(data){$("#divReponse").html(data);});
		e.preventDefault();
	});
	
	$("#btSubmit").click(function(e){
		$.ajax({
			method:"post",
			url:"/cvs/test/submitAjax.php",
			data:$("#form").serialize()
			}).done(
				function(data){
					$("#divReponse").html(data);
				}		
		);
		e.preventDefault();
	});

});