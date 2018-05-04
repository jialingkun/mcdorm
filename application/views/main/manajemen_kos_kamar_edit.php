
<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Manajemen Jenis Kamar</h1>
  </div>
  <div class="page-content">
    <div class="panel">
     <div class="panel-heading">
      <h3 class="panel-title"><b>Data Jenis Kamar </b></h3>
    </div>
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="col-sm-12" style="margin-bottom: 5%;">
          <h4>Upload Foto Kamar</h4>
          <hr>
          <h5><b>*Drag kembali untuk mengganti foto</b></h5>
          <!-- DROPZONE -->
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot1/<?php echo $_COOKIE['editDataKos'] ?>/<?php echo $_COOKIE['editDataKamar'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          
          
        </div>
        <div class="col-md-12">
          <!-- Example Basic Form -->
          <div class="example-wrap">
            <div class="example">
              <form id="updateData" onsubmit="insertfunction(event)">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Tipe Kamar</b></label>
                    <input type="text" class="form-control" name="nama" id="nama" />
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Harga/Bulan</b></label>
                    <input type="text" class="form-control" name="harga" id="harga"/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Panjang (m<sup>2</sup>)</b></label>
                    <input type="text" class="form-control"  name="panjang" id="panjang" pattern="[0-9]+(\.[0-9][0-9]?)?"/>
                  </div>
                  <div class="col-sm-6">
                   <label class="control-label"><b>Lebar (m<sup>2</sup>)</b></label>
                   <input type="text" class="form-control" name="lebar" id="lebar" pattern="[0-9]+(\.[0-9][0-9]?)?"/>
                 </div>
               </div>
               <div class="form-group row">
                <div class="col-sm-12">
                  <label class="control-label"><b>Fasilitas</b></label>
                  <div class="form-group">
                    <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" name="fasilitas[]" id="fasilitas1" value="AC" />
                     <label>AC</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" name="fasilitas[]" id="fasilitas2" value="KM Dalam"/>
                     <label>KM Dalam</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" name="fasilitas[]" id="fasilitas3" value="Lemari"/>
                     <label>Lemari</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" name="fasilitas[]" id="fasilitas4" value="Kipas Angin"/>
                     <label>Kipas Angin</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" id="fasilitas5" value="Meja" />
                     <label>Meja</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" id="fasilitas6" value="Kursi" />
                     <label>Kursi</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" id="fasilitas7" value="Twin Bed" />
                     <label>Twin Bed</label>
                   </div>
                 </div>
               </div>
             </div>
             <div class="form-group pull-right" style="margin-top: 25px;">
              <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md" >
                <span><i class="icon fa-plus"></i> &nbsp<b id="submit">Tambahkan Data</b></span>
              </button>
              
              <a href="manajemen_kos_edit">
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
        <div class="panel-body">
          <form id="insertKamarDetail" onsubmit="insertKamarDetail(event)">
            <div class="form-group row">
              <div class="col-sm-3">
                <label class="control-label"><b>Nama Kamar</b></label>
                <input type="text" class="form-control" name="nama_kamardetail" placeholder="" />
              </div>
              <div class="col-sm-3">
                <label class="control-label"><b>Status Kamar</b></label>
                <div class="col-sm-12">
                  <div class="radio-inline">
                    <label><input type="radio" name="status_kamardetail" value="buka" checked="true">Buka</label>
                  </div>
                  <div class="radio-inline">
                    <label><input type="radio" name="status_kamardetail" value="tutup">Tutup</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
                <label class="control-label"><b></b></label>
                <button type="submit" id="insertDetailButton" class="btn btn-md btn-info" onclick="insertKamarDetail(event)"><i class="icon fa-plus"></i> <b>Tambah Kamar</b></button> 
              </div>
            </div>
            <hr>
          </form>
          <table id="example" class="table table-hover dataTable table-striped width-full" >
            <thead>
              <tr>
                <th>Nama Kamar</th>
                <th>Status </th>
                <th>Bulan Buka</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama Kamar</th>
                <th>Status</th>
                <th>Bulan Buka</th>
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


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Detail Kamar</h4>
        </div>
        <div class="modal-body">
          <form id="editKamarDetail" onsubmit="editKamarDetail(event)">
            <div class="form-group row">
              <div class="col-sm-4">
                <label class="control-label"><b>Nama Kamar</b></label>
                <input type="text" class="form-control" name="nama_kamardetail_update" id="edit_namakamardetail" placeholder="Nama Kos" />
              </div>


              <div class="col-sm-6">
                <label class="control-label"><b>Status Kamar</b></label>
                <div class="col-sm-12">
                  <div class="radio-inline">
                    <label><input type="radio" name="status_kamardetail_update"  value="buka" checked="true" onclick="$('#tanggal_masuk').show();">Buka</label>
                  </div>
                  <div class="radio-inline">
                    <label><input type="radio" name="status_kamardetail_update" value="tutup" onclick="$('#tanggal_masuk').hide();">Tutup</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6" id="tanggal_masuk">
                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight" ></i>
                  <label class="control-label"><b>Bulan Buka</b></label>
                  <input id="edit_tanggalMasuk" class="date-pick form-control" name="bulan_buka" type="text" onchange="tanggalMasuk = this.value" />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="editDetailButton" class="btn btn-primary" data-submit="modal" onclick="editKamarDetail(event)">Ubah Data</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

  var id_kamar = null;
  window.onload = function() {
    $('#example').DataTable( {
      "ajax": {
        "deferLoading": 57,
        "type": "GET",
        "url": "<?php echo base_url(); ?>index.php/main/getkamardetail/"+getCookie("editDataKamar")+"",

        "dataSrc": function ( json ) {
          return json;
        }     
      },
      "columns": [
      { "data": "nama_kamardetail" },
      { "data": "status" },
      { "data": "bulan_buka" },
      {
        "targets": -1,
        "data": null, 
        "defaultContent": "<button data-toggle='modal' data-target='#myModal' id='perbarui' type='button' class='btn btn-primary btn-animate-side btn-warning btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button>"
      },
      {
        "targets": -1,
        "data": null, 
        "defaultContent": "<a  ><button id='hapusKamarDetail' type='button' class='btn btn-animate btn-animate-side btn-danger btn-sm'><span><i class='icon fa-trash'></i> &nbsp<b>Hapus</b></span></button></a></td>"
      }
      ]
    } 
    );
    $.fn.dataTable.ext.errMode = 'none';
    $('#example tbody').on( 'click', '#perbarui', function () {
      var table = $('#example').DataTable();
      var data = table.row($(this).parents('tr')).data();
      // alert(data.nama_kamardetail+data.status+data.bulan_buka);
      dataModal(data.id_kamardetail,data.nama_kamardetail,data.status,data.bulan_buka);
    } );

    $('#example tbody').on( 'click', '#hapusKamarDetail', function () {
      var table = $('#example').DataTable();
      var data = table.row($(this).parents('tr')).data();

      hapusDatakamar(data.id_kamardetail);
    } );



    var urls='main/getkamar/'+getCookie("editDataKos")+'/'+getCookie("editDataKamar")+'';

    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'get',
      dataType: "json",
      success: function (response) {
        $('#nama').val(response.nama_kamar);
        $('#harga').val(response.harga);
        $('#panjang').val(response.panjang);
        $('#lebar').val(response.lebar);
          // $('#fasilitas').html(response.fasilitas_kos);
          var fas = response.fasilitas_kamar;
          var res = fas.split(",");
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
            else if ($("#fasilitas7").val()==res[i]) {
              $("#fasilitas7").attr('checked', true);
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
    var urls='main/updatekamar/'+getCookie("editDataKos")+'/'+getCookie("editDataKamar")+'';
  e.preventDefault();// will stop the form submission
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
        window.location.href = 'manajemen_kos_edit';
        $("#submit").html(buttonname);
      }else{
        alert("Gagal mengubah data");
        $("#submit").html(buttonname);
        $("#submitButton").prop("disabled",false);
      }
    }
  });   
}



