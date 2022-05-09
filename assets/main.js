$(".retrieve-data").click(function(){
    var id = $(this).attr('id');
    var actionURL = 'lib/read_data.php?c='+id;

    $.ajax({
        type: "POST",
        url: actionURL,
        data: '',
        cache: false,
        success: function(postResponse) {
            var decoded_response = JSON.parse(postResponse);
            if(decoded_response.html !== undefined) {
                $('#readData').html(decoded_response.html);
                $('#title').html(decoded_response.title); 
            }
        }
    });
});

$("#ajaxFormSubmitHandler").submit(function (event) {

    var btnClicked = event.originalEvent.submitter;
    var btnClickedId = $(btnClicked).attr('id');
    $("#ajaxFormSubmitHandler button").attr('disabled', 'disabled');

    $(".error").html('');
    $(".success").html('');


    var data = $(this).serialize();
    if(btnClickedId !== undefined) {
        data += "&buttonId="+btnClickedId;
    }

    var actionUrl = $(this).data('action');
    $('.error-div').html('');

    $.ajax({
        type: "POST",
        url: actionUrl,
        data: data,
        dataType: "json",
        encode: true,
        success: function(postResponse) {
            if(postResponse.postScript !== undefined) {
                $('#postScript').html(postResponse.postScript);
                $('#postScript').html('<'+'script>'+postResponse.postScript+'</s' + 'cript>');
            }
            $("#ajaxFormSubmitHandler button").removeAttr('disabled');
        }
    });
    event.preventDefault();

    });