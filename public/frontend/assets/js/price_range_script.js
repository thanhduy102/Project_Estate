$(document).ready(function(){
	
	// $('#price-range-submit').hide();

	$("#min_price,#max_price").on('change', function () {

	//   $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });
	  
	});


	$("#min_price,#max_price").on("paste keyup", function () {                                        


	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());
	  
	  if(min_price_range == max_price_range){

			// max_price_range = min_price_range + 100;
			
			$("#min_price").val(min_price_range);		
			$("#max_price").val(max_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 20000,
		values: [0, 0],
		step: 200,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  
		  $("#min_price").val(ui.values[0]);
		  $("#max_price").val(ui.values[1]);
		//   var str="";
		  str=ui.values[0]+"(m²)->"+ui.values[1]+"(m²)";
		  viewGiaTien(ui.values[0],ui.values[1]);
		//   $("#str_price").html(str);
		}
	  });

	  $("#min_price").val($("#slider-range").slider("values", 0));
	  $("#max_price").val($("#slider-range").slider("values", 1));

	});


	$(".range_price_js").hide();
	$("#filter_price").click(function(){
		$(".range_price_js").toggle();
		
	});
});


function viewGiaTien(min_price,max_price){
    var formatter = new Intl.NumberFormat({
            style: 'currency',
            
        });
    
    var min_price_1=min_price.toString().length;
    var min_price_2=min_price.toString();
	var max_price_1=max_price.toString().length;
    var max_price_2=max_price.toString();
	var str="";
    // $("#txt_giaBDS").val(b)
    if(min_price_1<=1 && max_price_1<=3){
        str+=min_price+" đ->"+max_price+" triệu";
		$("#str_price").html(str);
        
    }
	else if(min_price_1<=1 && max_price_1>3){
		var price_end=(Number(max_price_2)/1000);
		str+=min_price+" đ->"+formatter.format(price_end)+" tỷ";
		$("#str_price").html(str);
	}
    else if(min_price_1<=3 && max_price_1<=3){
        str+=min_price+" triệu->"+max_price+" triệu";
		$("#str_price").html(str);
    }
	else if(min_price_1<=3 && max_price_1>3){
        var price_end=(Number(max_price_2)/1000);
		str+=min_price+" triệu->"+formatter.format(price_end)+" tỷ";
		$("#str_price").html(str);
    }
	else if(min_price_1>3 && max_price_1>3){
		var price_start=(Number(min_price_2)/1000);
		var price_end=(Number(max_price_2)/1000);
        str+=formatter.format(price_start)+" tỷ->"+formatter.format(price_end)+" tỷ";
		$("#str_price").html(str);
    }

    
    // else{
    //     $("#txt_sotien").html("");
    //     $("#txt_showMoney").val("");
    // }
  }
  

  function viewGiaTien1(){
    var txt_donvi=$("#txt_donvi").val();
    if(txt_donvi=="VNĐ"){
      var formatter = new Intl.NumberFormat({
            style: 'currency',
            
        });
      var donVi1="";
      var donVi2=" nghìn";
      var donVi3=" triệu";
      var donVi4=" tỷ";
      var txt_gia=$("#txt_gia").val();
      var a=txt_gia.toString().replace(/,/g,'').length;
      var b=txt_gia.toString().replace(/,/g,'');
      $("#txt_giaBDS").val(b)

      if(a>=1 && a<=3){
        $("#txt_sotien").html(formatter.format(b)+donVi1);
        $("#txt_showMoney").val(formatter.format(b)+donVi1);
      }
      else if(a>=4 && a<=6){
        $("#txt_sotien").html(formatter.format(b)+donVi2);
        $("#txt_showMoney").val(formatter.format(b)+donVi2);
      }
      else if(a>=7 && a<=9){
        var d=Math.trunc(Number(b)/1000);
        $("#txt_sotien").html(formatter.format(d)+donVi3);
        $("#txt_showMoney").val(formatter.format(d)+donVi3);
      }
      else if(a>=10){
        var d=Math.trunc(Number(b)/1000000);
        $("#txt_sotien").html(formatter.format(d)+donVi4);
        $("#txt_showMoney").val(formatter.format(d)+donVi4);
      }
      else{
        $("#txt_sotien").html("");
        $("#txt_showMoney").val("");
      }
    }
    else if(txt_donvi=="m²"){
      var formatter = new Intl.NumberFormat({
            style: 'currency',
            
      });
      var donVi1="";
      var donVi2=" nghìn";
      var donVi3=" triệu";
      var donVi4=" tỷ";
      var txt_gia=$("#txt_gia").val();
     
      var a=txt_gia.toString().replace(/,/g,'').length;
      var b=txt_gia.toString().replace(/,/g,'');
      $("#txt_giaBDS").val(b)
      if(a>=1 && a<=3){
        $("#txt_sotien").html(formatter.format(b)+donVi1+"/m²");
        $("#txt_showMoney").val(formatter.format(b)+donVi1+"/m²");
      }
      else if(a>=4 && a<=6){
        $("#txt_sotien").html(formatter.format(b)+donVi2+"/m²");
        $("#txt_showMoney").val(formatter.format(b)+donVi2+"/m²");
      }
      else if(a>=7 && a<=9){
        var d=Math.trunc(Number(b)/1000);
        $("#txt_sotien").html(formatter.format(d)+donVi3+"/m²");
        $("#txt_showMoney").val(formatter.format(d)+donVi3+"/m²");
      }
      else if(a>=10){
        var d=Math.trunc(Number(b)/1000000);
        $("#txt_sotien").html(formatter.format(d)+donVi4+"/m²");
        $("#txt_showMoney").val(formatter.format(d)+donVi4+"/m²");
      }
      else{
        $("#txt_sotien").html("");
        $("#txt_showMoney").val("");
      }
    }
    else if(txt_donvi=="tháng"){
      var formatter = new Intl.NumberFormat({
            style: 'currency',
            
      });
      var donVi1="";
      var donVi2=" nghìn";
      var donVi3=" triệu";
      var donVi4=" tỷ";
      var txt_gia=$("#txt_gia").val();

      var a=txt_gia.toString().replace(/,/g,'').length;
      var b=txt_gia.toString().replace(/,/g,'');
      $("#txt_giaBDS").val(b)
      if(a>=1 && a<=3){
        $("#txt_sotien").html(formatter.format(b)+donVi1+"/tháng");
        $("#txt_showMoney").val(formatter.format(b)+donVi1+"/tháng");
      }
      else if(a>=4 && a<=6){
        $("#txt_sotien").html(formatter.format(b)+donVi2+"/tháng");
        $("#txt_showMoney").val(formatter.format(b)+donVi2+"/tháng");
      }
      else if(a>=7 && a<=9){
        var d=Math.trunc(Number(b)/1000);
        $("#txt_sotien").html(formatter.format(d)+donVi3+"/tháng");
        $("#txt_showMoney").val(formatter.format(d)+donVi3+"/tháng");
      }
      else if(a>=10){
        var d=Math.trunc(Number(b)/1000000);
        $("#txt_sotien").html(formatter.format(d)+donVi4+"/tháng");
        $("#txt_showMoney").val(formatter.format(d)+donVi4+"/tháng");
      }
      else{
        $("#txt_sotien").html("");
        $("#txt_showMoney").val("");
      }
    }
 
  }