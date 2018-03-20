
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
        <div class="col-sm-12" style="margin-bottom: 5%;">
          <h4>Upload Foto Kos</h4>
          <hr>
          <h5><b>*Drag kembali untuk mengganti foto</b></h5>
          <!-- DROPZONE -->
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot1/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone">
          </form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot2/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone" ></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot3/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot4/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot5/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot6/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot7/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot8/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot9/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot10/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          
          
        </div>
        <div class="col-md-12" >
          <!-- Example Basic Form -->
          <div class="example-wrap" >
            <div class="example">
              <h4>Profil Kos</h4>
              <hr>
              <form id="updateData" onsubmit="insertfunction(event)" >
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Username</b></label>
                    <p  class="form-control" name="id" id="id" > </p>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Gender Kos</b></label>
                    <div class="col-sm-12">
                      <div class="radio-inline">
                        <label><input  id="gender" type="radio" name="gender" value="pria">Pria</label>
                      </div>
                      <div class="radio-inline">
                        <label><input id="gender" type="radio" name="gender" value="wanita">Wanita</label>
                      </div>
                      <div class="radio-inline">
                        <label><input id="gender" type="radio" name="gender" value="campuran">Campuran</label>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Nama Tempat</b></label>
                    <input type="text" class="form-control" name="nama" id="nama"/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>No. Telpon</b></label>
                    <input type="text" class="form-control" name="notelp" id="notelp"/>
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-sm-12">
                  <label class="control-label"><b>Alamat</b></label>
                  <input id="alamat" type="text" class="form-control" name="alamat"/>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="control-label"><b>Fasilitas</b></label>
                  <div class="form-group">
                    <div class="col-sm-2">

                     <input id="fasilitas1" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="WiFi"/>
                     <label for="inputUnchecked">WiFi</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas2" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="Parkir"/>
                     <label for="inputUnchecked">Parkir</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas3" class="icheckbox-primary" type="checkbox"  name="fasilitas[]" value="Nasi"/>
                     <label for="inputUnchecked">Nasi</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas4" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="Air Putih"/>
                     <label for="inputUnchecked">Air Putih</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas5" class="icheckbox-primary" type="checkbox"  name="fasilitas[]" value="24Jam"/>
                     <label for="inputUnchecked">24 Jam</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas6" class="icheckbox-primary" type="checkbox"  name="fasilitas[]" value="Laundry" />
                     <label for="inputUnchecked">Laundry</label>
                   </div>
                 </div>
               </div>
             </div>
             <div class="form-group">
              <label class="control-label"><b>Deskripsi</b></label>
              <textarea id="deskripsi" class="form-control" rows="5" name="deskripsi"></textarea>
            </div>
            <div class="form-group pull-right" style="margin-top: 25px;">
              <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md">
                <span><i class="icon fa-exchange"></i> &nbsp<b id="submit">Ubah Data</b></span>
              </button>
              <a href="manajemen_kos_data">
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
<div class="page animsition" style="margin-top: -50px;">
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title"><b>Data Kamar </b><b id="namaKamar"></b > </h3>
        <div id="exampleTableAddToolbar">
          <a href="manajemen_kos_kamar_insert">
            <button class="btn btn-info" type="button">
              <i class="icon fa-plus"></i> <b>Tambah Kamar</b>
            </button>
          </a>
        </div>
        <div class="panel-body">
          <table id="example" class="table table-hover dataTable table-striped width-full" >
            <thead>
              <tr>
                <th>Tipe Kamar</th>
                <th>Harga/Bulan</th>
                <th>Panjang (m)</th>
                <th>lebar (m)</th>
                <th>Kuota</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Tipe Kamar</th>
                <th>Harga/Bulan</th>
                <th>Panjang (m)</th>
                <th>lebar (m)</th>
                <th>Kuota</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </tfoot>
            <tbody id="tabelKamar">

            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>

  <!-- End Page -->
  <script>
    function berubah(){
      $("#imageslot1").attr("src","<?php echo base_url() ?>photos/<?php echo $_COOKIE['editDataKos'] ?>/slot1.jpg");
    }

    window.onload = function() {
      dataKamar();
      dataKos();

    }  

    function dataKamar(){
  // $('#slot').attr("src","http://localhost/mcdorm/photos/9019/slot1.jpg");


  // $('#id_mahasiswa').val("2") ;
//   document.getElementById("id_mahasiswa").value = '999999';
// alert($('#id_mahasiswa').val());
    // alert( getCookie('editDataKos'));
    var urls='main/getkos/'+getCookie("editDataKos")+"";
      // alert(urls);

      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
          $('#id').html(response.id_kos);
          $('#nama').val(response.nama_kos);
          $('#notelp').val(response.notelp_kos);
          $('#alamat').val(response.alamat);
          $('#deskripsi').html(response.deskripsi_kos);
          $("input[name=gender][value="+response.gender_kos+"]").prop("checked",true);
          // $('#fasilitas').html(response.fasilitas_kos);
          var fas = response.fasilitas_kos;
          var res = fas.split(",");
          // alert(res);
          // alert(res[2]);
          for (var i = 0; i < res.length; i++) {
            // alert( res[i].replace(/\s/g, ''));
            
            if ($("#fasilitas1").val()==res[i]) {
              $("#fasilitas1").attr('checked', true);
            }
            else if ($("#fasilitas2").val()==res[i]) {
              $("#fasilitas2").attr('checked', true);
            }
            else if ($("#fasilitas3").val()==res[i]) {
              $("#fasilitas3").attr('checked', true);
            }
            else if ($("#fasilitas4").val()==res[i]) {
              $("#fasilitas4").attr('checked', true);
            }
            else if ($("#fasilitas5").val()==res[i]) {
              $("#fasilitas5").attr('checked', true);
            }
            else if ($("#fasilitas6").val()==res[i]) {
              $("#fasilitas6").attr('checked', true);
            }
          }
        }
      });


    }
    function dataKos(){


      $('#example').DataTable( {

        "ajax": {
          "deferLoading": 57,
          "type": "GET",
          "url": "http://localhost/mcdorm/index.php/main/getkamar/"+getCookie('editDataKos')+"",

          "dataSrc": function ( json ) {
            if (json == null) {
              e.preventDefault();
              return false;
            }else{
              return json;  
            }            
          }     
        },

        "columns": [
        { "data": "nama_kamar" },
        { "data": "harga" },
        { "data": "panjang" },
        { "data": "lebar" },
        { "data": "kuota" },

        {
          "targets": -1,
          "data": null, 
          "defaultContent": "<a href='manajemen_kos_kamar_edit' ><button id='perbaruiKos' type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a></td>"
        },
        {
          "targets": -1,
          "data": null, 
          "defaultContent": "<a  ><button id='hapus' type='button' class='btn btn-animate btn-animate-side btn-danger btn-sm'><span><i class='icon fa-trash'></i> &nbsp<b>Hapus</b></span></button></a></td>"
        }
        ]

      } );
      $.fn.dataTable.ext.errMode = 'none';
      $('#example tbody').on( 'click', '#perbaruiKos', function () {
        var table = $('#example').DataTable();
        var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      editDataKamar(data.id_kamar);
    });

      $('#example tbody').on( 'click', '#hapus', function () {
        var table = $('#example').DataTable();
        var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      hapusDataKamar(data.id_kamar);
    } );
    }
    

    function hapusDataKamar(x){
     var txt;
     if (confirm("Apakah anda yakin ingin menghapus data kamar ini?")) {
      txt = "Data kamar berhasil dihapus";
      var urls = "main/securedelete/kamar/"+x+"";
        // alert(urls);
        $.ajax({
          url:"<?php echo base_url() ?>index.php/"+urls,
          type: 'get',
          dataType: "json",
          success: function (response) {
            if (response == 1) {
              alert(txt);
              location.reload();
            }else{
              alert(response);
            }
          }
        });
      } else {
      }
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

      var urls='main/updatekos/profil/'+getCookie("editDataKos")+"";
      e.preventDefault();
      var buttonname = $("#submit").html();
      $("#submit").html("Tunggu...");
      $("#submitButton").prop("disabled",true);
      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'POST',
        data: $("#updateData").serialize(),
        success: function(response){
          if (response == 1) {
            alert("Berhasil mengubah data");
            window.location.href = 'manajemen_kos_data';
            $("#submit").html(buttonname);
          }else{
            alert("Gagal mengubah data");
            $("#submit").html(buttonname);
            $("#submitButton").prop("disabled",false);
          }
        }
      });   
    }

    function editDataKamar(x){

      document.cookie = "editDataKamar="+x+"; path=/mcdorm/index.php/main;"
    }


  </script> 


