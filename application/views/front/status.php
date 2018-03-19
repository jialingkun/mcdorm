
<div class="container">
    <h1 class="page-title">Riwayat Pemesanan</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped table-booking-history">
                <thead >
                    <tr >
                        <th class="text-center">Nama Kos</th>
                        <th class="text-center">Nama Kamar</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal Masuk</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Progress</th>
                    </tr>
                </thead>
                <tbody id="tabelHistory">

                </tbody>
                <tbody id="tabelHistory2" >

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="gap"></div>
<div class="container">

  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi Booking</h4>
      </div>
      <div class="modal-body">
          <div>
            <div class="booking-item-payment">
                <header class="clearfix">
                    <a class="booking-item-payment-img">
                        <img id="modalImage" src=""/>
                    </a>
                    <h5 id="modalNamaKos" class="booking-item-payment-title">Kos Semangka 5</h5>
                    <small id="modalAlamatKos" >jl. Semangka 5 Malang</small><br>
                    <small id="modalGender" >jl. Semangka 5 Malang</small><br>
                    
                </header>
                <ul class="booking-item-payment-details">
                    <li>
                        <h5>Pemesanan Atas Nama</h5>
                        <p id="modalMahasiswa"><b>Joni Jono</b></p>
                    </li>
                    <li>
                        <h5>Tanggal Masuk</h5>
                        <p id="modalTanggal"><b>32 Desember 2017</b></p>
                    </li>
                    <li>
                        <h5>Detail Pemesanan</h5>
                        <ul class="booking-item-payment-price">
                            <li>
                                <p id="modalKamar" class="booking-item-payment-price-title"></p>
                                
                                <p id="modalHarga" class="booking-item-payment-price-amount"><small></small>
                                </p> 
                            </li>

                        </ul>
                    </li>
                </ul>
                <p  class="booking-item-payment-total">Total Pemesanan: <span id="modalTotal"></span>
                </p>
            </div>
        </div>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    </div>
</div>

</div>
</div>

</div>

<script>
    var res = null;
    var resMahasiswa = null;
    window.onload = function() {

        var urls='getmahasiswa/'+getCookie("frontCookie");
        $.ajax({
            url:"<?php echo base_url() ?>index.php/"+urls,
            type: 'get',
            dataType: "json",
            success: function (response) {
                resMahasiswa = response;
                if (response.status != "Terpesan") {
                    var tr_str = 
                    '<tr class="text-center" >'+
                    '<td>'+response.nama_kos+'</td>'+
                    '<td>'+response.nama_kamar+'</td>'+
                    '<td>Rp '+response.harga+',-</td>'+
                    '<td>'+response.tanggal_masuk+'</td>'+
                    '<td><b>'+response.status+'</b></td>'+
                    '<td class="text-center">'+
                    '<a href="payment"><button type="button" class="btn btn-info btn-sm" ><i class="fa fa-upload"></i><b>Pembayaran</b></button></a>'+
                    '<a href="#"><button type="button" class="btn btn-warning btn-sm" ><i class="fa fa-minus-circle"></i><b>Batal</b></button></a>'+
                    '</td>'+
                    '</tr>';
                    $('#tabelHistory').append(tr_str);
                }
            }
        });


        var urls='gethistory/'+getCookie("frontCookie");
        $.ajax({
            url:"<?php echo base_url() ?>index.php/"+urls,
            type: 'get',
            dataType: "json",
            success: function (response) {
             res = response;
             var len = response.length;
             for (var i = 0; i < len; i++) {
                var tr_str = 
                '<tr class="text-center" >'+
                '<td style="background-color: white;">'+response[i].nama_kos+'</td>'+
                '<td style="background-color: white;">'+response[i].nama_kamar+'</td>'+
                '<td style="background-color: white;">Rp '+response[i].harga+',-</td>'+
                '<td style="background-color: white;">'+response[i].tanggal_masuk+'</td>'+
                '<td style="background-color: white;"><b>Selesai</b></td>'+
                '<td style="background-color: white;" class="text-center">'+
                '<a href="#"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success btn-sm" onclick="modalHistory(&quot;'+i+'&quot)"><b>Detil</b></button></a>'+
                '</td>'+
                
                '</tr>';
                $('#tabelHistory2').append(tr_str);
            }
        }
    });
    }

    function modalHistory(i){

        $('#modalNamaKos').html(res[i].nama_kos);
        $('#modalAlamatKos').html(res[i].alamat);
        $('#modalGender').html(res[i].gender);
        $('#modalMahasiswa').html(getCookie('frontNama'));
        $('#modalHarga').html('Rp '+res[i].harga+',- /bulan');
        $('#modalKamar').html(res[i].nama_kamar);
        
        $('#modalTotal').html('Rp '+res[i].harga+',- /bulan');
        $("#modalImage").attr("src",'http://localhost/mcdorm/photos/'+res[i].id_kos+'/'+res[i].id_kamar+'/slot1.jpg');
        $('#modalTanggal').html(res[i].tanggal_masuk);
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
