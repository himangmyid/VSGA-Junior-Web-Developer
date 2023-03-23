<div class="container-fluid">
    <!-- Page Heading -->
    
    <!-- Content Row -->
    <div class="row">
        <!-- Area Selamat datang -->
        <div class="col-xl-12 ">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Register Beasiswa<sup>Ku</sup></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 <form action="proses/proses-daftar.php" method="post" enctype="multipart/form-data">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nim">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Masukan Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nama">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Masukan Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="hp">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester Saat Ini</label>
    <div class="col-sm-10">
   
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="semester">
    <option selected>Pilih</option>
    <option value="semester 2">Semester 2</option>
    <option value="semester 3">Semester 3</option>
    <option value="semester 4">Semester 4</option>
    <option value="semester 5">Semester 5</option>
    <option value="semester 6">Semester 6</option>
    <option value="semester 7">Semester 7</option>
    <option value="semester 8">Semester 8</option>
  </select>
    </div>
  </div>

  <?php
  define('IPK', 2.75);

  $minRequirement = 2.50;

  $isDisable = (IPK > $minRequirement) ? "" : "disabled";

  ?>
 
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">IPK Terakhir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="ipk" value="<?= IPK ?>" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Beasiswa</label>
    <div class="col-sm-10">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="beasiswa" <?= $isDisable ?>>
    <option selected>Pilih</option>
    <option value="Beasiswa Akdemik">Beasiswa Akdemik</option>
    <option value="Beasiswa non Akdemik">Beasiswa non Akdemik</option>
  </select>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Berkas Syarat</label>
    <div class="col-sm-10">
    <input class="form-control" type="file" id="formFile" name="berkas">
    </div>
  </div>

  
  <button type="reset" class="btn btn-danger">Batal</button>
  <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Daftar</button>
</form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

