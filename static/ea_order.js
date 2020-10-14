/*
		EA Order Form
					JavaScript Files
	Coder	: Evrim Altay KOLUACIK
	Help	: https://support.rimtay.com/
	
	All rights are reserved.
*/

	function getPrice(id){
		var	quantity	= $("input[name=quantity-"+id+"]").val();
		var	price		= $("input[name=price-"+id+"]").val();
		var	tax			= $("input[name=tax-"+id+"]").val();
		var total		= (((quantity * price) * tax) / 100) + (quantity * price);
			
			total = total.toFixed(2);
			$("input[name=total-"+id+"]").val(total); 
			
			getTotal();
	}

	function getTotal(){
		var subtotal = 0;
		$("td.rimproducts .rimtotal").each(function(index,element){
		
			subtotal = subtotal + parseFloat($(element).val());
		});
		
		subtotal = subtotal.toFixed(2);
		
		$("input[name=subtotal]").val(subtotal); 
		
		

	}