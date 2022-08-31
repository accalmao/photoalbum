$(document).on('submit', '#img-upload', function (e) {
    e.preventDefault();
    var form_data = new FormData(this);
    form_data.append("AJAX_SUBMIT", "Y");
    form_data.append("album_id", $("#ALBUM_CODE").val());
    $.ajax({
        url: $(form_data).attr('action'),
        type: 'POST',
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        data: form_data,
        success: function (result) {
            if (result["status"] === "success") {
                alert("Изображения успешно добавлены");
                $('#imgER').hide();
            } else {
                $('#imgER').show();
            }
        }
    });
})