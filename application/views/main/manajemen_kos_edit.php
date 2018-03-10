
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
              <form id="updateData" onsubmit="insertfunction(event)">
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

                     <input id="fasilitas1" type="checkbox" name="fasilitas[]" value="WiFi"/>
                     <label for="inputUnchecked">WiFi</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas2" type="checkbox" name="fasilitas[]" value="Parkir"/>
                     <label for="inputUnchecked">Parkir</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas3" type="checkbox"  name="fasilitas[]" value="Nasi"/>
                     <label for="inputUnchecked">Nasi</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas4" type="checkbox" name="fasilitas[]" value="Air Putih"/>
                     <label for="inputUnchecked">Air Putih</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas5" type="checkbox"  name="fasilitas[]" value="24Jam"/>
                     <label for="inputUnchecked">24 Jam</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas6" type="checkbox"  name="fasilitas[]" value="Laundry" />
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
              <button type="reset" class="btn btn-animate btn-animate-side btn-warning btn-md">
                <span><i class="icon fa-refresh"></i> &nbsp<b>Refresh</b></span>
              </button>
              <a href="manajemen_kos_data.php">
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

  <!-- DROPZONE -->
  <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot1/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
  <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot2/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
  <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot3/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>


  
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

    window.onload = function() {
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


      var urls='main/getkamar/'+getCookie("editDataKos")+"";
      // alert(urls);

      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
          var len = response.length;
          for(var i=0; i<len; i++){

            var id = response[i].id_kamar;
            var nama = response[i].nama_kamar;
            var harga = response[i].harga;
            var panjang = response[i].panjang;
            var lebar = response[i].lebar;
            var kuota = response[i].kuota;
            $("#namaKamar").html(nama);
            var tr_str = "<tr>" +
            "<td>" + nama + "</td>" +
            "<td>" + harga + "</td>" +
            "<td>" + panjang + " x "+ lebar +"</td>" +
            "<td>" + kuota + "</td>" +
            "<td>" + "<a href='manajemen_kos_kamar_edit'><button type='button' class='btn btn-animate btn-animate-side btn-info btn-sm' onclick='editDataKamar(&quot;"+id+"&quot;)' ><span><i class='icon fa-pencil'></i>&nbsp<b>Perbarui</b></span></button></a>" + "</td>" +
            "<td>"+ " <a href='#'><button type='button' class='btn btn-animate btn-animate-side btn-danger btn-sm'><span><i class='icon fa-close'></i> &nbsp<b>Hapus</b></span></button></a>"+"</td>"+
            "</tr>";
            $('#tabelKamar').append(tr_str);
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

      var urls='main/updatekos/profil/'+getCookie("editDataKos")+"";
  e.preventDefault();// will stop the form submission
  var buttonname = $("#submit").val();
  $("#submit").html("Tunggu...");
  $("#submitButton").prop("disabled",true);
  $.ajax({
    url:"<?php echo base_url() ?>index.php/"+urls,
    type: 'POST',
    data: $("#updateData").serialize(),
    success: function(response){
      if (response == 1) {
        window.location.href = 'manajemen_kos_data';
        $("#submit").html(buttonname);
      }else{
        // $("#submit").val(buttonname);
        alert(response);
        $("#submit").html(buttonname);
      }
    }
  });   
}

function editDataKamar(x){
  
  document.cookie = "editDataKamar="+x+"; path=/mcdorm/index.php/main;"
}

</script> 