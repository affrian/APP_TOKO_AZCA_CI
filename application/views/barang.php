<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="barang">
		<h3 class="text-center">===FORM BARANG===</h3> <br />
		<form id="frm_barang">
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">kategori Barang</label>
		    <div class="input-group mb-3 col-sm-9"">
			  <select class="form-control" name="brg_ktg" id="brg_ktg">
				  <option>===Pilih Kategori Barang===</option>
				</select>
			  <div class="input-group-append">
			    <button type="button" id="brgbtn_ktg" class="btn btn-primary" title="Tambah Kategori"><i class="icon icon-plus"></i></button>
			  </div>
			</div>
		  </div>

		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Kode Barang</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="brg_kode" name="brg_kode" placeholder="Kode Barang">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="brg_nama" name="brg_nama"  placeholder="Nama Barang">
		    </div>
		  </div>

		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Satuan Barang</label>
		   <div class="input-group mb-3 col-sm-9"">
			  <select class="form-control" id="brg_stn" name="brg_stn">
				  <option>===Pilih Satuan===</option>
				</select>
			  <div class="input-group-append">
			    <button type="button" class="btn btn-primary" id="brgbtn_stn" title="Tambah Satuan"><i class="icon icon-plus"></i></button>
			  </div>
			</div>
		  </div>

		  
		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi Barang</label>
		     <div class="input-group mb-3 col-sm-9"">
			  <select class="form-control" id="brg_lok" name="brg_lok">
				  <option>===Pilih Lokasi===</option>
				</select>
			  <div class="input-group-append">
			    <button type="button" class="btn btn-primary" id="brgbtn_lok" title="Tambah Lokasi"><i class="icon icon-plus"></i></button>
			  </div>
			</div>
		  </div>

		 
		    <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah konversi Dasar</label>
		     <div class="input-group mb-3 col-sm-9"">
			 <input type="number" class="form-control" id="brg_konv" name="brg_konv" placeholder="Konversi">
			 
			</div>
		  </div>

		    <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Harga Beli</label>
		     <div class="input-group mb-3 col-sm-9"">
			 <input type="number" class="form-control" id="brg_beli" name="brg_beli" placeholder="Harga beli">
			 
			</div>
		  </div>

		    <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Harga Jual</label>
		     <div class="input-group mb-3 col-sm-9"">
			   <input type="number" class="form-control" id="brg_jual" name="brg_jual" placeholder="Harga Jual">
			
			</div>
		  </div>

		    <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
		     <div class="input-group mb-3 col-sm-9"">
			 <textarea name="brg_ket" id="brg_ket" class="form-control"></textarea>
			 
			</div>
		  </div>

		  <!--  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Multi Satuan</label>
		    
		     <div class="col-sm-2 btn-group">
		     	 <button id="btn_multisat" type="button" class="btn btn-primary" title="Tambah Multi satuan"><i class="icon icon-plus"></i></button>
		     	 <button id="btn_close" type="button" class="btn btn-primary" title="Close"><i class="icon icon-minus"> </i></button>
		    </div>
 -->
		  
		 <!--  </div>

		  	<div id="multi_sat" style="border:1px solid black;background-color: #35F79E"> <br />
		  		<div class="form-group row" >
				    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
				    <div class="col-sm-2">
				     <select class="form-control">
					  <option>==Pilih Satuan==</option>
					</select>
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Konversi">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga beli">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga Jual">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Ket">
				    </div>
				</div>

				<div class="form-group row" >
				    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
				    <div class="col-sm-2">
				     <select class="form-control">
					  <option>==Pilih Satuan==</option>
					</select>
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Konversi">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga beli">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga Jual">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Ket">
				    </div>
				</div>

				<div class="form-group row" >
				    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
				    <div class="col-sm-2">
				     <select class="form-control">
					  <option>==Pilih Satuan==</option>
					</select>
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Konversi">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga beli">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga Jual">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Ket">
				    </div>
				</div>

				<div class="form-group row" >
				    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
				    <div class="col-sm-2">
				     <select class="form-control">
					  <option>==Pilih Satuan==</option>
					</select>
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Konversi">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga beli">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga Jual">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Ket">
				    </div>
				</div>

				<div class="form-group row" >
				    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
				    <div class="col-sm-2">
				     <select class="form-control">
					  <option>==Pilih Satuan==</option>
					</select>
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Konversi">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga beli">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Harga Jual">
				    </div>
				     <div class="col-sm-2">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Ket">
				    </div>
				</div>

		  	</div>
 -->
		   



		   <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
		    <div class="col-sm-4">
		      <button type="button" class="btn btn-primary btn-block text-center"> Simpan</button>
		    </div>
		     <div class="col-sm-4">
		      <button type="reset" class="btn btn-danger btn-block">Reset</button>
		    </div>
		  </div>

		  
		</form>
	</div>

</body>
</html>