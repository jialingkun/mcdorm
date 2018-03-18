
<div class="gap"></div>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4 style="font-weight: 500;">Terima Kasih telah Mempercayai Kami !</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia commodo condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>	
        </div>

        <div class="col-md-4">
            <h4>Pembayaran Via Transfer</h4>
            <ul class="card-select">
                <li>
                    <img id="output" src="http://localhost/mcdorm/photos/payment/<?php echo $_COOKIE['frontCookie'] ?>.jpg" />
                    <p><b>Bukti Transfer Bank</b><br></p>
                </li>
            </ul>
            <div class="gap gap-small"></div>
            <h4>Upload Bukti</h4>
            <form class="cc-form" action="uploadimagepayment/<?php echo $_COOKIE['frontCookie'] ?>" method="post" enctype="multipart/form-data">
               <input name="file" type="file" id="uploadImage" accept="/*" onchange="loadFile(event)">

               <input type="submit" class="btn btn-success" name="Submit" style="margin-top: 15px;">
           </form>
       </div>

       <div class="col-md-4">
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
    <div class="gap"></div>
</div>



<script>
    window.onload = function() {
        var namaKos = null;
        var alamatKos = null;
        var gender = null;
        var namaMahasiswa = null;
        var tanggalMasuk = null;
        var namaKamar = null;
        var harga = null;


        var urls='getmahasiswa/'+getCookie("frontCookie");
        $.ajax({
            url:"<?php echo base_url() ?>index.php/"+urls,
            type: 'get',
            dataType: "json",
            success: function (response) {
                $("#modalImage").attr("src",'http://localhost/mcdorm/photos/'+response.id_kos+'/'+response.id_kamar+'/slot1.jpg');
                $("#modalNamaKos").html(response.nama_kos);
                $("#modalAlamatKos").html(response.alamat);
                $("#modalGender").html(response.gender_kos);
                $("#modalMahasiswa").html(response.nama_mahasiswa);
                $("#modalTanggal").html(response.tanggal_masuk);
                $("#modalHarga").html('Rp '+response.harga+',- /bulan');
                $("#modalKamar").html(response.nama_kamar);
                $("#modalTotal").html('Rp '+response.harga+',- /bulan');
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
};



</script>