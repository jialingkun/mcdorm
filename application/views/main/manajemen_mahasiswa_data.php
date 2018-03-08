 <!-- Page -->
 <div class="page animsition">
  <div class="page-header">
    <h1 class="page-title" >Manajemen Mahasiswa</h1>
  </div>
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title" >Data Mahasiswa</h3>
        <div id="exampleTableAddToolbar">
          <a href="manajemen_mahasiswa_insert">
            <button class="btn btn-info" type="button">
              <i class="icon fa-plus"></i> <b>Tambah Data</b>
            </button>
          </a>
        </div>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable"  >
            <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status Booking</th>
                <th>Update</th>
                <th>Cancel</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status Booking</th>
                <th>Update</th>
                <th>Cancel</th>
              </tr>
            </tfoot>
            <tbody id="tabelMahasiswa">

            </tbody>
          </table>

        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>

    



  <script>
    window.onload = function() {

      var urls='main/getmahasiswa';
      
      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
          var len = response.length;
          for(var i=0; i<len; i++){
            var id = response[i].id_mahasiswa;
            var username = response[i].nama_mahasiswa;
            var email = response[i].email;
            var password = response[i].password;
            var status = response[i].status;

            var tr_str = "<tr>" +
            "<td  value = "+id+" >" + id + "</td>" +
            "<td>" + username + "</td>" +
            "<td>" + email + "</td>" +
            "<td>" + password + "</td>" +
            "<td>" + status + "</td>" +
            "<td>" + "<a href='manajemen_mahasiswa_edit' onclick='editDataSiswa(&quot;"+id+"&quot;)'><button type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a>" + "</td>" +
            "<td>" + "<a href='#'><button type='button' class='btn btn-animate btn-animate-side btn-warning btn-sm'><span><i class='icon fa-close'></i> &nbsp<b>Cancel</b></span></button></a>" + "</td>" +
            "</tr>";
            $('#tabelMahasiswa').append(tr_str);
          }
        }
      });
    }


    function editDataSiswa(x){
          document.cookie = "editDataSiswa="+x+"; path=/mcdorm/index.php/main;"

    }
  </script>



