<!-- DASHBOARD ADMIN -->
<?php if ($value_main == 0) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 co4-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Admin</h3>
                                <p>Management Account</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="datamaster/Manac" class="small-box-footer">Go <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Kerja Praktik</h3>
                                <p>Management Progres</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-paper"></i>
                            </div>
                            <a href="datamaster/Manakp" class="small-box-footer">Go <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Tugas Akhir</h3>
                                <p>Management Progres</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-book"></i>
                            </div>
                            <a href="datamaster/Manata" class="small-box-footer">Go <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        </section>
    </div>
<?php } ?>

<!-- SUPER ADMIN -->
<?php if ($value_main == 6) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <button type="button" class="btn btn-info" id="formButton" >Show add account</button>
                        <!-- FORM TAMBAH AKUN -->
                        <form action="<?php echo base_url(). 'datamaster/tambahuser_aksi'; ?>" method="post" class="form-add" id="form1">
                            <div class="text-center mt-3">
                                <h2>Tambah Akun</h2>
                            </div>
                            <div class="container-fluid in-form">
                                <div class="form-group">
                                    <label for="">No. Identitas</label>
                                    <input type="text" name="identitas" class="form-control" placeholder="Masukkan No. Identitas" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                                </div>

                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="">Username</label>
                                        <input type="username" name="username" class="form-control" placeholder="Masukkan Username" required>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="">
                                        <div class=" form-group">
                                            <label for="">Prodi</label>
                                            <select class="custom-select" name="prodi" id="inputGroupSelect01" required>
                                                <option selected>Pilih Prodi</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                                <option value="Teknik Kimia">Teknik Kimia</option>
                                                <option value="Teknik Geodesi">Teknik Geodesi</option>
                                                <option value="Teknik Sipil">Teknik Sipil</option>
                                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                                <option value="Desain Interior">Desain Interior</option>
                                                <option value="Desain Produ">Desain Produk</option>
                                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                                <option value="Arsitektur">Arsitektur</option>
                                                <option value="Planologi">Planologi</option>
                                            </select>
                                        </div>
                                        <div class=" form-group">
                                            <label for="">Role</label>
                                            <select class="custom-select" name="role" id="inputGroupSelect02" required>
                                                <option selected>Pilih Role</option>
                                                <option value="7">Super Admin</option>
                                                <option value="1">Admin</option>
                                                <option value="5">Koordinator TA</option>
                                                <option value="6">Koordinator KP</option>
                                                <option value="3">Dosen</option>
                                                <option value="4">Dosen Wali</option>
                                                <option value="2">Mahasiswa</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>

                                        </div>
                                </div>


                                <button type="submit" name="submit" class="btn btn-info mt-2">Submit</button>
                            </div>
                            <hr class="p-0 m-0 mt-4">
                        </form>
                        
                        <!-- FORM Edit AKUN -->
                        
                        <form  method="post" class="form-edit" id="form2">
                            <div class="text-center mt-3">
                                <h2>Edit Akun</h2>
                            </div>

                            <input id="idNya" type="hidden" name="id" class="form-control" placeholder="">
                            <div class="container-fluid in-form">
                                <div class="form-group">
                                    <label for="">No. Identitas</label>
                                    <input id="nid" type="text" name="nid" class="form-control" placeholder="Masukkan No. Identitas" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input id="nama" type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                                </div>

                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="">Username</label>
                                        <input id="username" type="username" name="username" class="form-control" placeholder="Masukkan Username" required>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input id="password" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="">
                                        <div class=" form-group">
                                            <label for="">Prodi</label>
                                            <select id="prodi" class="custom-select" name="prodi" id="inputGroupSelect01" required>
                                                <option selected>Pilih Prodi</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                                <option value="Teknik Kimia">Teknik Kimia</option>
                                                <option value="Teknik Geodesi">Teknik Geodesi</option>
                                                <option value="Teknik Sipil">Teknik Sipil</option>
                                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                                <option value="Desain Interior">Desain Interior</option>
                                                <option value="Desain Produ">Desain Produk</option>
                                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                                <option value="Arsitektur">Arsitektur</option>
                                                <option value="Planologi">Planologi</option>
                                            </select>
                                        </div>
                                        <div class=" form-group">
                                            <label for="">Role</label>
                                            <select id="role" class="custom-select" name="role" id="inputGroupSelect02" required>
                                                <option selected>Pilih Role</option>
                                                <option value="7">Super Admin</option>
                                                <option value="1">Admin</option>
                                                <option value="5">Koordinator TA</option>
                                                <option value="6">Koordinator KP</option>
                                                <option value="3">Dosen</option>
                                                <option value="4">Dosen Wali</option>
                                                <option value="2">Mahasiswa</option>
                                            </select>
                                        </div>
                                        
                                        <!-- <div class="form-group">
                                            <label for="">Foto</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>

                                        </div> -->
                                </div>


                                <button id="submit-edit" name="submit" class="btn btn-info mt-2">Submit</button>
                            </div>
                            <hr class="p-0 m-0 mt-4">
                        </form>
                        <hr>
                    
                        <div class=" input-group role">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option value="0">All</option>
                                <option value="7">Super Admin</option>
                                <option value="1">Admin</option>
                                <option value="5">Koordinator TA</option>
                                <option value="6">Koordinator KP</option>
                                <option value="3">Dosen</option>
                                <option value="4">Dosen Wali</option>
                                <option value="2">Mahasiswa</option>
                            </select>
                        </div>
                        <!-- END FORM TAMBAH AKUN -->
                        <!-- TABEL AKUN -->
                        <div class=" card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                
                                <thead class="bg-info">
                                    <tr>
                                        <th>No.Identitas</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Prodi</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query = $this->db->query('SELECT * FROM akun');
                                    foreach ($query->result() as $row) {
                                        $role = $row->role_id;
                                ?>
                                    <tr>
                                        <td><?= $row->nid?></td>
                                        <td><?= $row->nama?></td>
                                        <td><?= $row->username?></td>
                                        <td><?= $row->prodi?></td>
                                        <td><?= $this->ROLE[$role]?></td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <a class="btndropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <ion-icon name="menu-outline"></ion-icon>
                                                </a>
                                                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                                    <button class="dropdown-item ml-1 formEdit" 
                                                    idNya="<?=$row->id?>"
                                                    nid="<?=$row->nid?>"
                                                    nama="<?=$row->nama?>"
                                                    username="<?=$row->username?>"
                                                    password="<?=$row->password?>"
                                                    prodi="<?=$row->prodi?>"  
                                                    role="<?=$row->role_id?>"  
                                                    
                                                    >Edit</button>
                                                    <button class="dropdown-item ml-1 hapus_user" idHapus="<?=$row->id?>">Hapus</button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-info">
                                        <th>No.Identitas</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Prodi</th>
                                        <th>Role</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                            </table>
                            
                    </div>
                    <!-- TAMBAH AKUN -->
                </div>
            </div>
    </div>
    </section>
    </div>
    
<?php } ?>

