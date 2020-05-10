<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="kategori">
		<h3 class="text-center">===FORM LOKASI===</h3> <br />
		<form id="frm_lokasi">
		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Kategori</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="lok_nama" name="lok_nama" placeholder="Nama Lokasi">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
		    <div class="col-sm-9">
		    <textarea  name="lok_ket" class="form-control" id="lok_ket" placeholder="Keterangan"></textarea>
		    </div>
		  </div>

		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
		    <div class="col-sm-4">
		      <button type="button" class="btn btn-primary btn-block text-center" id="lokbtn_simpan"> Simpan</button>
		    </div>
		     <div class="col-sm-4">
		      <button type="reset" class="btn btn-danger btn-block" id="lokbtn_reset">Reset</button>
		    </div>
		  </div>

		  
		</form>
	</div>
</body>
</html>