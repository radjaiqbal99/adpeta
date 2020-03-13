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
                            <a href="datamaster/setadm" class="small-box-footer">Go to Settings <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Kerja Praktik</h3>
                                <p>Settings Account</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-paper"></i>
                            </div>
                            <a href="datamaster/setkp_kordinator" class="small-box-footer">Go to Settings <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Tugas Akhir</h3>
                                <p>Settings Account</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-book"></i>
                            </div>
                            <a href="datamaster/setta_kordinator" class="small-box-footer">Go to Settings <i class="fas fa-arrow-circle-right"></i></a>
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
                        <div >
                        
                        <button type="button" class="btn btn-info" id="formButton" ">Show add account</button>
                        
                        </div>
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

<!-- KORDINATOR KP -->
<?php if ($value_main == 2) { ?>
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

<!-- DOSEN PEMBIMBING KP -->
<?php if ($value_main == 3) { ?>
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