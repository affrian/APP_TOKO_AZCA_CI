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


	</div>
</body>
</html>