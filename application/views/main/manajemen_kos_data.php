
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
          <table id="example" class="table table-hover dataTable table-striped width-full" >
            <thead>
              <tr>
                <th>Username</th>
                
                <th>Nama</th>
                
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Update</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Username</th>
                
                <th>Nama</th>
                
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Update</th>
              </tr>
            </tfoot>
            <tbody id="tabelKos">
             
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
      $('#example').DataTable( {

      "ajax": {
        "deferLoading": 57,
        "type": "GET",
        "url": "http://localhost/mcdorm/index.php/main/getkos",

        "dataSrc": function ( json ) {
          return json;
        }     
      },

      "columns": [
      { "data": "id_kos" },
      { "data": "nama_kos" },
      { "data": "alamat" },
      { "data": "notelp_kos" },
      {
        "targets": -1,
        "data": null, 
        "defaultContent": "<a href='manajemen_kos_edit' ><button type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a></td>"
      }
      ]

    } );
$.fn.dataTable.ext.errMode = 'none';
     $('#example tbody').on( 'click', 'button', function () {
      var table = $('#example').DataTable();
      var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      editDataKos(data.id_kos);

    } );
   }


    function editDataKos(x){

          document.cookie = "editDataKos="+x+"; path=/mcdorm/index.php/main;"

    }
  </script>
