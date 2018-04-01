<?php
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
  $title = 'Order Status';
  $tableth= '
  <th class="text-center">Address</th>
  <th class="text-center">Room Name</th>
  <th class="text-center">Price</th>
  <th class="text-center">Date Arrival</th>
  <th class="text-center">Status</th>
  <th class="text-center">Action</th>
  ';
  $pemesan = 'Booked By';
  $tglmasuk = 'Arrival Date';
  $detail = 'Order Detail';
  $detailMonth = ' month';
  $tutup = 'Close';
  $pembayaran = 'Payment';
  $batal = 'Cancel';
  $confirmBatal = 'Do you want to cancel this order?';
  $suksesBatal = 'Order Successfuly Canceled';
  $gagalBatal = 'Failed to Cancel Order';
  $Cancel = 'Wait';
}else{
  $title = 'Status Pemesanan';
  $tableth= '
  <th class="text-center">Alamat</th>
  <th class="text-center">Nama Kamar</th>
  <th class="text-center">Harga</th>
  <th class="text-center">Tanggal Masuk</th>
  <th class="text-center">Status</th>
  <th class="text-center">Aksi</th>
  ';
  $pemesan = 'Nama Pemesan';
  $tglmasuk = 'Tanggal Masuk';
  $detail = 'Detail Pesanan';
  $detailMonth = ' bulan';
  $tutup = 'Tutup';
  $pembayaran = 'Pembayaran';
  $batal = 'Batal';
  $confirmBatal = 'Apakah anda yakin ingin membatalkan pesanan ini?';
  $suksesBatal = 'Pesanan kamar berhasil dibatalkan';
  $gagalBatal = 'Pembatalan Pesanan Gagal';
  $Cancel = 'Tunggu';
}

?>


<div class="container">
    <h1 class="page-title"><?php echo $title ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-bordered table-striped table-booking-history">
                    <thead >
                        <tr >
                            <?php echo $tableth ?>
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
          <h4 class="modal-title">Detail</h4>
      </div>
      <div class="modal-body">
          <div>
            <div class="booking-item-payment">
                <header class="clearfix">
                    <h5 id="modalNamaKos" class="booking-item-payment-title">Kos Semangka 5</h5>
                    <small id="modalAlamatKos" >jl. Semangka 5 Malang</small><br>
                    <small id="modalGender" >jl. Semangka 5 Malang</small><br>
                    
                </header>
                <ul class="booking-item-payment-details">
                    <li>
                        <h5><?php echo $pemesan ?></h5>
                        <p id="modalMahasiswa"><b>Joni Jono</b></p>
                    </li>
                    <li>
                        <h5><?php echo $tglmasuk ?></h5>
                        <p id="modalTanggal"><b>32 Desember 2017</b></p>
                    </li>
                    <li>
                        <h5><?php echo $detail ?></h5>
                        <ul class="booking-item-payment-price">
                            <li>
                                <p id="modalKamar" class="booking-item-payment-price-title"></p>
                                
                                <p id="modalHarga" class="booking-item-payment-price-amount"><small></small>
                                </p> 
                            </li>

                        </ul>
                    </li>
                </ul>
                <p  class="booking-item-payment-total">Total: <span id="modalTotal"></span>
                </p>
            </div>
        </div>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $tutup ?></button>
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
                if (response.status == "Belum Bayar" || response.status == "Belum Verifikasi") {
                    var tr_str = 
                    '<tr class="text-center" >'+
                    '<td>'+response.nama_kos+'</td>'+
                    '<td>'+response.nama_kamar+'</td>'+
                    '<td>Rp '+response.harga+',-</td>'+
                    '<td>'+response.tanggal_masuk+'</td>'+
                    '<td><b>'+translateStatus(response.status)+'</b></td>'+
                    '<td class="text-center">'+
                    '<a href="payment"><button type="button" class="btn btn-info btn-sm" ><i class="fa fa-upload"></i><b><?php echo $pembayaran ?></b></button></a>'+
                    '<a ><button id="cancelButton" type="button" class="btn btn-warning btn-sm" onclick="cancelBooking()"><i  class="fa fa-minus-circle"></i><b id="cancel"><?php echo $batal ?></b></button></a>'+
                    '</td>'+
                    '</tr>';
                    $('#tabelHistory').append(tr_str);
                }else if(response.status == "Batal" || response.status == "Expired" || response.status == "Belum Pesan"){
                    var tr_str = 
                    '<tr class="text-center" >'+
                    '<td>'+response.nama_kos+'</td>'+
                    '<td>'+response.nama_kamar+'</td>'+
                    '<td>Rp '+response.harga+',-</td>'+
                    '<td>'+response.tanggal_masuk+'</td>'+
                    '<td><b>'+ translateStatus(response.status)+'</b></td>'+
                    '<td></td>'
                    ;
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
                '<td style="background-color: white;">'+response[i].alamat+'</td>'+
                '<td style="background-color: white;">'+response[i].nama_kamar+'</td>'+
                '<td style="background-color: white;">Rp '+response[i].harga+',-</td>'+
                '<td style="background-color: white;">'+response[i].tanggal_masuk+'</td>'+
                '<td style="background-color: white;"><b>'+translateStatus('Terpesan')+'</b></td>'+
                '<td style="background-color: white;" class="text-center">'+
                '<a href="#"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success btn-sm" onclick="modalHistory(&quot;'+i+'&quot)"><b>Detail</b></button></a>'+
                '</td>'+
                
                '</tr>';
                $('#tabelHistory2').append(tr_str);
            }
        }
    });
    }

    function cancelBooking(){
var buttonname = $("#cancel").html();
  $("#cancel").html("<?php echo $Cancel ?>");
  $("#cancelButton").prop("disabled",true);


       var txt;
       if (confirm("<?php echo $confirmBatal ?>")) {
          txt = "<?php echo $suksesBatal ?>";
          var urls='cancelorder/'+getCookie("frontCookie"); 
        // alert(urls);
        $.ajax({
          url:"<?php echo base_url() ?>index.php/"+urls,
          type: 'get',
          dataType: "json",
          success: function (response) {
            if (response == 1) {
              $("#cancel").html(buttonname);
              alert(txt);
              location.reload();
          }else{
              alert("<?php echo $gagalBatal ?>");
          }
      }
  });
    } else {
    }
}

function modalHistory(i){
myString = getCookie('frontNama');
    $('#modalNamaKos').html(res[i].nama_kos);
    $('#modalAlamatKos').html(res[i].alamat);
    $('#modalGender').html(res[i].gender);
    $('#modalMahasiswa').html(gmyString.replace(/\+/g, " "));
    $('#modalHarga').html('Rp '+res[i].harga+',- /<?php echo $detailMonth ?>');
    $('#modalKamar').html(res[i].nama_kamar);

    $('#modalTotal').html('Rp '+res[i].harga+',- /<?php echo $detailMonth ?>');
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

function translateStatus (status){
    if (getCookie("bahasa")=='ENG') {
        if (status == 'Belum Bayar') {
            return 'Waiting Payment';
        } else if (status == 'Belum Verifikasi') {
            return 'Waiting Verification';
        } else if (status == 'Batal') {
            return 'Canceled';
        } else if (status == 'Belum Pesan') {
            return 'Free';
        } else if (status == 'Terpesan') {
            return 'Booked';
        } else {
            return status;
        }
    }else{
        return status;
    }
}



</script>
