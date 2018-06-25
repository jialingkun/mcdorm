<?php
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
  $title = 'Change Password';
  $passwordlama = 'Old Password';
  $passwordbaru = 'New Password';
  $confirm = 'Confirm New Password';
  $kembali = 'Back';
  $tunggu = 'Wait...';
  $passX = 'Incorrect Password!';
  $passV = 'Correct Password';
  $success = 'Successfuly Change Password';
  $failed = 'Failed to Change Password';

}else{
  $title = 'Ubah Password';
  $passwordlama = 'Password Lama';
  $passwordbaru = 'Password Baru';
  $confirm = 'Ketik Ulang Password';
  $kembali = 'Kembali';
  $tunggu = 'Tunggu...';
  $passX = 'Password Tidak Sama!';
  $passV = 'Password Sama';
  $success = 'Berhasil Mengubah Password';
  $failed = 'Gagal Mengubah Password';
}

?>

<div class="container">
  <div class="gap"></div>
  <h3 align="center"><?php echo $title ?></h3>
  <div class="example-wrap">
    <div class="example">
      <form  id="insertMahasiswa" onsubmit="insertfunction(event)">

        <div class="form-group row">
          <div class="col-sm-12">
            <label class="control-label"><?php echo $passwordlama ?></label>
            <input id="passwordOld" type="password" class="form-control" name="oldpassword" required pattern="[A-Za-z0-9].{4,}" />
          </div>

        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <label class="control-label"><?php echo $passwordbaru ?></label>
            <input id="password" type="password" class="form-control" name="newpassword" required pattern="[A-Za-z0-9].{4,}" onChange="isPasswordMatch();"/>
          </div>
          <div class="col-sm-6">
            <label class="control-label"><?php echo $confirm ?></label>  <label id="passwordAlert" style="float:right; color:red;" >   </label>
            <input id="txtConfirmPassword" type="password" class="form-control"  required onChange="isPasswordMatch();"/>
          </div>

        </div>


        <div class="form-group pull-right">
          <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md">
            <span><i ></i> &nbsp<b id="submit"><?php echo $title ?></b></span>
          </button>

          <a href="manajemen_mahasiswa_data.php">
            <button type="button" class="btn btn-animate btn-animate-side btn-primary btn-md">
              <span><i ></i> &nbsp<b><?php echo $kembali ?></b></span>
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
  <div class="gap"></div>
</div>
<div class="container">
</div>


<script>

  var count = 0 ;

  function isPasswordMatch(){
    $('#txtConfirmPassword').on('keyup', function () {
      var password = $("#password").val();
      var confirmPassword = $("#txtConfirmPassword").val();

      if (password != confirmPassword){ 
        $("#passwordAlert").html("<?php echo $passX?>");
        count = 0;
      }
      else{ 
        $("#passwordAlert").html("<?php echo $passV?>");
        count = 1;
      }
    });
  }

  function insertfunction(e) {
    if (count == 1) {
    e.preventDefault(); // will stop the form submission
    var urls='updatepassword/'+getCookie("frontCookie")+"";
    var dataString = $("#insertMahasiswa").serialize();
    var buttonname = $("#submit").html();
    $("#submit").html("<?php echo $tunggu ?>");
    $("#submitButton").prop("disabled",true);
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      data:dataString,
      success: function(response){
        if (response == 1) {
          alert("<?php echo $success?>");
          window.location.href = 'home';
          $("#submit").html(buttonname);
        }else{
          alert("<?php echo $failed?>");
          $("#submit").html(buttonname);
          $("#submitButton").prop("disabled",false);
        }
      },
      error: function(){
        alert('<?php echo $failed?>');
        $("#submit").html(buttonname);
        $("#submitButton").prop("disabled",false);
      }
    }); 
  }else{
    e.preventDefault();
    return  false;

    alert('<?php echo $failed?>');

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

</script>
