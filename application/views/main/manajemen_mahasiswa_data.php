 <!-- Page -->
 <div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Manajemen Mahasiswa</h1>
  </div>
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title">Data Mahasiswa</h3>
        <div id="exampleTableAddToolbar">
          <a href="manajemen_mahasiswa_insert.php">
            <button class="btn btn-info" type="button">
              <i class="icon fa-plus"></i> <b>Tambah Data</b>
            </button>
          </a>
        </div>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
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
            <tbody>
              <tr>
                <td>311410001</td>
                <td>Adrianus Wiraatmadja</td>
                <td>adrianus@gmail.com</td>
                <td>12jackson12</td>
                <td style="color: #56ad34"><b>Terkonfirmasi</b></td>
                <td>
                  <a href="manajemen_mahasiswa_edit.php">
                    <button type="button" class="btn btn-animate btn-animate-side btn-info btn-sm">
                      <span><i class="icon fa-pencil"></i> &nbsp<b>Perbarui</b></span>
                    </button>
                  </a>
                </td>
                 <td>
                  <a href="#">
                    <button type="button" class="btn btn-animate btn-animate-side btn-warning btn-sm">
                      <span><i class="icon fa-close"></i> &nbsp<b>Cancel</b></span>
                    </button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>311410002</td>
                <td>Angelika Swan</td>
                <td>angelika9@gmail.com</td>
                <td>13chiko13</td>
                <td style="color: #ef2349"><b>Belum Terkonfirmasi</b></td>
                <td>
                  <a href="manajemen_mahasiswa_edit.php">
                    <button type="button" class="btn btn-animate btn-animate-side btn-info btn-sm">
                      <span><i class="icon fa-pencil"></i> &nbsp<b>Perbarui</b></span>
                    </button>
                  </a>
                </td>
                <td>
                  <a href="#">
                    <button type="button" class="btn btn-animate btn-animate-side btn-warning btn-sm">
                      <span><i class="icon fa-close"></i> &nbsp<b>Cancel</b></span>
                    </button>
                  </a>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- End Panel Basic -->
  </div>
</div>