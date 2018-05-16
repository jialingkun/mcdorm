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
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status Booking</th>
                <th>Perbarui</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status Booking</th>
                <th>Perbarui</th>
                <th>Hapus</th>
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
        "url": "<?php echo base_url(); ?>index.php/main/getmahasiswa",

        "dataSrc": function ( json ) {
          return json;
        }     
      },


      "columns": [
      { "data": "id_mahasiswa" },
      { "data": "nama_mahasiswa" },
      { "data": "email" },
      { "data": "status", 
      "render": function (data, type, row) {

        if (row.status === "Belum Pesan") {
          return '<h4> <span class="label label-primary">Belum Pesan</span></h4>';
        }
        if (row.status === "Belum Bayar"){
          return '<h4> <span class="label label-warning">Belum Bayar</span></h4>';
        }
        if (row.status === "Cek Ketersediaan"){
          return '<h4> <span class="label label-danger">Cek Ketersediaan</span></h4>';
        }
        if (row.status === "Belum Verifikasi"){
          return '<h4> <span class="label label-danger">Belum Verifikasi</span></h4>';
        }
        if (row.status === "Terpesan"){
          return '<h4> <span class="label label-success">Terpesan</span></h4>';
        }
        if (row.status === "Batal"){
          return '<h4> <span class="label label-default">Batal</span></h4>';
        }
        if (row.status === "Expired"){
          return '<h4> <span class="label label-default">Expired</span></h4>';
        }


      }
    },
    {
      "targets": -1,
      "data": null, 
      "defaultContent": "<a href='manajemen_mahasiswa_edit' ><button id='perbarui' type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a>"
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
      // alert( data.id_mahasiswa);
      editDataSiswa(data.id_mahasiswa);

    } );

     $('#example tbody').on( 'click', '#hapus', function () {
      var table = $('#example').DataTable();
      var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      hapusDataMahasiswa(data.id_mahasiswa);
    } );
   }

    function hapusDataMahasiswa(x){
     var txt;
     if (confirm("Apakah anda yakin ingin menghapus data mahasiswa ini?")) {
      txt = "Data mahasiswa berhasil dihapus";
      var urls = "main/securedelete/mahasiswa/"+x+"";
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

   function editDataSiswa(x){
    document.cookie = "editDataSiswa="+x+"; path=<?php echo base_url(); ?>;"
  }
</script>



