<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="satuan">
		<h3 class="text-center">===FORM SATUAN===</h3> <br />
		<form id="frm_satuan">
				<div class="form-group row">
					<div class="col-sm-9 ">
						<i class="stn_success text-success"></i>
					</div>
				</div>
		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Nama satuan</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control clean" id="stn_nama" name="stn_nama" placeholder="Nama satuan" maxlength="20">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
		    <div class="col-sm-9">
		    <textarea  name="stn_ket" class="form-control clean" id="stn_ket" placeholder="Keterangan" maxlength="50"></textarea>
		    </div>
		  </div>

		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
		    <div class="col-sm-4">
		      <button type="button" class="btn btn-primary btn-block text-center" id="stnbtn_simpan"> Simpan</button>
		    </div>
		     <div class="col-sm-4">
		      <button type="reset" class="btn btn-danger btn-block" id="stnbtn_reset">Reset</button>
		    </div>
		  </div>

		  
		</form>

		<div id="stn_select">
				 <table id="stn_table" class="display" cellspacing="0" width="100%">
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
		</div><!--close tag id=stn_select -->

		<!-- modal edit satuan -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title center" id="exampleModalLabel">==Form Edit satuan==</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
								<form id="frm_satuan_edit">
									<input type="text" name='stn_id_edit' id="stn_id_edit">
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Nama satuan</label>
										<div class="col-sm-9">
											<input type="text" class="form-control clean" id="stn_nama_edit" name="stn_nama_edit" placeholder="Nama satuan" maxlength="20">
										</div>
									</div>

									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
										<div class="col-sm-9">
										<textarea  name="stn_ket_edit" class="form-control clean" id="stn_ket_edit" placeholder="Keterangan" maxlength="50"></textarea>
										</div>
									</div>								
							</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="stn_save_edit" data-dismiss="modal">Save changes</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>