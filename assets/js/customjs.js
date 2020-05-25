$(document).ready(function () {
	// public variabel
	var url = $('#url').attr('href');

	// file barang.php
	$("#multi_sat").hide();
	$("#btn_multisat").click(function (event) {
		/* Act on the event */
		$("#multi_sat").show('slow');
	});

	$("#btn_close").click(function (event) {
		/* Act on the event */
		$("#multi_sat").hide('slow');
	});

	// =========================================================function-function kategori
	var table = $('#ktg_table').DataTable({
		"processing": true, //Feature control the processing indicator.
		"serverSide": true, //Feature control DataTables' server-side processing mode.
		"order": [], //Initial no order.
		// Load data for the table's content from an Ajax source
		"ajax": {
			"url": url + 'kategori/ajax_list',
			"type": "POST"
		},
		//Set column definition initialisation properties.
		"columnDefs": [
			{
				"targets": [0], //first column / numbering column
				"orderable": false, //set not orderable
			},
		],

	});

	$("#ktgbtn_simpan").click(function (event) {
		var frm_kategori = $("#frm_kategori").serialize();
		var ktg_nama = $("#ktg_nama").val();
		// alert(frm_kategori);
		// alert(url);
		if ($.trim(ktg_nama) == "") {
			$("#ktg_nama").focus();
			alert_error();
		} else {
			$.ajax({
				url: url + 'Kategori/insert',
				type: "post",
				data: frm_kategori,
				cache: true,
				success: function (html) {
					$("#ktg_nama").focus();
					alert_success();
					$(".clean").val('');
					table.ajax.reload();
					
					// $('#ktg_success').html('Berhasil Disimpan');
				}
			});
		}
	});

	$("#ktg_save_edit").click(function (event) {
		frm_kategori_edit = $('#frm_kategori_edit').serialize();
		// console.log(frm_kategori_edit);
		ktg_id_edit = $("#ktg_id_edit").val();

		$.ajax({
			url: url + 'Kategori/update/' + ktg_id_edit,
			type: "post",
			data: frm_kategori_edit,
			cache: true,
			success: function (html) {
				// console.log(html);
				// alert('success!!');
				$(".clean").val('');
				table.ajax.reload();
			}
		});
	});


	// ==================================================function-function menu vsatuan.php
	stn_table=$('#stn_table').DataTable({
		"processing": true, //Feature control the processing indicator.
		"serverSide": true, //Feature control DataTables' server-side processing mode.
		"order": [], //Initial no order.
		// Load data for the table's content from an Ajax source
		"ajax": {
			"url": url + 'satuan/ajax_list',
			"type": "POST"
		},
		//Set column definition initialisation properties.
		"columnDefs": [
			{
				"targets": [0], //first column / numbering column
				"orderable": false, //set not orderable
			},
		],

	});

	$("#stnbtn_simpan").click(function (event) {
		frm_satuan = $("#frm_satuan").serialize();
		stn_nama = $("#stn_nama").val();
		// alert(frm_satuan);
		// alert(url);
		if ($.trim(stn_nama) == "") {
			$("#stn_nama").focus();
			alert_error();
		} else {
			$.ajax({
				url: url + 'satuan/insert',
				type: "post",
				data: frm_satuan,
				cache: true,
				success: function (html) {
					$("#stn_nama").focus();
					alert_success();
					$(".clean").val('');
					stn_table.ajax.reload();
					
					// $('#ktg_success').html('Berhasil Disimpan');
				}
			});
		}
	});

	$("#stn_save_edit").click(function (event) {
		frm_satuan_edit = $('#frm_satuan_edit').serialize();
		// console.log(frm_satuan_edit);
		stn_id_edit = $("#stn_id_edit").val();

		$.ajax({
			url: url + 'satuan/update/' + stn_id_edit,
			type: "post",
			data: frm_satuan_edit,
			cache: true,
			success: function (html) {
				// console.log(html);
				// alert('success!!');
				$(".clean").val('');
				stn_table.ajax.reload();
			}
		});
	});

});
//==========================================================close tag jquery

// =========================================================function menu kategori
function ktg_delete(id) {//function delete kategori
	var url = $('#url').attr('href');
	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			Swal.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
			)
			$.ajax({
				url: url + 'kategori/ktg_delete/' + id,
				type: 'POST',
				dataType: 'JSON',
				success: function (html) {
					$('#ktg_table').DataTable().ajax.reload();
				}//end success
			})// end ajax
		}// end if
	})// end swall
}// end function ktg_delete()

function ktg_edit(id) {//function update kategori
	// alert(id);
	$("#ktg_id_edit").val(id);
	var url = $('#url').attr('href');
	$.ajax({
		url: url + 'kategori/update_view/' + id,
		type: 'POST',
		dataType: 'JSON',
		success: function (html) {
			// console.log(html);
			$("#exampleModal").modal('show');
			$("#ktg_nama_edit").val(html[0].ktg_nama);
			$("#ktg_ket_edit").val(html[0].ktg_ket);

		}
	})
}

function alert_success() {//function sweetalert input kategori
	Swal.fire({
		icon: 'success',
		title: 'Success!!',
		showConfirmButton: true,
		showCloseButton: true,
		timer: 1500
	})
}

function alert_error() {//function sweetalert error kategori
	Swal.fire({
		icon: 'error',
		title: 'Sorry Cant empty!! ',
		showConfirmButton: true,
		showCloseButton: true,
		timer: 1500
	})
}


// =======================================function vsatuan.php
function stn_delete(id) {//function delete kategori
	var url = $('#url').attr('href');
	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			Swal.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
			)
			$.ajax({
				url: url + 'satuan/stn_delete/' + id,
				type: 'POST',
				dataType: 'JSON',
				success: function (html) {
					$('#stn_table').DataTable().ajax.reload();
				}//end success
			})// end ajax
		}// end if
	})// end swall
}// end function ktg_delete()

function stn_edit(id) {//function update kategori
	// alert(id);
	$("#stn_id_edit").val(id);
	var url = $('#url').attr('href');
	$.ajax({
		url: url + 'satuan/update_view/' + id,
		type: 'POST',
		dataType: 'JSON',
		success: function (html) {
			// console.log(html);
			$("#exampleModal").modal('show');
			$("#stn_nama_edit").val(html[0].stn_nama);
			$("stn_ket_edit").val(html[0].stn_ket);

		}
	})
}