
<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $paymentThanks = 'Thank you for trusting Us!';
    $paymentInfo = 'Please follow the process of transfer to the account number below. Then upload a photo proof of transfer through this page in less than <b style="font-size: 15pt;"> 24 hours</b>. You can close this page and access them again later via the menu STATUS.';
    $paymentInfo2 = 'Your proof of transfer will be verified by our admin in less than 2 days. If there is a mistake, you can reupload the photo from this page.';
    $paymentGender = 'Gender : ';
    $paymentEnter = 'Enter Date';
    $paymentNamakamar = 'Name : ';
    $paymentAddress = 'Address : ';
    $paymentperMonth = ' month';
    $paymentMonth1 = ' ( payment  ';
    $paymentMonth2 = ' months )';
    
    $paymentBankname = 'Bank Name : ';
    $paymentAlias = 'Alias : ';
    $paymentBankAccount ='Bank Account : ';
    $paymentBookedby = 'Booked by : ';
    $paymentDetail = 'Booking Payments : ';
    $paymentTotal = 'Total : ';
    $paymentSubmit = 'Submit';
    $paymentCancel = 'Cancel';
    $paymentTitle = 'Transfer Payments';
    $paymentProof = 'Proof of Bank Transfer';
    $paymentDates = 'Enter Dates';
    $paymentKamarDetail = 'Room Name : ';
    $paymentDuration = 'Order Duration';
    $paymentModalMonth = ' months';

}else{
    $paymentThanks = 'Terima Kasih telah Mempercayai Kami!';
    $paymentInfo = 'Silahkan lakukan proses transfer ke nomer rekening yang tertera. Kemudian upload foto bukti transfer melalui halaman ini dalam waktu kurang dari <b style="font-size: 15pt;"> 24 jam </b>. Anda bisa menutup halaman ini dan mengaksesnya lagi nanti melalui menu STATUS.';
    $paymentInfo2 = 'Foto bukti transfer yang sudah anda upload akan diverifikasi oleh pihak kami dalam waktu kurang lebih 2 hari. Anda masih bisa mengubah foto bukti transfer jika ada kesalahan dengan mengupload ulang melalui halaman ini.';
    $paymentGender = 'Jenis Kelamin :';    
    $paymentEnter = 'Tanggal Masuk';
    $paymentNamakamar = 'Nama : ';
    $paymentAddress = 'Alamat : ';
    $paymentperMonth = ' bulan';
    $paymentMonth1 = ' ( Pembayaran  ';
    $paymentMonth2 = ' bulan )';
    $paymentBankname = 'Nama Bank : ';
    $paymentAlias = 'Atas Nama : ';
    $paymentBankAccount ='Akun Bank : ';
    $paymentBookedby = 'Dipesan oleh : ';
    $aymentPayment = 'Detil Pemesanan : ';
    $pPaymentTotal = 'Total : ';
    $aymentSubmit = 'Setuju';
    $pPaymentCancel = 'Batal';
    $paymentTitle = 'Pembayaran Via Transfer';
    $paymentProof = 'Bukti Transfer Bank';
    $paymentDates = 'Tanggal Masuk';
    $paymentSubmit = 'Setuju';
    $paymentDetail = 'Pembayaran Pemesanan : ';
    $paymentTotal = 'Total : ';
    $paymentKamarDetail = 'Nama Kamar : ';
    $paymentDuration = 'Lama Pemesanan';
    $paymentModalMonth = ' bulan';
}
?>

<div class="gap"></div>


