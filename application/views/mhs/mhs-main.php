<!-- DASHBOARD MAHASISWA -->
<?php if ($value_main == 0) { ?>
  <div class="content-wrapper">
    <section class="content pt-5 p-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Kerja Praktek</h3>
                <p>Administrasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book"></i>
              </div>
              <a href="mhs/profile_mhskp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Tugas Akhir</h3>
                <p>Administrasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </section>
  </div>
<?php } ?>

<!-- DASHBOARD KP MHS -->
<?php if ($value_main == 1) { ?>
  <div class="content-wrapper">
    <section class="content pt-5 p-3">
      <div class="container-fluid ">
        <div class="d-flex justify-content-center">
          <div class="col-sm-12 col-md-8 card-profile bg-white pt-3 pb-3 pl-3">
            <div class="row  d-flex justify-content-center">
              <div class="col-4  bg-white d-flex align-items-center">
                <img src="assets/dist/img/user2-160x160.jpg" class="rounded border border-info" width="100%" height="auto" alt="...">
              </div>
              <div class="col-8  bg-white pt-2">
                <p class=" text-gray">Nama:</p>
                <p class=" text-gray">NRP:</p>
                <p class=" text-gray">Prodi:</p>
                <p class=" text-gray">Durasi:</p>
                <p class=" text-gray">Status:</p>

              </div>
            </div>
          </div>
        </div>
        <div class="bg-white rounded container-fluid p-0">
          <div class=" card-body table-responsive">
            <div class="row">
              
              <div class=" col-3 input-group-sm mb-3">
                
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table-sm">
              <thead class="bg-info">
                <tr>
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Judul</th>
                  <th>Tempat</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Pembimbing</th>
                  <th>Penguji</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td><button class="btn-sm btn-success">Publish</button></td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="bg-info">
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Judul</th>
                  <th>Tempat</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Pembimbing</th>
                  <th>Penguji</th>
                  <th>Status</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

    </section>
  </div>
<?php } ?>