
 <!-- Page -->
 <div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Perbarui Data Mahasiswa</h1>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12">
            <!-- Example Basic Form -->
            <div class="example-wrap">
              <div class="example">
                <form>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="control-label">NIM</label>
                      <input type="text" class="form-control" value="321410001" id="id_mahasiswa"
                      name="id_mahasiswa"/>
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label">Nama</label>
                      <input type="text" class="form-control" value="Adrianus Wiraatmadja" id="nama" name="nama" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="control-label">Password</label>
                      <input type="password" class="form-control" value="12jackson12" id="password" name="password" />
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label">Email</label>
                      <input type="email" class="form-control" value="adrian@gmail.com" id="email" name="email" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">No Telepon</label>
                    <input type="text" class="form-control" value="08125976873" id="notelp" name="notelp" />
                  </div>
                  <div class="col-sm-12">
                   <div class="form-group pull-right">
                    <button type="submit" class="btn btn-animate btn-animate-side btn-info btn-md">
                      <span><i class="icon fa-exchange"></i> &nbsp<b>Perbarui Data</b></span>
                    </button>
                    <button type="reset" class="btn btn-animate btn-animate-side btn-warning btn-md">
                      <span><i class="icon fa-refresh"></i> &nbsp<b>Refresh</b></span>
                    </button>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                   <div class="form-group row">
                    <div class="col-sm-3">
                      <h4 class="control-label">Dormitory</h4>
                    </div>
                    <div class="col-sm-9">
                      <h4 class="control-label">: <b>Jl. Semangka 5</b></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h4 class="control-label">Kamar</h4>
                    </div>
                    <div class="col-sm-9">
                      <h4 class="control-label">: <b>Deluxe</b></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h4 class="control-label">Harga</h4>
                    </div>
                    <div class="col-sm-9">
                      <h4 class="control-label">: <b>Rp 650.000,-</b></h4>
                    </div>
                  </div>

                </div>
                <div class="col-sm-6">
                  <!-- Example Background Image -->
                  <div class="example-wrap">
                    <h4 class="control-label">Bukti Pembayaran</h4>
                    <div class="example">
                      <div class="cover height-500 height-xs-300">
                        <div class="cover-background" style="background-image: url('<?php echo base_url(); ?>assets/images/bukti.jpg')"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Example Background Image -->
                </div>
              </div>
              <div class="form-group pull-right">
                <button type="submit" class="btn btn-animate btn-animate-side btn-success btn-md">
                  <span><i class="icon fa-check"></i> &nbsp<b>Konfirmasi Pembayaran</b></span>
                </button>
                <a href="manajemen_mahasiswa_data.php">
                  <button type="button" class="btn btn-animate btn-animate-side btn-primary btn-md">
                    <span><i class="icon fa-mail-reply"></i> &nbsp<b>Kembali</b></span>
                  </button>
                </a>
              </div>
            </form>
          </div>
        </div>
        <!-- End Example Basic Form -->
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- End Page -->

</body>

<script>
window.onload = function() {
  // $('#id_mahasiswa').val("2") ;
  document.getElementById("id_mahasiswa").value = '999999';
alert($('#id_mahasiswa').val());
    
    }  

</script> 
</html>