$(document).ready(function() {

	$('.mpesa').click(function(e){
			e.preventDefault();
       $.get('mpesa',function(data){
			$('#mpesa').modal('show')
		 		.find('#mpesaContent')
		 		.html(data);
        });
  })
// });
$('.popup').click(function (e) {
    e.preventDefault();
    var shoeId = $(this).attr('val');
    $.get('popup?shoeId='+shoeId, function (data) {
        $('#popup').modal('show')
            .find('#popupContent')
            .html(data);
    });
});
});