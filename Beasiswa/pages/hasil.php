<div class="container-fluid">
    <!-- Page Heading -->
 
    <!-- Content Row -->
    <div class="row">
        <!-- Area Selamat datang -->
        <div class="col-xl-12 ">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Email</th>
                                    <th>No hp</th>
                                    <th>Semester</th>
                                    <th>IPK</th>
                                    <th>Beasiswa</th>
                                    <th>Berkas</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
		$sql="SELECT * FROM mahasiswa ORDER BY nim DESC";
		$q_tampil_mahasiswa = mysqli_query($conn, $sql);
		
		$nomor=1;
		while($r_tampil_mahasiswa=mysqli_fetch_array($q_tampil_mahasiswa)){

            
			if(empty($r_tampil_mahasiswa['berkas'])or($r_tampil_mahasiswa['berkas']=='-'))
            $foto = "./undraw_person.svg";
        else
            $foto = $r_tampil_mahasiswa['berkas'];
		?>
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['nim']; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['nama']; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['email']; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['hp']; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['semester']; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['ipk']; ?></td>
                                    <td><?php echo $r_tampil_mahasiswa['beasiswa']; ?></td>
                                    <td><img src="img/<?php echo $foto; ?>" width=60px height=60px></td>
                                    <td><?php echo $r_tampil_mahasiswa['status_ajuan']; ?></td>
                                   
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->