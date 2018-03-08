
 <!-- Page -->
 <div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Manajemen Kos</h1>
  </div>
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title">Data Kos</h3>
        <div id="exampleTableAddToolbar">
          <a href="manajemen_kos_insert">
            <button class="btn btn-info" type="button">
              <i class="icon fa-plus"></i> <b>Tambah Data</b>
            </button>
          </a>
        </div>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Username</th>
                
                <th>Nama</th>
                
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Update</th>
                <th>Reset Password</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Username</th>
                
                <th>Nama</th>
                
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Update</th>
                <th>Reset Password</th>
              </tr>
            </tfoot>
            <tbody id="tabelKos">
             <!--  <tr>
                <td>kosmachung1</td>
                
                <td>Semangka 5</td>
                
                <td>Jl. Semangka 5 Bareng, Kawi, Malang</td>
                <td>089345432312</td>
                <td>
                  <a href="manajemen_kos_edit.php">
                    <button type="button" class="btn btn-animate btn-animate-side btn-info btn-sm">
                      <span><i class="icon fa-pencil"></i> &nbsp<b>Perbarui</b></span>
                    </button>
                  </a>
                </td>
                <td>
                  <a href="#">
                    <button type="button" class="btn btn-animate btn-animate-side btn-danger btn-sm">
                      <span><i class="icon fa-refresh"></i> &nbsp<b>Reset</b></span>
                    </button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>kosmachung2</td>
                
                <td>Loji Rejo</td>
                
                <td>Villa Puncak Tidar N-05, Dau, Malang</td>
                <td>0341655677</td>
                <td>
                  <a href="manajemen_kos_edit.php">
                    <button type="button" class="btn btn-animate btn-animate-side btn-info btn-sm">
                      <span><i class="icon fa-pencil"></i> &nbsp<b>Perbarui</b></span>
                    </button>
                  </a>
                </td>
                <td>
                  <a href="#">
                    <button type="button" class="btn btn-animate btn-animate-side btn-danger btn-sm">
                      <span><i class="icon fa-refresh"></i> &nbsp<b>Reset</b></span>
                    </button>
                  </a>
                </td>
            </tr> -->
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

      var urls='main/getkos';
      
      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
          var len = response.length;
          for(var i=0; i<len; i++){
            var id = response[i].id_kos;
            var username = response[i].nama_kos;
            var alamat = response[i].alamat;

            var notelp = response[i].notelp_kos;

            var tr_str = "<tr>" +
            "<td  value = "+id+" >" + id + "</td>" +
            "<td>" + username + "</td>" +
            "<td>" + alamat + "</td>" +
            "<td>" + notelp + "</td>" +
            "<td>" + "<a href='manajemen_kos_edit' onclick='editDataKos(&quot;"+id+"&quot;)'><button type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a>" + "</td>" +
            "<td>" + "<a href='#'><button type='button' class='btn btn-animate btn-animate-side btn-danger btn-sm'><span><i class='icon fa-close'></i> &nbsp<b>Reset</b></span></button></a>" + "</td>" +
            "</tr>";
            $('#tabelKos').append(tr_str);
          }
        }
      });
    }


    function editDataKos(x){

          document.cookie = "editDataKos="+x+"; path=/mcdorm/index.php/main;"

    }
  </script>
