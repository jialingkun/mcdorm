
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
                <form onsubmit="insertfunction(event)">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="control-label">NIM</label>
                      <input type="text" class="form-control" value="321410001" id="id_mahasiswa"
                      name="id_mahasiswa" disabled="true" />
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label">Nama</label>
                      <input type="text" class="form-control" value="Adrianus Wiraatmadja" id="nama" name="nama" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="control-label">Password</label>
                      <button type="button" class="btn btn-animate btn-animate-side btn-primary btn-md">
                        <label>Reset Password</label>
                      </button>
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
                    <input type="submit" id="submit" class="btn btn-animate btn-animate-side btn-info btn-md">

                    
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
                      <h4 class="control-label">: <b id="alamat">Jl. Semangka 5</b></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h4 class="control-label">Kamar</h4>
                    </div>
                    <div class="col-sm-9">
                      <h4 class="control-label">: <b id="kamar">Deluxe</b></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h4 class="control-label">Harga</h4>
                    </div>
                    <div class="col-sm-9">
                      <h4 class="control-label">: <b id="harga">Rp 650.000,-</b></h4>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h4 class="control-label">Status Booking</h4>
                    </div>
                    <div class="col-sm-9">
                      <h4 class="control-label">: <b id="status">Rp 650.000,-</b></h4>
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
                <button  class="btn btn-animate btn-animate-side btn-success btn-md" id="konfirmasi" onclick="verifikasi()">
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
//   document.getElementById("id_mahasiswa").value = '999999';
// alert($('#id_mahasiswa').val());
    // alert( getCookie('editDataSiswa'));
    var urls='main/getmahasiswa/'+getCookie("editDataSiswa")+"";
      // alert(urls);
      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
          $('#id_mahasiswa').val(response.id_mahasiswa);
          $('#nama').val(response.nama_mahasiswa);
          
          $('#notelp').val(response.notelp_mahasiswa);
          $('#email').val(response.email);
          $('#alamat').html(response.alamat);
          $('#kamar').html(response.nama_kamar);
          $('#harga').html(response.harga);
          $('#status').html(response.status);

          

          if (response.status == "Expired") {
            $('#konfirmasi').attr('disabled','disabled');
          }else{
            $('#konfirmasi').attr('disabled');
            if (response.status == "Terverifikasi") {
              $('#konfirmasi').attr('disabled','disabled');
            }else{
              $('#konfirmasi').attr('disabled');
            }
          }
        }
      });

    }  
    

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }


    function insertfunction(e) {

      var urls='main/updateMahasiswa/profil/'+getCookie("editDataSiswa")+"";
  e.preventDefault();// will stop the form submission
  
  $.ajax({
    url:"<?php echo base_url() ?>index.php/"+urls,
    type: 'POST',
    data: {
      'nama':$('#nama').val() ,
      'email': $('#email').val() ,
      'notelp': $('#notelp').val() ,
    },
    success: function(response){
      if (response == 1) {
        window.location.href = 'manajemen_mahasiswa_data'
      }else{
        // $("#submit").val(buttonname);
      }
    }
  });   
}

function verifikasi(){
  
  var r = confirm("Apakah anda ingin verifikasi?");
  if (r == true) {
    var urls='main/updateMahasiswa/verifikasi/'+getCookie("editDataSiswa")+"";
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      success: function(response){
        if (response == 1) {
          alert("Verifikasi Berhasil!");
                  window.location.href = 'manajemen_mahasiswa_edit'
        }
      }
    });
  } 
}

</script> 
</html>