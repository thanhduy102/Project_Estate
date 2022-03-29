$(document).ready(function(){

	$("#dt_min_price,#dt_max_price").on('change', function () {
	  var min_price_range = parseInt($("#dt_min_price").val());

	  var max_price_range = parseInt($("#dt_max_price").val());

	  if (min_price_range > max_price_range) {
		$('#dt_max_price').val(min_price_range);
	  }

	  $("#dt_slider-range").slider({
		values: [min_price_range, max_price_range]
	  });
	  
	});


	$("#dt_min_price,#dt_max_price").on("paste keyup", function () {                                        

	//   $('#price-range-submit').show();

	  var min_price_range = parseInt($("#dt_min_price").val());

	  var max_price_range = parseInt($("#dt_max_price").val());
	  
	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;
			
			$("#dt_min_price").val(min_price_range);		
			$("#dt_max_price").val(max_price_range);
	  }

	  $("#dt_slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#dt_slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 1000,
		values: [0, 0],
		step: 10,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  
		  $("#dt_min_price").val(ui.values[0]);
		  $("#dt_max_price").val(ui.values[1]);
		  var str="";
		  str=ui.values[0]+"(m²)->"+ui.values[1]+"(m²)";
		  $("#dt_str_price").html(str);
		}
	  });

	  $("#dt_min_price").val($("#dt_slider-range").slider("values", 0));
	  $("#dt_max_price").val($("#dt_slider-range").slider("values", 1));

	});


	$(".dt_range_price_js").hide();
	$("#dt_filter_price").click(function(){
		$(".dt_range_price_js").toggle();
		
	});
});

