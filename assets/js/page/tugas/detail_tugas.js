const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

$("#attachment").on('change', function (e) {
	for (var i = 0; i < this.files.length; i++) {
		let fileBloc = $('<span/>', { class: 'file-block' }),
			fileName = $('<span/>', { class: 'name', text: this.files.item(i).name });
		fileBloc.append('<span class="file-delete"><span>+</span></span>')
			.append(fileName);
		$("#filesList > #files-names").append(fileBloc);
	};
	// Ajout des fichiers dans l'objet DataTransfer
	for (let file of this.files) {
		dt.items.add(file);
	}
	// Mise à jour des fichiers de l'input file après ajout
	this.files = dt.files;

	// EventListener pour le bouton de suppression créé
	$('span.file-delete').click(function () {
		let name = $(this).next('span.name').text();
		// Supprimer l'affichage du nom de fichier
		$(this).parent().remove();
		for (let i = 0; i < dt.items.length; i++) {
			// Correspondance du fichier et du nom
			if (name === dt.items[i].getAsFile().name) {
				// Suppression du fichier dans l'objet DataTransfer
				dt.items.remove(i);
				continue;
			}
		}
		// Mise à jour des fichiers de l'input file après suppression
		document.getElementById('attachment').files = dt.files;
	});
});



function hapus_file(id_file) {
	var text_button = document.getElementById('button_submited_tugas').innerHTML;
	$.ajax({
		url: BASE_URL + "tugas/hapus_file/",
		data: { id_file: id_file },
		method: 'POST',
		dataType: 'json',
		cache: false,
		beforeSend: function () {
			$('#button_submited_tugas').prop('disabled', true);
			$('#button_submited_tugas').html('<div class="spinner-border" style="color : #FFFFFF" role="status">\
                     <span class="sr-only"></span>\
</div>');
		},
		success: function (data) {
			// console.log(data);
			$('#button_submited_tugas').prop('disabled', false);
			$('#button_submited_tugas').html(text_button);
			if (data.status == true) {
				$('#jawaban-' + id_file).fadeOut();
			} else {
				Swal.fire({
					title: 'PERINGATAN',
					text: data.message,
					icon: 'warning',
					buttonsStyling: !1,
					confirmButtonText: "Ok",
					customClass: {
						confirmButton: css_button
					}
				})
			}
		}
	})
}

function upload_jawaban(element) {
	// console.log('ok');
	var id = $('#id_tugas').data('id');
	var url = $('#form_submited_tugas').attr('action');
	var method = $('#form_submited_tugas').attr('method');
	// console.log(url);

	var form = $('form')[0];
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
			$('#loading_scene').modal('show');
		},
		success: function (data) {
			$('#loading_scene').modal('hide');
			$('#reload_jawaban').load(BASE_URL + 'tugas/detail_tugas/' + id + ' #load_jawaban_new');
		}
	});
}