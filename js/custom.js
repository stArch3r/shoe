$(document).ready(function() {

	$('.deposit').click(function(e){
			e.preventDefault();
			var baseUrl = $(this).attr('baseUrl');
       $.get(baseUrl+ '/product/deposit',function(data){
			$('#deposit').modal('show')
		 		.find('#depositContent')
		 		.html(data);
        });
  })
});
$('.addtoorder').click(function(e){
    e.preventDefault();
    const $cartQuantity = $('#cart-quantity');
    var productId= $(this).attr('productId');
    var userId = $(this).attr('userId');
    var baseUrl = $(this).attr('baseUrl');
    var total = $("#total"+productId).val();
    $.ajax({
        url: baseUrl+"/product/order?productId="+productId+"&userId="+userId+"&total="+total,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res);
            alert(res);
            $cartQuantity.text(parseInt($cartQuantity.text() || 0) + 1);
        }
	}); 


    alert(productId+' and '+userId+' and '+total);
    
});
});
// $('.ken').click(function (e) {
//     e.preventDefault();
//     var shoeId = $(this).attr('val');
//     $.get('ken?shoeId='+shoeId, function (data) {
//         $('#ken').modal('show')
//             .find('#kenContent')
//             .html(data);
//     });
// $('.ken').click(function (e) {
//     e.preventDefault();
//     var id = $(this).attr('val');
//     $.get('ken?id='+id, function (data) {
//         $('#ken').modal('show')
//             .find('#kenContent')
//             .html(data);
//     });
// });
// });

