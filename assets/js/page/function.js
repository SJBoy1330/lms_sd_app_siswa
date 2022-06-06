
function submit_form(element, id_form, num = 0, color = '#FFFFFF') {
    // console.log('ok');
    var text_button = document.getElementById(element.id).innerHTML;
    var url = $(id_form).attr('action');
    var method = $(id_form).attr('method');
    // console.log(url);

    var form = $('form')[num];
    var form_data = new FormData(form);

    // console.log(form);
    $.ajax({
        url: url,
        method: method,
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        beforeSend: function () {
            $('#' + element.id).prop('disabled', true);
            $('#' + element.id).html('<div class="spinner-border" style="color : ' + color + '" role="status">\
                <span class="sr-only"></span>\
</div>');
        },
        success: function (data) {
            // console.log(data);

            $('.fadedin').remove();
            if (data.load != null) {
                for (var a = 0; a < data.load.length; a++) {
                    $(data.load[a].parent).load(data.load[a].reload);
                }
            }
            $('#' + element.id).prop('disabled', false);
            $('#' + element.id).html(text_button);
            if (data.modal != null) {
                $(data.modal.id).modal(data.modal.action);
            }
            if (data.status == 200 || data.status == true) {
                var icon = 'success';
            } else {
                var icon = 'warning';
            }
            if (data.alert) {
                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: css_button
                    }
                }).then(function () {
                    if (data.redirect) {
                        location.href = data.redirect;
                    }
                    if (data.reload == true) {
                        location.reload();
                    }
                    if (data.modal != null) {
                        $(data.modal.id).modal(data.modal.action);
                    }
                });
            } else {
                if (data.required) {
                    const array = data.required.length;
                    for (var i = 0; i < array; i++) {
                        $('#' + data.required[i][0]).append('<span class="text-danger fadedin">' + data.required[i][1] + '</span>');
                    }
                }
                if (data.redirect) {
                    location.href = data.redirect;
                }

                if (data.reload == true) {
                    location.reload();
                }
            }
        }
    });

}


function search(element, id_tabel, property = 'tbody tr', backup = null) {
    $(id_tabel + ' ' + property).filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(element.value.toLowerCase()) > -1);
        if (backup != null) {
            var vector = document.querySelector(backup);
            if ($(this).text().toLowerCase().indexOf(element.value.toLowerCase()) <= -1) {
                vector.classList.remove('d-none');
            } else {
                vector.classList.add('d-none');
            }
        }
    });
}