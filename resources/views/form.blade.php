<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="{{ url('hasil') }}" method="POST">
    {{ csrf_field() }}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53aa5fd (Praktikum)
    <h1 style="text-align: center">Form Demo</h1>
    <hr>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ttl" class="col-4 col-form-label">Tempat, Tanggal Lahir</label>
    <div class="col-8">
      <input id="ttl" name="ttl" placeholder="Masukan Tempat, Tanggal Lahir Anda" type="text" class="form-control">
<<<<<<< HEAD
=======
=======
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tempat, Tanggal Lahir</label>
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Tempat Tanggal Lahir" type="text" class="form-control">
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label>
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53aa5fd (Praktikum)
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="laki-laki">
        <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="perempuan">
        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
<<<<<<< HEAD
=======
=======
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-laki">
        <label for="jenis_kelamin_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan">
        <label for="jenis_kelamin_1" class="custom-control-label">P</label>
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="hobi" class="col-4 col-form-label">Hobi</label>
    <div class="col-8">
<<<<<<< HEAD
      <input id="hobi" name="hobi" placeholder="Masukan Hobi Anda" type="text" class="form-control">
=======
<<<<<<< HEAD
      <input id="hobi" name="hobi" placeholder="Masukan Hobi Anda" type="text" class="form-control">
=======
      <input id="hobi" name="hobi" placeholder="Masukkan Hobi" type="text" class="form-control">
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
<<<<<<< HEAD
      <input type="submit" value="Proses" class="btn btn-success">
=======
<<<<<<< HEAD
      <input type="submit" value="Proses" class="btn btn-success">
=======
      <input name="submit" value="Proses" type="submit" class="btn btn-primary">
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    </div>
  </div>
</form>
