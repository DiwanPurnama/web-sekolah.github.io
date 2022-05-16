<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Form input data mahasiswa</h1>
    <form method="post" name="input" action="upload.php" enctype="multipart/form-data" class="form-control">
        <center>
        <table >
            <tr>
                <td>NIM : </td>
                <td><input type="text" name="NIM" ></td>
            </tr>
            <tr>
            	<td>Nama</td>
            	<td><input type="text" name="nama_mhs" ></td>
            </tr>
            <tr>
            	<td>Umur</td>
            	<td><input type="text" name="Umur" ></td>
            </tr>
            <tr>
                <td>Foto:</td>
                <td><input type="file" name="file" ></td>
            </tr>
            <tr>
            	<td colspan="2"><button type="submit" value="simpan" name="simpan" class="btn btn-danger">SIMPAN</button></td>
            </tr>
        </table>
        </center>
    </form>
    <!-- <h5>Input Data Mahasiswa</h5>
<form>
	<div class="form-group row">
		<label for="NIM">NIM</label>
		<input class="form-control" id="NIM" type="text" name="NIM" >
	</div>
    <div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama_mhs" >
	</div>
	<div class="form-group">
		<label for="umur">Umur</label>
		<input type="text" name="Umur" >
	</div>
 
    <div class="custom-file">
		<input type="file" class="custom-file-input" name="file">
		<label class="custom-file-label" for="contohupload2">Choose file</label>
	</div>
 
	<button type="submit" value="simpan" name="simpan" class="btn btn-danger">SIMPAN</button>
</form> -->
<!-- FIX -->
<!-- <div class="global-container" >
			<div class="card input-form">
				<div class="card-body">
          			<div class="card-title text-center h3">Input Data Mahasiswa</div>
        		</div>
				<div class="card-text">
				<form method="post" action="upload.php" enctype="multipart/form-data" class="form-control"> 
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
		
				<button type="submit" value="simpan" name="submit" class="btn btn-primary" margin-left="80px">Login</button>
		
				</form>
				</div>
			</div>
		</div> -->

<!-- <form>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
    </div>
  </div>
</form> -->

</body>
</html>

