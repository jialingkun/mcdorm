
<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Insert Data Kos</h1>
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
              <form id="insertData">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Username</b></label>
                    <input type="text" class="form-control" name="id" />
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Gender Kos</b></label>
                    <input type="text" class="form-control" name="gender"/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Nama Tempat</b></label>
                    <input type="text" class="form-control" name="nama"/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>No. Telpon</b></label>
                    <input type="text" class="form-control" name="notelp"/>
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-sm-12">
                  <label class="control-label"><b>Alamat</b></label>
                  <input type="text" class="form-control" name="alamat"/>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="control-label"><b>Fasilitas</b></label>
                  <div class="form-group">
                    <div class="col-sm-2">

                     <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="fasilitas[]" value="WiFi"/>
                     <label for="inputUnchecked">WiFi</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="fasilitas[]" value="Parkir"/>
                     <label for="inputUnchecked">Parkir</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="fasilitas[]" value="Nasi"/>
                     <label for="inputUnchecked">Nasi</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="fasilitas[]" value="Air Putih"/>
                     <label for="inputUnchecked">Air Putih</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="fasilitas[]" value="24Jam"/>
                     <label for="inputUnchecked">24 Jam</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" name="fasilitas[]" value="Laundry"/>
                     <label for="inputUnchecked">Laundry</label>
                   </div>
                 </div>
               </div>
             </div>
             <div class="form-group">
              <label class="control-label"><b>Deskripsi</b></label>
              <textarea class="form-control" rows="5" name="deskripsi"></textarea>
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
 <button  class="btn btn-animate btn-animate-side btn-info btn-md" onclick="insertDataKos()">
              <span><i class="icon fa-plus"></i> &nbsp<b>Tambahkan Data</b></span>
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
<!-- End Page -->

<script>

  function insertDataKos() {
    
    var urls='main/insertkos';
    var dataString = $("#insertData").serialize();

alert('klik');
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      data:dataString,
      success: function(response){
        if (response == 1) {
          alert("Berhasil menambah data");
          window.location.href = 'manajemen_kos_data';
        }else{
          alert(response);

        }
      }
    }); 
  }

</script>