function insertKamarDetail(e) {
  var urls='main/insertkamardetail/'+getCookie("editDataKamar")+'';
  e.preventDefault();// will stop the form submission
  $("#insertDetailButton").prop("disabled",true);  
  $.ajax({
    url:"<?php echo base_url() ?>index.php/"+urls,
    type: 'POST',
    data: $("#insertKamarDetail").serialize(),
    success: function(response){
      if (response != 0) {
        alert("Berhasil menambah data");
        location.reload();
        $("#insertDetailButton").prop("disabled",false);
      }else{
        alert("Gagal mengubah data");
        $("#insertDetailButton").prop("disabled",false);
      }
    }
  });   
}

function editKamarDetail(e) {
  var urls='main/updatekamardetail/'+id_kamar;
  e.preventDefault();// will stop the form submission
  $("#editDetailButton").prop("disabled",true);
  $.ajax({
    url:"<?php echo base_url() ?>index.php/"+urls,
    type: 'POST',
    data: $("#editKamarDetail").serialize(),
    success: function(response){
      if (response == 1) {
        alert("Berhasil mengubah data");
        location.reload();
        $("#editDetailButton").prop("disabled",false);
      }else{
        alert(response);
        $("#editDetailButton").prop("disabled",false);
      }
    }
  });   
}


function hapusDatakamar(x){
 var txt;
 if (confirm("Apakah anda yakin ingin menghapus data kamar ini?")) {
  txt = "Data kamar berhasil dihapus";
  var urls = "main/securedelete/kamardetail/"+x+"";

  $.ajax({
    url:"<?php echo base_url() ?>index.php/"+urls,
    type: 'get',
    dataType: "json",
    success: function (response) {

      if (response == '1') {
        alert(txt);
        location.reload();
      }else{
        alert(response);
      }
    },
    error: function (jqXHR, exception) {
         alert("Tidak bisa menghapus. Kamar masih dalam proses pemesanan.");
    }
  });
} else {
}
}

function dataModal(id,nama,status,bulan_buka){
  // alert(nama+status+bulan_buka);
  $('#edit_namakamardetail').val(nama);

  if (status == "tutup") {
    $('#tanggal_masuk').hide();
    $("input[type=radio][name=status_kamardetail_update][value='tutup']").prop("checked",true);
  }else{
    $('#tanggal_masuk').show();
    $("input[type=radio][name=status_kamardetail_update][value='buka']").prop("checked",true);
  }
  

  
  // $('#edit_tanggalMasuk').val(bulan_buka);
  
  // $('#edit_tanggalMasuk').datepicker('setDate', 'today' ); 
  id_kamar= id;
  // alert(id_kamar);
}

</script>
<!-- End Page -->