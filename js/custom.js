$(document).ready(function() {

	$('.popup').click(function(e){
			e.preventDefault();
       $.get('popup',function(data){
			$('#popup').modal('show')
		 		.find('#popupContent')
		 		.html(data);
        });
  })
});
