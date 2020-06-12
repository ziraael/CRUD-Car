// EDIT
$("#exampleModalCenter2").on("show.bs.modal",function(event){
    var button = $(event.relatedTarget);
    var lloji = button.data('lloji');
    var ngjyra = button.data('ngjyra');
    var viti = button.data('viti');
    var kaluara = button.data('kaluara');
    var demtuar = button.data('demtuar');
    var car_id = button.data('car_id');
    var modal = $(this);

    modal.find('.modal-body #lloji').val(lloji);
    modal.find('.modal-body #ngjyra').val(ngjyra);
    modal.find('.modal-body #viti').val(viti);
    modal.find('.modal-body #kaluara').val(kaluara);
    if(demtuar === ("Po")){
        modal.find('.modal-body #po_value').prop("checked", true);
    }
    else{
        modal.find('.modal-body #jo_value').prop("checked", true);
    }
    modal.find('.modal-body #car_id').val(car_id);
})

// DELETE
$("#exampleModalCenter3").on("show.bs.modal",function(event){
    var button = $(event.relatedTarget);
    var car_id = button.data('car_id');
    var modal = $(this);

    modal.find('.modal-body #car_id').val(car_id);
})

// SHOW
$("#exampleModalCenter4").on("show.bs.modal",function(event){
    var button = $(event.relatedTarget);
    var lloji = button.data('lloji');
    var ngjyra = button.data('ngjyra');
    var viti = button.data('viti');
    var kaluara = button.data('kaluara');
    var demtuar = button.data('demtuar');
    var car_id = button.data('car_id');
    var modal = $(this);

    modal.find('.modal-body #lloji').val(lloji);
    modal.find('.modal-body #ngjyra').val(ngjyra);
    modal.find('.modal-body #viti').val(viti);
    modal.find('.modal-body #kaluara').val(kaluara);
    if(demtuar === ("Po")){
        modal.find('.modal-body #po_value').prop("checked", true);
    }
    else{
        modal.find('.modal-body #jo_value').prop("checked", true);
    }
    modal.find('.modal-body #car_id').val(car_id);
})

$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").slideUp(1000);
    }, 2000);
});

$('li').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
  });