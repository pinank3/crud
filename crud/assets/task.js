$(document).ready(function(){
		//alert(1);
		$(".btn").click(function(){
			//alert(2);
			record = $("#task").serialize();
			//console.log(records);
			$.post("../controller/record_action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="index.php";
				}
				else{
					$(".msg_task").html(response);
				}
			})
		})
	
})