$(document).ready(function() {

	$('.mpesa').click(function(e){
			e.preventDefault();
       $.get('mpesa',function(data){
			$('#mpesa').modal('show')
		 		.find('#mpesaContent')
		 		.html(data);
        });
  })
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

