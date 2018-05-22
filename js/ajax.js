$(document).ready(function(){

	$("button").click(function(){

		$.get("consultadb.php", function(data, status){

			$("#usuarios").html(data);

		});

	});

});