<div class="container">
    <div class="row">
        <div id="info">
            <div id="content">
                <div class="col-md-4">
                    <h4 style="font-weight: 500;"><?php echo $paymentThanks ?></h4>
                    <div style="border:1px dashed red; padding:10px;" id="keteranganPayment">
                    </div>
                </div>

                <div class="col-md-4">
                    <h4><?php echo $paymentTitle ?></h4>
                    <ul class="card-select">
                        <li>
                            <img id="output" src="" />
                            <p><b><?php echo $paymentProof ?></b><br></p>
                        </li>
                    </ul>
                    <div class="gap gap-small"></div>
                    <h4>Upload</h4>
                    <form class="cc-form" action="uploadimagepayment/<?php echo $_COOKIE['frontCookie'] ?>" method="post" enctype="multipart/form-data">
                        <input id="uploadFrom" name="file" type="file" id="uploadImage" accept="/*" onchange="loadFile(event)"  />

                        <input id="submitButton" type="submit" class="btn btn-success" name="Submit" value ="<?php echo $paymentSubmit ?>" style="margin-top: 15px;" disabled="true"/> 
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <a class="booking-item-payment-img">
                                <img id="modalImage" />
                            </a>
                            <h5 id="modalNamaKos" class="booking-item-payment-title">Kos Semangka 5</h5>
                            <p id="modalNamaKamarDetail" class="booking-item-payment-title"></p>
                            <small id="modalAlamatKos" >jl. Semangka 5 Malang</small><br>
                            <small id="modalGender" >jl. Semangka 5 Malang</small><br>

                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5><?php echo $paymentBookedby ?></h5>
                                <p id="modalMahasiswa"><b>Joni Jono</b></p>
                            </li>
                            <li>
                                <h5><?php echo $paymentDates ?></h5>
                                <p id="modalTanggal"><b>32 Desember 2017</b></p>
                            </li>
                            <li>
                                <h5><?php echo $paymentDuration ?></h5>
                                <p id="modalDuration"><b></b></p>
                            </li>
                            <li>
                                <h5><?php echo $paymentDetail ?></h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p id="modalKamar" class="booking-item-payment-price-title"></p>

                                        <p id="modalHarga" class="booking-item-payment-price-amount"><small></small>
                                        </p> 
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <p  class="booking-item-payment-total"><?php echo $paymentTotal ?><span id="modalTotal"></span>
                            <span style="font-size: 12pt; margin-left:6px;" id="modalPaymentMonths"></span>
                        </p>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </div>
    </div>
</div>

<script>
   window.onload = function() {
    var urls = "<?php echo base_url() ?>photos/payment/"+getCookie("frontCookie");
    $.get(urls)
    .done(function() { 
        $('#submitButton').prop('disabled',false);
    }).fail(function() { 

    })





    var namaKos = null;
    var alamatKos = null;
    var gender = null;
    var namaMahasiswa = null;
    var tanggalMasuk = null;
    var namaKamar = null;
    var harga = null;
    var keterangan = null;
    var info = null;


    var urls='getmahasiswa/'+getCookie("frontCookie");
    $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
            $("#modalImage").attr("src",'<?php echo base_url(); ?>photos/'+response.id_kos+'/'+response.id_kamar+'/slot1.jpg');
            $("#modalNamaKos").html('<?php echo $paymentNamakamar ?>' + response.nama_kos);
            $('#modalNamaKamarDetail').html("<?php echo $paymentKamarDetail ?>"+response.nama_kamardetail);

            $("#modalAlamatKos").html('<?php echo $paymentAddress ?>'+response.alamat);
            $("#modalGender").html('<?php echo $paymentGender ?>'+response.gender_kos);
            $("#modalMahasiswa").html(response.nama_mahasiswa);
            $("#modalTanggal").html(response.tanggal_masuk);
            $("#modalHarga").html('Rp '+response.harga.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+',- /<?php echo $paymentperMonth ?>');
            $("#modalKamar").html(response.nama_kamar);
            $("#modalTotal").html('Rp '+(response.harga*response.lama_pemesanan).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
            $("#modalDuration").html(response.lama_pemesanan + "<?php echo $paymentModalMonth ?>" );
            $("#modalPaymentMonths").html("<?php echo $paymentMonth1 ?>"+response.lama_pemesanan + "<?php echo $paymentMonth2 ?>" );
            
            if (response.status === 'Belum Bayar') {

                document.getElementById('output').src = "about:blank";

                keterangan = 
                '<p><?php echo $paymentInfo ?>'+
                '</p>'+
                '<hr>'+
                '<h5><?php echo $paymentBankname ?> BCA</h5>'+
                '<h5><?php echo $paymentAlias ?> Yayasan Harapan Bangsa Sejahtera</h5>'+
                '<h5><b>Nomor Rekening : 102938125810</b></h5>';
                $('#keteranganPayment').append(keterangan);

            }else if(response.status === 'Belum Verifikasi'){

                document.getElementById('output').src = "<?php echo base_url(); ?>photos/payment/<?php echo $_COOKIE['frontCookie'] ?>.jpg";

                keterangan = 
                '<p><?php echo $paymentInfo2 ?></p>';
                $('#keteranganPayment').append(keterangan);
            }else{
               $('#content').remove();
               info = 
               '<h2 style="margin:auto; display:block; text-align:center; padding:15% 0 15% 0;">Pembayaran Anda Telah Kami Verifikasi</h2>'
               ;
               $('#info').append(info);
           }

       }
   });

    
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


var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    if ( output.src != "undefined") {
        $('#submitButton').prop('disabled',false);        
    }
};



</script>