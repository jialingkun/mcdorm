
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
                <th>Perbarui</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Username</th>
                
                <th>Nama</th>
                
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Perbarui</th>
                <th>Hapus</th>
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
          "url": "<?php echo base_url(); ?>index.php/main/getkos",

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
          "defaultContent": "<a href='manajemen_kos_edit' ><button id='perbarui' type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a></td>"
        },
        {
          "targets": -1,
          "data": null, 
          "defaultContent": "<a  ><button id='hapus' type='button' class='btn btn-animate btn-animate-side btn-danger btn-sm'><span><i class='icon fa-trash'></i> &nbsp<b>Hapus</b></span></button></a></td>"
        }
        ]

      } );
      $.fn.dataTable.ext.errMode = 'none';
      $('#example tbody').on( 'click', '#perbarui', function () {
        var table = $('#example').DataTable();
        var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      editDataKos(data.id_kos);

    } );

      $('#example tbody').on( 'click', '#hapus', function () {
        var table = $('#example').DataTable();
        var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      hapusDataKos(data.id_kos);
    } );
    }

    function hapusDataKos(x){
     var txt;
     if (confirm("Apakah anda yakin ingin menghapus data kos ini?")) {
      txt = "Data kos berhasil dihapus";
      var urls = "main/securedelete/kos/"+x+"";
        // alert(urls);
        $.ajax({
          url:"<?php echo base_url() ?>index.php/"+urls,
          type: 'get',
          dataType: "json",
          success: function (response) {
            if (response == 1) {
              alert(txt);
              location.reload();
            }else{
              alert(response);
            }
          }
        });
      } else {
      }
    }

    function editDataKos(x){

      document.cookie = "editDataKos="+x+"; path=<?php echo base_url(); ?>;"

    }
  </script>
