var votersAdd;
var voterDelete;
var formClearGroupFieldsModal;
var fieldHTMLVoterGroup;
var fieldHTMLVoter;
var appendToVoterTable;
var fieldHTML;
$(document).ready(function () {

    /* Add an additional candidate field */

    var countCandidates = 1; //Initial field counter is 1
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('#field_wrapper'); //Input field wrapper
    fieldHTML = function (countCandidates) {
        return ' <div class="control-group">' +
            ' <div class="row gy-3">' +
            '<div class="col-md-3 mt-2">' +
            '<div class="form-group">' +
            '<label class="form-label" for="fw-candidate-name">Candidate Name</label>' +
            '<div class="form-control-wrap">' +
            '<input type="text"  class="form-control" id="fw-candidate-name' + countCandidates + '"' +
            'name="fw-candidate-name[]" >' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3 mt-2">' +
            '<div class="form-group">' +
            '<label class="form-label" for="fw-candidate-position">Candidate Position</label>' +
            '<div class="form-control-wrap">' +
            '<input type="text"  class="form-control" id="fw-candidate-position' + countCandidates + '"' + 'name="fw-candidate-position[]">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3 mt-2">' +
            '<div class="form-group">' +
            '<label class="form-label" for="customFileLabel">Candidate Picture</label>' +
            '<div class="form-control-wrap">' +
            '<div class="custom-file">' +
            '<input type="file" class="custom-file-input candidate_file_input" id="candidatePicture' + countCandidates + '"' +
            'name="fw-candidate-image[]" oninput="candidate_image' + countCandidates + '.src=window.URL.createObjectURL(this.files[0])">' +
            '<label class="custom-file-label candidate_file_label" for="customFile" id="candidatePicture' + countCandidates + '-label">Choose file</label>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-2">' +
            '<div class="form-group">' +
            '<div class="user-avatar xl">' +
            '<img src="https://icons.iconarchive.com/icons/papirus-team/papirus-status/128/avatar-default-icon.png" alt="candidate image" class="candidate_image" id="candidate_image' + countCandidates + '">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-1 mt-2">' +
            '<div class="form-group">' +
            '<div class="mt-4 form-control-wrap">' +
            '<a href="#" class="btn btn-icon btn-lg btn-primary remove_button"><em class="icon ni ni-trash "></em></a>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'; //New input field html
    }


    //Once add button is clicked
    $(addButton).click(function () {
        //Check maximum number of input fields
        if (countCandidates < maxField) {
            countCandidates++; //Increment field counter
            $(wrapper).append(fieldHTML(countCandidates)); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function (e) {
        e.preventDefault();
        $(this).parents('.control-group').remove(); //Remove field html
        countCandidates--; //Decrement field counter
    });


    /* Add an additional voter group field */
    var maxFieldVoterGroup = 99; //Input fields increment limitation for group field
    var addButtonVoterGroup = $('.add_button_group'); //Add button selector for group field
    var wrapperVoterGroup = $('#field_wrapper_voter_group'); //Input field wrapper
    var countVoterGroup = 1; //Initial field counter is 1
    var voterTableCount = 0; //Count voters on table

    //Once add button is clicked
    $(addButtonVoterGroup).click(function () {
        //Check maximum number of input fields
        if (countVoterGroup < maxFieldVoterGroup) {
            countVoterGroup++; //Increment field counter
            $(wrapperVoterGroup).append(fieldHTMLVoterGroup()); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapperVoterGroup).on('click', '.remove_button_voter_group', function (e) {
        e.preventDefault();
        $(this).parents('.control-group-voter-group').remove(); //Remove field html
        countVoterGroup--; //Decrement field counter
    });



    /* Add voters to table dynamically */
    // Add voters to <table>
    var voterTableCount = 1; //Initial field counter is 1

    votersAdd = function () {

        var voterEmailAddress = $("#voter-email-address").val();
        var voterSelectOptionValue = $("#selectVoterGroupModal option:selected").val();
        var voterSelectOptionText = $("#selectVoterGroupModal option:selected").text();
        var groupID = $("#formInputGroupIdModal").val();
        var groupName = $("#formInputGroupNameModal").val();

        if (voterEmailAddress !== "") {
            // First check if a <tbody> tag exists, add one if not
            if ($(".voter-table tbody").length == 0) {
                $(".voter-table").append("<tbody></tbody>");
            }

            //if checkbox voter group is checked
            if (document.getElementById('chkboxGroupVote').checked) {

                //if add new group is selected from the drop down
                if (voterSelectOptionValue == 'addNewGroupSelect') {
                    if ((groupID !== "") && (groupName !== "")) {

                        // Append product to the table with the group id field and group name field
                        appendToVoterTable(voterTableCount++, voterEmailAddress, groupID, groupName);

                        countVoterGroup++; //Increment field counter
                        $(wrapperVoterGroup).append(fieldHTMLVoterGroup(groupID, groupName)); //Add field html

                    }
                } else {
                    // Append product to the table

                    appendToVoterTable(voterTableCount++, voterEmailAddress, voterSelectOptionValue, voterSelectOptionText);
                }
            } else {
                // Append product to the table
                appendToVoterTable(voterTableCount++, voterEmailAddress, groupID, groupName);
            }


        }

    }

    appendToVoterTable = function (voterTableCount, voterEmailAddress, groupID, groupName) {

        // Append product to the table with the group id field and group name field
        $(".voter-table tbody").append(
            '<tr id="' + voterTableCount + '">' +
            '<td><input class="form-control" type="text" name="fw-voter-email-address[]" value="' + voterEmailAddress + '" /></td>' +
            '<td><input class="form-control" type="text" name="fw-voter-group-id[]" value="' + groupID + '" /></td>' +
            '<td><input class="form-control" type="text" name="fw-voter-group-name[]" value="' + groupName + '" /></td>' +
            '<td><button type="button" onclick="voterDelete(this);" class="btn btn-default"><em class="ni ni-trash"></em></button></td>' +
            '</tr>');

        voterTableCount++;
        formClearGroupFieldsModal();
        //close voter modal
        $("#modalFormAddVoter").modal('hide');

    }


    fieldHTMLVoterGroup = function (groupID, groupName) {


        if (groupID == null) {
            groupID = "";
        }

        if (groupName == null) {
            groupName = "";
        }

        var html = ' <div class="control-group-voter-group">' +
            ' <div class="row gy-3">' +
            '<div class="col-md-5 mt-2">' +
            '<div class="form-group">' +
            '<label class="form-label" for="fw-group-id">Group ID</label>' +
            '<div class="form-control-wrap">' +
            '<input type="text"  data-msg="Required" class="form-control required" value="' + groupID + '" name="fw-group-id[]" required>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-5 mt-2">' +
            '<div class="form-group">' +
            '<label class="form-label" for="fw-group-name">Group Name</label>' +
            '<div class="form-control-wrap">' +
            '<input type="text" class="form-control required" data-msg="Required" value="' + groupName + '" name="fw-group-name[]" required>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-2 mt-2">' +
            '<div class="form-group">' +
            '<div class="mt-4 form-control-wrap">' +
            '<a href="#" class="btn btn-icon btn-lg btn-primary remove_button_voter_group"><em class="icon ni ni-trash "></em></a>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'; //New input field html

        return html;
    }


    formClearGroupFieldsModal = function () {

        $("#formInputGroupIdModal").val("");
        $("#formInputGroupNameModal").val("");
        $("#voter-email-address").val("");
    }

    //If select is equal to a value in dropdown list
    //AddNewGroup show fields so that the user can add data
    $("#selectVoterGroupModal").change(function () {
        if ($(this).val() == 'addNewGroupSelect') {
            $('#addNewGroupFieldsModal').collapse('toggle')
        } else {
            $('#addNewGroupFieldsModal').collapse('hide')
        }
    });

    //Delete voter from Table
    voterDelete = function (ctl) {
        $(ctl).parents("tr").remove();
    }

    //Once add voter button is clicked
    $("#voterAddButton").click(function () {

        formClearGroupFieldsModal();

        var countGroupFields = 0;

        //Add New Group option in drop down list
        $('#selectVoterGroupModal').empty().append('<option value="addNewGroupSelect">Add New Group</option>');

        //Check maximum number of input fields and assign it to an array groupID
        var groupIDValues = $("input[name='fw-group-id[]']")
            .map(function () {
                return $(this).val();
            }).get();

        //Check maximum number of input fields and assign it to an array groupName
        var groupNameValues = $("input[name='fw-group-name[]']")
            .map(function () {
                return $(this).val();
            }).get();

        //Append the dropdown list with voter groups that were added
        for (var index = 0; index <= groupIDValues.length - 1; index++) {

            //if groupid and groupname fields have no values, skip this part and dont add a set of empty fields
            if ((groupIDValues[index] != "") && (groupNameValues[index] != "")) {
                if (index == 0) {
                    $('#selectVoterGroupModal').append('<option selected="selected" value="' + groupIDValues[index] + '">' + groupNameValues[index] + '</option>');
                } else {
                    $('#selectVoterGroupModal').append('<option value="' + groupIDValues[index] + '">' + groupNameValues[index] + '</option>');
                }
                countGroupFields++;
            }
        }
        //if no values or empty show the option to add new group
        if (countGroupFields == 0) {
            $('#addNewGroupFieldsModal').collapse('show');
        } else {
            $('#addNewGroupFieldsModal').collapse('hide');
        }
    });


    //show selected plan on the summary page
    $("#planRadioGroup").click(function () {
        var value = $("input[type='radio'][name='btnRadioPlan']:checked").val();
        var string;

        switch (value) {
            case '1':
                string = 'Starter Plan, 1000 Voters, Billed Yearly, $99/yr';
                break;
            case '2':
                string = 'Pro Plan, 5000 Voters, Billed Yearly, $299/yr';
                break;
            case '3':
                string = 'Enterprise Plan, 15000 Voters, Billed Yearly, $599/yr';
                break;
            case '4':
                string = 'Mega Plan, Over 15000 Voters, Call us for a quote';
        }

        $("#summaryPlan").text(string);
    });

    //Update review text dynamically Event review
    $("#electionTypeRadioGroup").click(function () {
        var value = $("input[type='radio'][name='btnRadioElectionType']:checked").val();
        var string;

        switch (value) {
            case 'election':
                string = 'Election';
                break;
            case 'meeting':
                string = 'Meeting';
        }

        $("#review-radio-election").text(string);
    });
    $('#fw-event-name').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-event-name").text(val);
    });

    $('#fw-event-start-date').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-event-start-date").text(val);
    });


    $('.actions').on('click', function () {
        var val = $('#fw-event-start-time').val();
        $("#review-event-start-time").text(val);

        var val = $('#fw-event-end-time').val();
        $("#review-event-end-time").text(val);


       /*  $("#review-voter-data-table").empty();
        $("#voter-data-table").clone().appendTo("#review-voter-data-table");
        $('#review-voter-data-table th:nth-child(4),#review-voter-data-table td:nth-child(4)').remove(); */

    });



    $('#fw-event-end-date').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-event-end-date").text(val);
    });


    /* Update review text dynamically Organization review */

    $('#fw-organization-name').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-organization-name").text(val);
    });

    $('#fw-organization-address').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-organization-address").text(val);
    });

    $('#fw-organization-email-address').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-organization-email-address").text(val);
    });

    $('#fw-organization-mobile-number').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-organization-mobile-number").text(val);
    });

    $('#fw-organization-country').on('keyup keypress blur change click', function (e) {
        var val = $(this).val();
        $("#review-organization-country").text(val);
    });

    $('#fw-organization-voter-number').on('keyup keypress blur change', function (e) {
        var val = $(this).val();
        $("#review-organization-voter-number").text(val);
    });

    /* Update review text dynamically Candidates review */

    $('.actions').on('click', function () {

        if ($("#election_form").steps("getCurrentIndex") == 4) {
            var cname = $("input[name='fw-candidate-name[]']")
                .map(function () {
                    return $(this).val();
                }).get();


            var cposition = $("input[name='fw-candidate-position[]']")
                .map(function () {
                    return $(this).val();
                }).get();


            /* var cimage = $("input[name='fw-candidate-image[]']")
                .map(function () {
                    return $(this).val();
                }).get(); */

            var cimage = $(".candidate_image")
                .map(function () {
                    return $(this).attr('src');
                }).get();




            // Append product to the table with the group id field and group name field
            $("#candidate-data-table tbody").empty();
            for (var i = 0; i < cname.length; i++) {

                $("#candidate-data-table tbody").append(
                    '<tr>' +
                    '<td><div class="user-avatar xl"><img src="' + cimage[i] + '"></div></td>' +
                    '<td>' + cname[i] + '</td>' +
                    '<td>' + cposition[i] + '</td>' +
                    '</tr>');

            }

        }


    });


    /*  $('#fw-candidate-name').on('keyup keypress blur change', function (e) {
         var val = $(this).val();
         $("#review-candidate-name").text(val);
     });

     $('#fw-candidate-position').on('keyup keypress blur change', function (e) {
         var val = $(this).val();
         $("#review-candidate-position").text(val);
     });

     $('#candidatePicture').on('keyup keypress blur change ', function (e) {
         var val = $(this).val();
         $("#review-candidate-position").text(val);
     }); */


    //Voter Datatable
    // Activate an inline edit on click of a table cell
    /* $('#voter-data-table').Tabledit({
        columns: {
            identifier: [0, 'id'],
            editable: [
                [1, 'voterEmailAddress'],
                [2, 'votergroupID'],
                [3, 'votergroupName']
            ]
        }
    }); */


    //change avatar picture to selected picture to upload
    /* candidatePicture.onchange = evt => {
        var [file] = candidatePicture.files;
        if (file) {
            candidate_image.src = URL.createObjectURL(file);
        }

        $('#file-image-label').text(file.name);
      }; */

    //Add image name to upload label
    $(wrapper).on('change', '.candidate_file_input', function (e) {
        var url = window.URL.createObjectURL(this.files[0]);
        var image = this.files[0];
        //var getid = $(this).attr('id');
        //change label text to show image name uploaded
        if (countCandidates == 1) {
            $('#candidatePicture-label').text(image.name);
        } else {
            $('#candidatePicture' + countCandidates + '-label').text(image.name);
            console.log('#candidatePicture' + countCandidates + ' count:' + countCandidates);
        }

    });

    //On Show Voters Click, go back to previous
    $('#show-voters-review').click(function() {
        $('#election_form').steps('previous');
    });

    //when  user selects the option for form the quick select option election
    //take action
    $('#election_selection_select').change(function() {
        $('#election_selection_form').submit();
    });

    /*-----------------All of the above code is for the election wizard------------------*/


    //VOTERS
    //on voter click add form
    var countVoters = 1; //Initial field counter is 1
    var maxVoterField = 24; //Input fields increment limitation
    var addVoterButton = $('#addVoterButton'); //Add button selector
    var wrapperVoter = $('#voterRow'); //Input field wrapper
    var grpVoterSelect = "";

    for (let i = 0; i < grp_name.length; i++) {
        grpVoterSelect += "<option value="+grp_id[i]+">"+grp_name[i]+"</option>";
      }

    fieldHTMLVoter = function (grpVoterSelect) {
        return '<div class="voter_add_row">'+
        '<div class="row gy-3">'+
        '<div class="col-md-5">'+
            '<div class="form-group">'+
                '<label class="form-label" for="email">Email address *</label>'+
                '<div class="form-control-wrap">'+
                    '<input type="text" class="form-control required" id="email" required data-msg="Required" name="email[]">'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="col-md-5">'+
            '<div class="form-group">'+
                '<label class="form-label">Group <em data-toggle="tooltip" data-placement="top" title="You can assign voters to groups. This is optional. To add more groups, go to menu->voters->voter groups." class="fas fa-info-circle"></em></label>'+
                '<div class="form-control-wrap">'+
                    '<select name="group_id[]">'+
                    grpVoterSelect+
                    '</select>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="col-md-2">' +
            '<div class="form-group">' +
            '<div class="mt-4 form-control-wrap">' +
            '<a href="#" class="btn btn-icon btn-lg btn-primary remove_voter_button"><em class="icon ni ni-trash "></em></a>' +
            '</div>' +
            '</div>' +
            '</div>' +
        '</div>' +
    '</div>'; //New input field html
    }


    //Once add button is clicked
    $(addVoterButton).click(function () {
        //Check maximum number of input fields
        if (countVoters < maxVoterField) {
            countVoters++; //Increment field counter
            $(wrapperVoter).append(fieldHTMLVoter(grpVoterSelect)); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapperVoter).on('click', '.remove_voter_button', function (e) {
        e.preventDefault();
        $(this).parents('.voter_add_row').remove(); //Remove field html
        countVoters--; //Decrement field counter
    });

    //Sweetalert, confirmation delete voter
    $('.delete_voter').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });

  //Select and deselect all checkboxes in a table
  var $selectAll = $('#pid-all'); // main checkbox inside table thead
  var $table = $('.table'); // table selector
  var $tdCheckbox = $table.find('tbody input:checkbox'); // checboxes inside table body
  var tdCheckboxChecked = 0; // checked checboxes
  var $deleteRecord = $('#deleteCheckedRecords');

  // Select or deselect all checkboxes depending on main checkbox change
  $selectAll.on('click', function () {
    $tdCheckbox.prop('checked', this.checked);

    //Enable or show delete all button if more than two boxes checked
    if ($table.find('tbody input:checkbox:checked').length >= 2) {
        $deleteRecord.removeClass('d-none');
        $deleteRecord.addClass('d-block');
    }
    else{
        $deleteRecord.addClass('d-none');
        $deleteRecord.removeClass('d-block');
    }
  });

  // Toggle main checkbox state to checked when all checkboxes inside tbody tag is checked
  $tdCheckbox.on('change', function(e){
    tdCheckboxChecked = $table.find('tbody input:checkbox:checked').length; // Get count of checkboxes that is checked
    // if all checkboxes are checked, then set property of main checkbox to "true", else set to "false"

    //Enable or show delete all button if more than two boxes checked
    if (tdCheckboxChecked >= 2) {
        $deleteRecord.removeClass('d-none');
        $deleteRecord.addClass('d-block');
    }
    else{
        $deleteRecord.addClass('d-none');
        $deleteRecord.removeClass('d-block');
    }

    $selectAll.prop('checked', (tdCheckboxChecked === $tdCheckbox.length));
  })


  //Delete all records that are checked
  /* var $checkBoxActions = $('#pid-all','.dropdown');
  $checkBoxActions.on('click', function ()  {

    }); */

});


