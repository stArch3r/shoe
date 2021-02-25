$(document).ready(function() {
    $('.addbrand').click(function(e){
        e.preventDefault();
        $.get('addbrand', function(data) {
            $('#addbrand').modal('show')
            .find('#addbrandContent')
            .html(data);
        });
    });
    $('.addcolor').click(function(e){
        e.preventDefault();
       $.get('addcolor',function(data){
            $('#addcolor').modal('show')
                 .find('#addcolorContent')
                 .html(data);
    });
});
// $('.deposit').click(function(e){
//     e.preventDefault();
// 	var baseUrl = $(this).attr('baseUrl');
//    $.get(baseUrl+'shoe/product/deposit',function(data){
//         $('#deposit').modal('show')
//              .find('#depositContent')
//              .html(data);
// 	});
// });

//addtocart
$('.addtocart').click(function(e){
    e.preventDefault();
    var productid = $(this).attr('productid');
    var userid = $(this).attr('userid');
    var baseUrl = $(this).attr('baseUrl');
    var quantity = $("#quantity_"+productid).val();
    
    $.ajax({
        url: baseUrl+"/product/addtocart?productid="+productid+"&userid="+userid+"&quantity="+quantity,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res);
            alert(res);
        }
    });
    
    alert(productid+' and '+userid+' and '+quantity);
 });


//stepper wizzard
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});


$('.uom').click(function(e){
    e.preventDefault();
   $.get('uom',function(data){
        $('#uom').modal('show')
             .find('#uomContent')
             .html(data);
});
});
});