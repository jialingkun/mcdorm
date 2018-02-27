
 <!-- Page -->
 <div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Edit Data Kos</h1>
  </div>
  <div class="page-content">
    <div class="panel">
     <div class="panel-heading">
      <h3 class="panel-title"><b>Data Kos</b></h3>
    </div>
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="col-md-12">
          <!-- Example Basic Form -->
          <div class="example-wrap">
            <div class="example">
              <form>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Username</b></label>
                    <input type="text" class="form-control" placeholder="kosmachung1" readonly/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Password</b></label>
                    <input type="password" class="form-control" placeholder="*******" readonly/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Nama Tempat</b></label>
                    <input type="text" class="form-control" placeholder="Semangka 5" />
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Alamat</b></label>
                    <input type="text" class="form-control" placeholder="Jl. Semangka 5, Bareng, Malang" />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>No. Telpon</b></label>
                    <input type="text" class="form-control" placeholder="081245444333" />
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Jumlah Kamar</b></label>
                    <input type="number" class="form-control" placeholder="3" />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label class="control-label"><b>Fasilitas</b></label>
                    <div class="form-group">
                      <div class="col-sm-2">
                        <input type="checkbox" class="icheckbox-primary"
                        data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                        checked />
                        <label for="inputChecked">WiFi</label>
                      </div>
                      <div class="col-sm-2">
                       <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"/>
                       <label>Parkir</label>
                     </div>
                     <div class="col-sm-2">
                       <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked />
                       <label>Nasi</label>
                     </div>
                     <div class="col-sm-2">
                       <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"/>
                       <label>Air Putih</label>
                     </div>
                     <div class="col-sm-2">
                       <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"/>
                       <label>24 Jam</label>
                     </div>
                     <div class="col-sm-2">
                       <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"/>
                       <label>Laundry</label>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="form-group">
                <label class="control-label"><b>Deskripsi</b></label>
                <textarea class="form-control" rows="5">Kos bagus</textarea>
              </div>
            </form>
          </div>
        </div>
        <!-- End Example Basic Form -->
      </div>
    </div>
    <form class="upload-form" id="exampleUploadForm" method="POST" style="margin-top: -80px;">
      <input type="file" id="inputUpload" name="files[]" multiple="" />
      <div class="uploader-inline">
        <h1 class="upload-instructions">Upload foto / gambar</h1>
      </div>
      <div class="file-wrap container-fluid">
        <div class="file-list row"></div>
      </div>
    </form>
    <div class="form-group pull-right" style="margin-top: 25px;">
      <button type="submit" class="btn btn-animate btn-animate-side btn-info btn-md">
        <span><i class="icon fa-exchange"></i> &nbsp<b>Ubah Data</b></span>
      </button>
      <button type="reset" class="btn btn-animate btn-animate-side btn-warning btn-md">
        <span><i class="icon fa-refresh"></i> &nbsp<b>Refresh</b></span>
      </button>
      <a href="manajemen_kos_data.php">
        <button type="button" class="btn btn-animate btn-animate-side btn-primary btn-md">
          <span><i class="icon fa-mail-reply"></i> &nbsp<b>Kembali</b></span>
        </button>
      </a>
    </div>
  </div>
</div>
</div>
</div>

<div class="page animsition" style="margin-top: -50px;">
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title"><b>Data Kamar</b> Kos Semangka 5</h3>
        <div id="exampleTableAddToolbar">
          <a href="manajemen_kos_kamar_insert.php">
            <button class="btn btn-info" type="button">
              <i class="icon fa-plus"></i> <b>Tambah Kamar</b>
            </button>
          </a>
        </div>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Tipe Kamar</th>
                <th>Harga/Bulan</th>
                <th>Luas (m<sup>2</sup>)</th>
                <th>Kuota</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Tipe Kamar</th>
                <th>Harga/Bulan</th>
                <th>Luas (m<sup>2</sup>)</th>
                <th>Kuota</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Ekonomi</td>
                <td>Rp 650.000,-</td>
                <td>4 x 5</td>
                <td>5</td>
                <td>
                  <a href="manajemen_kos_kamar_insert.php">
                    <button type="button" class="btn btn-animate btn-animate-side btn-info btn-sm">
                      <span><i class="icon fa-pencil"></i> &nbsp<b>Perbarui</b></span>
                    </button>
                  </a>
                </td>
                <td>
                  <a href="#">
                    <button type="button" class="btn btn-animate btn-animate-side btn-danger btn-sm">
                      <span><i class="icon fa-close"></i> &nbsp<b>Hapus</b></span>
                    </button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>Deluxe</td>
                <td>Rp 1.5000.000,-</td>
                <td>5 x 8</td>
                <td>6</td>
                <td>
                  <a href="manajemen_kos_kamar_insert.php">
                    <button type="button" class="btn btn-animate btn-animate-side btn-info btn-sm">
                      <span><i class="icon fa-pencil"></i> &nbsp<b>Perbarui</b></span>
                    </button>
                  </a>
                </td>
                <td>
                  <a href="#">
                    <button type="button" class="btn btn-animate btn-animate-side btn-danger btn-sm">
                      <span><i class="icon fa-close"></i> &nbsp<b>Hapus</b></span>
                    </button>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
<!-- End Page -->
