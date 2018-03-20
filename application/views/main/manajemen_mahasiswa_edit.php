
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
                      <label class="control-label">Username</label>
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
                      <label class="control-label">Password</label><br>
                      <button type="button"  class="btn btn-animate btn-animate-side btn-warning btn-md" onclick="resetPassword()">
                        <b>Reset Password</b>
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
                    <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md">
                      <span><i class="icon fa-exchange"></i> &nbsp<b id="submit">Perbarui Data</b></span>
                    </button>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                   <div class="form-group row">
                    <div class="col-sm-3">
                      <h5 class="control-label">Alamat</h5>
                    </div>
                    <div class="col-sm-9">
                      <h5 class="control-label">: <b id="alamat">Jl. Semangka 5</b></h5>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h5 class="control-label">Kamar</h5>
                    </div>
                    <div class="col-sm-9">
                      <h5 class="control-label">: <b id="kamar">Deluxe</b></h5>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h5 class="control-label">Harga</h5>
                    </div>
                    <div class="col-sm-9">
                      <h5 class="control-label">: <b id="harga">Rp 650.000,-</b></h5>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <h5 class="control-label">Status</h5>
                    </div>
                    <div class="col-sm-9">
                      <h5 class="control-label">: <b id="status">Rp 650.000,-</b></h5>
                    </div>
                  </div>
                  <div class="form-group row">
                   <div class="col-sm-6">
                    <button data-toggle="modal" data-target="#myModal" type="button"   class="btn btn-animate btn-animate-side btn-danger btn-md" >
                      <b>Batal Pesan</b>
                    </button>
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
              <a href="manajemen_mahasiswa_data">
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
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Informasi Pemesanan</h4>
      </div>
      <div class="modal-body">
        <div>
          <div class="booking-item-payment">
            <header class="clearfix">
              <div class="form-group row">
                <div class="col-sm-5">
                  <a class="booking-item-payment-img">
                    <img id="modalImage" src=""/>
                  </a>
                </div>
                <div class="col-sm-7">
                  <h5 id="modalNamaKos" class="booking-item-payment-title">Kos Semangka 5</h5>
                  <small id="modalAlamatKos" >jl. Semangka 5 Malang</small><br>
                  <small id="modalGender" >jl. Semangka 5 Malang</small><br>
                </div>
              </div>
              
              
              <hr>
            </header>
            <ul class="booking-item-payment-details">
              <li>
                <h5>Pemesanan Atas Nama</h5>
                <p id="modalMahasiswa"><b>Joni Jono</b></p>
              </li>
              <li>
                <h5>Tanggal Masuk</h5>
                <p id="modalTanggal"><b>32 Desember 2017</b></p>
              </li>
              <li>
                <h5>Detail Pemesanan</h5>
                <ul class="booking-item-payment-price">
                  <li>
                    <p id="modalKamar" class="booking-item-payment-price-title"></p>

                    <p id="modalHarga" class="booking-item-payment-price-amount"><small></small>
                    </p> 
                  </li>

                </ul>
              </li>
              
            </ul>
            <hr>
            <h4  class="booking-item-payment-total">Total Pemesanan: <b><span id="modalTotal"></span></b>
            </h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancelBooking()">Batal Pesan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
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

          if (response.status.toString() != "Belum Verifikasi") {
            $('#konfirmasi').prop('disabled','true');
          }


          $('#modalNamaKos').html(response.nama_kos);
          $('#modalAlamatKos').html(response.alamat);
          $('#modalGender').html(response.gender);
          $('#modalMahasiswa').html(response.nama_mahasiswa);
          $('#modalHarga').html('Rp '+response.harga+',- /bulan');
          $('#modalKamar').html('Jenis Kamar :  '+response.nama_kamar);
          $('#modalTotal').html('Rp '+response.harga+',- /bulan');
          $("#modalImage").attr("src",'http://localhost/mcdorm/photos/'+response.id_kos+'/'+response.id_kamar+'/slot1.jpg');
          $('#modalTanggal').html(response.tanggal_masuk);

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
      e.preventDefault(); // will stop the form submission
      var buttonname = $("#submit").html();
      $("#submit").html("Tunggu...");
      $("#submitButton").prop("disabled",true);

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
            alert("Berhasil mengubah data");
            window.location.href = 'manajemen_mahasiswa_data';
            $("#submit").html(buttonname);

          }else{
            alert("Gagal mengubah data");
            $("#submit").html(buttonname);
            $("#submitButton").prop("disabled",false);
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

    function resetPassword(){
      var txt;
      if (confirm("Apakah anda yakin ingin me-reset password?")) {
        txt = "Password berhasil di reset";
        var urls = "main/resetpasswordmahasiswa/"+getCookie('editDataSiswa')+"";
        // alert(urls);
        $.ajax({
          url:"<?php echo base_url() ?>index.php/"+urls,
          type: 'get',
          dataType: "json",
          success: function (response) {
            alert(txt);
            location.reload();
          }
        });
      } else {
      }
      
    }

    function cancelBooking(){
      var txt;
      if (confirm("Apakah anda yakin ingin membatalkan pemesanan?")) {
        txt = "Pesanan berhasil dibatalkan";
        var urls = "main/updateMahasiswa/cancel/"+getCookie('editDataSiswa')+"";
        // alert(urls);
        $.ajax({
          url:"<?php echo base_url() ?>index.php/"+urls,
          type: 'get',
          dataType: "json",
          success: function (response) {
            alert(txt);
            location.reload();
          }
        });
      } else {
      }
    }


  </script> 
  </html>