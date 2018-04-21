
<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Manajemen Kamar</h1>
  </div>
  <div class="page-content">
    <div class="panel">
     <div class="panel-heading">
      <h3 class="panel-title"><b>Data Kamar Kos</b> Semangka 5</h3>
    </div>
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="col-sm-12" style="margin-bottom: 5%;">
          <h4>Upload Foto Kamar</h4>
          <hr>
          <h5><b>*Drag kembali untuk mengganti foto</b></h5>
          <!-- DROPZONE -->
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot1/<?php echo $_COOKIE['editDataKos'] ?>/temp" class="dropzone" id="my-awesome-dropzone"></form>
          
          
        </div>
        <div class="col-md-12">
          <!-- Example Basic Form -->
          <div class="example-wrap">
            <div class="example">
              <form id="insertData" onsubmit="insertDataKamar(event)">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Tipe Kamar</b></label>
                    <input type="text" class="form-control" name="nama" required/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Harga/Bulan</b></label>
                    <input type="text" class="form-control" name="harga" required pattern="[0-9]+" placeholder="Example : 1000000"  />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Panjang (m<sup>2</sup>)</b></label>
                    <input type="text" class="form-control" name="panjang" required pattern="[0-9]+" placeholder="Example : 2"/>
                  </div>
                  <div class="col-sm-6">
                   <label class="control-label"><b>Lebar (m<sup>2</sup>)</b></label>
                   <input type="text" class="form-control" name="lebar" required pattern="[0-9]+" placeholder="Example : 3"/>
                 </div>
               </div>
               <div class="form-group row">
                <div class="col-sm-12">
                  <label class="control-label"><b>Fasilitas</b></label>
                  <div class="form-group">
                    <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="AC" />
                     <label>AC</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="KM Dalam" />
                     <label>KM Dalam</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Lemari" />
                     <label>Lemari</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Kipas Angin" />
                     <label>Kipas Angin</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Meja" />
                     <label>Meja</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Kursi" />
                     <label>Kursi</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Twin Bed" />
                     <label>Twin Bed</label>
                   </div>
                  
                 </div>
               </div>
             </div>
             <div class="form-group row">
              <div class="col-sm-6">
                <label class="control-label"><b>Jumlah Kamar</b></label>
                <input type="number" class="form-control" name="kuota" required/>
              </div>
            </div>
            <div class="form-group pull-right" style="margin-top: 25px;">
              <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md">
                <span><i class="icon fa-plus"></i> &nbsp<b id="submit">Tambahkan Data</b></span>
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
<!-- End Page -->


<script>

  function insertDataKamar(e) {
    var urls='main/insertKamar/'+getCookie("editDataKos")+"";
    e.preventDefault(); // will stop the form submission
    var dataString = $("#insertData").serialize();
    var buttonname = $("#submit").html();
    $("#submit").html("Tunggu...");
    $("#submitButton").prop("disabled",true);

    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      data:dataString,
      success: function(response){
        if (response == 1) {
          alert("Berhasil menambah data");
          window.location.href = 'manajemen_kos_edit';
          $("#submit").html(buttonname);
        }else{
          alert("Gagal menambah data");
          $("#submit").html(buttonname);
          $("#submitButton").prop("disabled",false);
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
</script>