<!-- ADMIN -->
<?php if ($value_main == 1) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- FORM TAMBAH AKUN -->
                        <form class="form-add" id="form1">
                            <div class="container-fluid in-form">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                                </div>

                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option value="1">Dosen</option>
                                        <option value="2">Kordinator KP</option>
                                        <option value="3">Kordinator TA</option>
                                        <option value="4">Mahasiswa</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="">Username</label>
                                        <input type="username" class="form-control" placeholder="Masukkan Username">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info mt-2">Submit</button>
                            </div>
                            <hr class="p-0 m-0 mt-4">
                        </form>
                        <button type="button" class="btn btn-info" id="formButton" ">Show add account</button>
                        <hr>
                        
                        <div class=" input-group role">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option value="1">All</option>
                                <option value="1">Dosen</option>
                                <option value="2">Kordinator KP</option>
                                <option value="3">Kordinator TA</option>
                                <option value="4">Mahasiswa</option>
                            </select>
                    </div>
                    <!-- END FORM TAMBAH AKUN -->
                    <!-- TABEL AKUN -->
                    <div class=" card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead class="bg-info">
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a class="btndropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <ion-icon name="menu-outline"></ion-icon>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button class="dropdown-item" id="formButton_edit" href="">Edit</button>
                                                <button class="dropdown-item">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- TAMBAH AKUN -->
                </div>
            </div>
    </div>
    </section>
    </div>
<?php } ?>

