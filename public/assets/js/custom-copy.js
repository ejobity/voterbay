$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('#field_wrapper'); //Input field wrapper
    var fieldHTML = ' <div class="row gy-3">'+
    '<div class="col-md-3 mt-2">'+
        '<div class="form-group">'+
            '<label class="form-label" for="fw-candidate-name">Candidate Name</label>'+
            '<div class="form-control-wrap">'+
                '<input type="text" data-msg="Required" class="form-control required"'+
                    'id="fw-candidate-name" name="fw-candidate-name[]" required>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="col-md-3 mt-2">'+
        '<div class="form-group">'+
            '<label class="form-label" for="fw-candidate-position">Candidate Position</label>'+
            '<div class="form-control-wrap">'+
                '<input type="text" data-msg="Required" class="form-control required"' +'id="fw-candidate-position" name="fw-candidate-position[]" required>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="col-md-3 mt-2">'+
        '<div class="form-group">'+
            '<label class="form-label" for="customFileLabel">Candidate Picture</label>'+
            '<div class="form-control-wrap">'+
                '<div class="custom-file">'+
                    '<input type="file" class="custom-file-input" id="customFile"'+
                    'name="fw-candidate-image[]">'+
                    '<label class="custom-file-label" for="customFile">Choose file</label>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="col-md-3 mt-2">'+
        '<div class="form-group">'+
            '<div class="mt-4 form-control-wrap">'+
                '<a href="#" class="btn btn-icon btn-lg btn-primary remove_button"><em class="icon ni ni-trash "></em></a>'+
            '</div>'+
        '</div>'+
    '</div>'+
'</div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent().remove(); //Remove field html
        x--; //Decrement field counter
    });
});

