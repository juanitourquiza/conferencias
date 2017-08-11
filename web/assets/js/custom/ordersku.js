$(document).ready(function(){
  $("#hide").click(function(){
    $("#element").hide();
  });
  $("#show").click(function(){
    $("#element").show();
  });

	$("#idn").click(function(){
		$(this).addClass("hidden");
    $('#shippingtrackingnumber').prop('disabled', true);
		alert ("Update shipping Tracking Number");





		//alert($("#shippingtrackingnumber").val());
		var data=$("#shippingtrackingnumber").val();
		var actb=$(this).attr("data-order");

		$.ajax({
				//Funciona en produccion, cambio global layout
				//url: "/admin/updatestn/"+actb,
				url: URL+"/admin/updatestn/"+actb,
				type: "GET",
				data: {data: data},
				success: function(response){
        	console.log(response);
    }});
  });
});
