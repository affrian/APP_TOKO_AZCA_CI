$(document).ready(function() {
	// public variabel
	var url=$('#url').attr('href');

	// file barang.php
	$("#multi_sat").hide();
	$("#btn_multisat").click(function(event) {
		/* Act on the event */
		$("#multi_sat").show('slow');
	});

	$("#btn_close").click(function(event) {
		/* Act on the event */
		$("#multi_sat").hide('slow');
	});


// view kategori.php
$("#ktgbtn_simpan").click(function(event) {
	var frm_kategori=$("#frm_kategori").serialize();
	var ktg_nama=$("#ktg_nama").val();
	// alert(frm_kategori);

	
	// alert(url);

	if($.trim(ktg_nama)==""){
		alert("Mohon Untuk Diisi Nama Kategori");
		ktg_nama.focus();
	}else{
		$.ajax({
			url:url+'Kategori/insert',
			type:"post",
			data:frm_kategori,
			cache:true,
			success:function(html){
				alert('success!!');
				$(".clean").val('');
				location.reload();
			}
		});
	}
});




$('#ktg_table').dataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": url+'kategori/ajax_list',
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
	});
	

	$("#ktg_save_edit").click(function(event){
			frm_kategori_edit=$('#frm_kategori_edit').serialize();
			console.log(frm_kategori_edit);
			ktg_id_edit=$("#ktg_id_edit").val();

			$.ajax({
				url:url+'Kategori/update/'+ktg_id_edit,
				type:"post",
				data:frm_kategori_edit,
				cache:true,
				success:function(html){
					alert('success!!');
					$(".clean").val('');
					location.reload();
				}
			});
	});	


});//clode tag jquery

// ==================function menu kategori
	function ktg_delete(id){
		confirm=confirm('Anda Yakin Hapus Data ini??');
		if(confirm==true){
			var url=$('#url').attr('href');
			$.ajax({
				url: url+'kategori/ktg_delete/'+id,
				type: 'POST',
				dataType: 'JSON',
				success:function(html){
					// alert(html);
					location.reload();
					// reload_table();
				}
			})

		}
	}

	function ktg_edit(id){
			alert(id);
			$("#ktg_id_edit").val(id);
			var url=$('#url').attr('href');
			$.ajax({
				url: url+'kategori/update_view/'+id,
				type: 'POST',
				dataType: 'JSON',
				success:function(html){
					console.log(html);
					$("#exampleModal").modal('show');
					$("#ktg_nama_edit").val(html[0].ktg_nama);
					$("#ktg_ket_edit").val(html[0].ktg_ket);
					
				}
			})
	}


// ==========================

	function reload_table(){
		ktg_table=$('#ktg_table').dataTable();
		ktg_table.ajax.reload(null,false);
	}