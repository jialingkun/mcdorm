
<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Insert Data Mahasiswa</h1>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12">
            <!-- Example Basic Form -->
            <div class="example-wrap">
              <div class="example">
                <form  id="insertMahasiswa" onsubmit="insertfunction(event)">

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Password Lama</label>
                      <input id="passwordOld" type="password" class="form-control" name="oldpassword" required pattern="[A-Za-z0-9].{4,}" />
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="control-label">Password Baru</label>
                      <input id="password" type="password" class="form-control" name="newpassword" required pattern="[A-Za-z0-9].{4,}" onChange="isPasswordMatch();"/>
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label">ketik Ulang Password</label>  <label id="passwordAlert" style="float:right; color:red;" >   </label>
                      <input id="txtConfirmPassword" type="password" class="form-control"  required onChange="isPasswordMatch();"/>
                    </div>
                    
                  </div>


                  <div class="form-group pull-right">
                    <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md">
                      <span><i class=" icon fa-exchange"></i> &nbsp<b id="submit">Ubah Password</b></span>
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
<script>

  var count = 0 ;

  function isPasswordMatch(){
    $('#txtConfirmPassword').on('keyup', function () {
      var password = $("#password").val();
      var confirmPassword = $("#txtConfirmPassword").val();

      if (password != confirmPassword){ 
        $("#passwordAlert").html("Password Tidak Sama!");
        count = 0;
      }
      else{ 
        $("#passwordAlert").html("Password sama.");
        count = 1;
      }
    });
  }

  function insertfunction(e) {
    if (count == 1) {
    e.preventDefault(); // will stop the form submission
    var urls='main/updatepasswordadmin';
    var dataString = $("#insertMahasiswa").serialize();
    var buttonname = $("#submit").html();
    $("#submit").html("Tunggu...");
    $("#submitButton").prop("disabled",true);
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      data:dataString,
      success: function(response){
        if (response == 1) {
          alert("Berhasil mengubah password");
          window.location.href = 'manajemen_mahasiswa_data';
          $("#submit").html(buttonname);
        }else{
          alert(response);
          $("#submit").html(buttonname);
          $("#submitButton").prop("disabled",false);
        }
      },
      error: function(){
        alert('Gagal mengubah password');
        $("#submit").html(buttonname);
        $("#submitButton").prop("disabled",false);
      }
    }); 
  }else{
    e.preventDefault();
    return  false;

    alert('Password anda tidak sesuai');

  }
}

</script>