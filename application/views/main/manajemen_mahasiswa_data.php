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
          <table id="example" class="table table-hover dataTable table-striped width-full">
            <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status Booking</th>
                <th>Update</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status Booking</th>
                <th>Update</th>
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

    // $(document).ready(function() {

    // } );

    window.onload = function() {
     $('#example').DataTable( {

      "ajax": {
        "deferLoading": 57,
        "type": "GET",
        "url": "http://localhost/mcdorm/index.php/main/getmahasiswa",

        "dataSrc": function ( json ) {
          return json;
        }     
      },

      "columns": [
      { "data": "id_mahasiswa" },
      { "data": "nama_mahasiswa" },
      { "data": "email" },
      { "data": "status" },
      {
        "targets": -1,
        "data": null, 
        "defaultContent": "<a href='manajemen_mahasiswa_edit' ><button id='perbarui' type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a></td>"
      }
      ]

    } );

     $('#example tbody').on( 'click', '#perbarui', function () {
      var table = $('#example').DataTable();
      var data = table.row($(this).parents('tr')).data();
      // alert( data.id_mahasiswa);
      editDataSiswa(data.id_mahasiswa);

    } );
   }


   function editDataSiswa(x){
    document.cookie = "editDataSiswa="+x+"; path=/mcdorm/index.php/main;"
  }
</script>



