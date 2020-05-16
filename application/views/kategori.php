<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="kategori">
		<h3 class="text-center">===FORM KATEGORI===</h3> <br />
		<form id="frm_kategori">
		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Kategori</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control clean" id="ktg_nama" name="ktg_nama" placeholder="Nama Kategori">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
		    <div class="col-sm-9">
		    <textarea  name="ktg_ket" class="form-control clean" id="ktg_ket" placeholder="Keterangan"></textarea>
		    </div>
		  </div>

		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
		    <div class="col-sm-4">
		      <button type="button" class="btn btn-primary btn-block text-center" id="ktgbtn_simpan"> Simpan</button>
		    </div>
		     <div class="col-sm-4">
		      <button type="reset" class="btn btn-danger btn-block" id="ktgbtn_reset">Reset</button>
		    </div>
		  </div>

		  
		</form>

		<div id="ktg_select">
				 <table id="ktg_table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                         <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                  <td>as</td>
                  <td>as</td>
                  <td>as</td>
                  
                </tbody>
     
               
            </table>
		</div><!--close tag id=ktg_select -->

		<!-- modal edit kategori -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title center" id="exampleModalLabel">==Form Edit Kategori==</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
								<form id="frm_kategori_edit">
									<input type="text" name='ktg_id_edit' id="ktg_id_edit" hidden>
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Nama Kategori</label>
										<div class="col-sm-9">
											<input type="text" class="form-control clean" id="ktg_nama_edit" name="ktg_nama_edit" placeholder="Nama Kategori">
										</div>
									</div>

									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
										<div class="col-sm-9">
										<textarea  name="ktg_ket_edit" class="form-control clean" id="ktg_ket_edit" placeholder="Keterangan"></textarea>
										</div>
									</div>								
							</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="ktg_save_edit">Save changes</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>