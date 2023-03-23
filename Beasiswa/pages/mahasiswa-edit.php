<?php
$mahasiswa = $_GET['id'];
$q_tampil_mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$mahasiswa'");
$r_tampil_mahasiswa = mysqli_fetch_array($q_tampil_mahasiswa);
?>
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">
    <!-- Area Selamat datang -->
    <div class="col-xl-12 ">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"> Edit Mahasiswa</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="proses/mahasiswa-edit-proses.php" method="post">
            <div class="row mb-3">
              <img src="img/<?php echo $r_tampil_mahasiswa['berkas']; ?>" width=70px height=75px>
            </div>
            <div class="row mb-3">
              <label for="formFile" class="col-sm-2 col-form-label">Foto</label>

              <div class="col-sm-10">
                
                <input class="form-control form-control-file" type="file" name="foto_awal" value="<?php echo $r_tampil_mahasiswa['berkas']; ?>" id="formFileMultiple" multiple></div>
              </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nim"
                  value="<?php echo $r_tampil_mahasiswa['nim']; ?>" readonly="readonly">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nama"
                  value="<?php echo $r_tampil_mahasiswa['nama']; ?>">
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email"
                  value="<?php echo $r_tampil_mahasiswa['email']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="hp"
                  value="<?php echo $r_tampil_mahasiswa['hp']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Semester Saat Ini</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="semester"
                  value="<?php echo $r_tampil_mahasiswa['semester']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">IPK Terakhir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="ipk"
                  value="<?php echo $r_tampil_mahasiswa['ipk']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Beasiswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="beasiswa"
                  value="<?php echo $r_tampil_mahasiswa['beasiswa']; ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="status_ajuan"
                  value="<?php echo $r_tampil_mahasiswa['status_ajuan']; ?>">
              </div>
            </div>
            <button type="reset" class="btn btn-danger">Batal</button>
            <button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->