<!-- ADMIN KERJA PRAKTIK -->
<?php if ($value_main == 2) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- TABEL AKUN -->
                        <div class=" card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead class="bg-info">
                                    <tr>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Tempat KP</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Pembimbing</th>
                                        <th>Penguji</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query = $this->db->query('SELECT kr.nrp,kr.nama, kr.judul, kr.tempat, kr.tanggal_mulai,kr.tanggal_selesai,kr.pembimbing, kr.penguji, status.`status`
                                                                FROM status,kerja_praktik kr
                                                                WHERE status.id = kr.status_id');
                                    foreach ($query->result() as $row) {
                                        
                                ?>
                                    <tr>
                                        <td><?= $row->nrp?></td>
                                        <td><?= $row->nama?></td>
                                        <td><?= $row->judul?></td>
                                        <td><?= $row->tempat?></td>
                                        <td><?= $row->tanggal_mulai?></td>
                                        <td><?= $row->tanggal_selesai?></td>
                                        <td><?= $row->pembimbing?></td>
                                        <td><?= $row->penguji?></td>
                                        <td class="text-success"><?= $row->status?></td>
                                        <td><button class="btn-sm btn-success">Publish</button></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-info">
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Tempat KP</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Pembimbing</th>
                                        <th>Penguji</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- TAMBAH AKUN -->
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>

<!-- ADMIN TUGAS AKHIR -->
<?php if ($value_main == 3) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class=" card-body table-responsive">
                            <table id="example1" class=" table table-bordered table-striped table-sm">
                                <thead class="bg-info">
                                    <tr>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Pembimbing</th>
                                        <th>Penguji</th>
                                        <th>Status</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query = $this->db->query('SELECT kr.nrp,kr.nama, kr.judul, kr.pembimbing, kr.penguji, status.`status`
                                                                FROM status,tugas_akhir kr
                                                                WHERE status.id = kr.status_id');
                                    foreach ($query->result() as $row) {
                                        
                                ?>
                                    <tr>
                                        <td><?= $row->nrp?></td>
                                        <td><?= $row->nama?></td>
                                        <td><?= $row->judul?></td>
                                        <td><?= $row->pembimbing?></td>
                                        <td><?= $row->penguji?></td>
                                        <td><?= $row->status?></td>
                                        <td><button class="btn-sm btn-success">Publish</button></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-info">
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Pembimbing</th>
                                        <th>Penguji</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- TAMBAH AKUN -->
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>

<!-- DOSEN PENGUJI KP -->
<?php if ($value_main == 4) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- FORM TAMBAH AKUN -->
                        <form class="form-add" id="form1">
                            <div class="container-fluid in-form">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="">Username</label>
                                        <input type="username" class="form-control" placeholder="Masukkan Username">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 50%;">
                                    <label for="exampleInputFile">Upload Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                            <hr class="p-0 m-0 mt-4">
                        </form>
                        <button type="button" class="btn btn-info" id="formButton" ">Show add account</button>
                        <hr>
                        <!-- END FORM TAMBAH AKUN -->
                        <!-- TABEL AKUN -->
                        <div class=" card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead class="bg-info">
                                    <tr>
                                        <th>NamaS</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                    <!-- TAMBAH AKUN -->
                </div>
            </div>
    </div>
    </section>
    </div>
<?php } ?>

<!-- MAHASISWA KP -->
<?php if ($value_main == 5) { ?>
    <div class="content-wrapper">
        <section class="content pt-5 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- FORM TAMBAH AKUN -->
                        <form class="form-add" id="form1">
                            <div class="container-fluid in-form">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="">Username</label>
                                        <input type="username" class="form-control" placeholder="Masukkan Username">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 50%;">
                                    <label for="exampleInputFile">Upload Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                            <hr class="p-0 m-0 mt-4">
                        </form>
                        <button type="button" class="btn btn-info" id="formButton" ">Show add account</button>
                        <hr>
                        <!-- END FORM TAMBAH AKUN -->
                        <!-- TABEL AKUN -->
                        <div class=" card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead class="bg-info">
                                    <tr>
                                        <th>NamaS</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                    <!-- TAMBAH AKUN -->
                </div>
            </div>
    </div>
    </section>
    </div>
<?php } ?>