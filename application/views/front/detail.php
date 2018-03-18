
<div class="container">
    <div class="booking-item-details">
        <header class="booking-item-header">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="lh1em" id="namaKos">Kos Semangka 5</h2>
                    <p class="lh1em text-small" id="alamatKos"><i class="fa fa-map-marker"></i> Jl. Semangka 5, Bareng, Kawi, Malang</p>
                    <h4>Gender : <b id="genderKos"></b></h4>
                </div>
                
            </div>
        </header>
        <div class="row">
            <div class="col-md-7">
                <div class="tabbable booking-details-tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1" >
                            <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" id="gambarKos">
                                <?php  
                                $targetPath = base_url().'photos';
                                $targetPath = $targetPath.'/'.$_COOKIE['detailKamar'].'/';
                                $maxslot = 10;
                                for ($i=1; $i <= $maxslot; $i++) { 
                                    $filepath = $targetPath."slot".$i.".jpg";
                                    if (@getimagesize($filepath)) {
                                        echo "<img src='".$filepath."'>";
                                    }
                                }
                                ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="booking-item-dates-change">
                    <form>
                        <div class="input-daterange">
                            <h3>Detail Pemesanan</h3>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight" ></i>
                                        <label>Tanggal Masuk</label>
                                        <input class="date-pick form-control" type="text" value=""  onchange="tanggalMasuk = this.value" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="gap gap-small"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Fasilitas Kos</h3>
                    </div>
                    <div class="col-md-4">
                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            <li>
                                <i  class="im im-wi-fi"></i><span class="booking-item-feature-title" id="fasilitas1" style="text-decoration: line-through">WiFi</span>
                            </li>
                            <li>
                                <i class="im im-parking"></i><span class="booking-item-feature-title" id="fasilitas2" style="text-decoration: line-through">Parkir</span>
                            </li>
                            <li>
                                <i class="im im-restaurant"></i><span class="booking-item-feature-title" id="fasilitas3" style="text-decoration: line-through">Nasi</span>
                            </li>
                            <li>
                                <i class="im im-air"></i><span class="booking-item-feature-title" id="fasilitas4" style="text-decoration: line-through">AC</span>
                            </li>

                            <li>
                                <i class="im im-kitchen"></i><span class="booking-item-feature-title" id="fasilitas5" style="text-decoration: line-through">Air Putih</span>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            <li>
                                <i class="im im-washing-machine"></i><span class="booking-item-feature-title" id="fasilitas6" style="text-decoration: line-through">Laundry</span>
                            </li>
                            <li>
                                <i class="im im-bathtub"></i><span class="booking-item-feature-title" id="fasilitas7" style="text-decoration: line-through">KM dalam</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <div class="row">
            <div class="col-md-12">
                <p id="deskripsiKos">Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <h3>Pilih Kamarmu</h3>
        <div class="row">
            <div class="col-md-12">
                <ul class="booking-list" id="bookList">

                </ul>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>


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
        <button type="button" class="btn btn-primary" data-submit="modal" onclick="confirmBooking()">Setuju</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</div>

</div>
</div>

</div>



<script>
    window.onload = function() {
        var tanggalMasuk = null;
        var bookKamar = null;


        var urls='getdetail/'+getCookie("detailKamar");

        $.ajax({
            url:"<?php echo base_url() ?>index.php/"+urls,
            type: 'get',
            dataType: "json",
            success: function (response) {


                $('#namaKos').html(response.nama_kos);
                $('#modalNamaKos').html(response.nama_kos);

                $('#alamatKos').html(response.alamat);
                $('#modalAlamatKos').html(response.alamat);

                $('#hargaKos').html(response.harga);
                $('#deskripsiKos').html(response.deskripsi_kos);
                $('#genderKos').html(response.gender_kos);
                $('#modalGender').html(response.gender_kos);
                var fas = response.fasilitas_kos;
                var res = fas.split(",");
                for (var i = 0; i < res.length; i++) {
                    if ($("#fasilitas1").text()==res[i]) {
                      $('#fasilitas1').css('text-decoration','');
                  }
                  if ($("#fasilitas2").text()==res[i]) {
                      $('#fasilitas2').css('text-decoration','');
                  }
                  if ($("#fasilitas3").text()==res[i]) {
                      $('#fasilitas3').css('text-decoration','');
                  }
                  if ($("#fasilitas4").text()==res[i]) {
                      $('#fasilitas4').css('text-decoration','');
                  }
                  if ($("#fasilitas5").text()==res[i]) {
                      $('#fasilitas5').css('text-decoration','');
                  }
                  if ($("#fasilitas6").text()==res[i]) {
                      $('#fasilitas6').css('text-decoration','');
                  }
              }
          }
      });



        $.ajax({
            url:"<?php echo base_url() ?>index.php/"+urls+"/kamar",
            type: 'get',
            dataType: "json",
            success: function (response) {

                for (var i = 0; i < response.length; i++) {

                    var fas = response[i].fasilitas_kamar;
                    var res = fas.split(",");
                    for (var j = 0; j < res.length; j++) {

                        if (res[j]== "Lemari") {
                  // $('#fasilitas_kamar1').css('background-color','');
                  var fas1= '</li>'+
                  '<li rel="tooltip" data-placement="top" title="Lemari Kayu"><i id="fasilitas_kamar1" class="fa fa-archive" ></i><span class="booking-item-feature-sign">Lemari</span>'+
                  '</li>';
              }else{ 
                var fas1 =  '</li>'+
                '<li rel="tooltip" data-placement="top" title="Lemari Kayu"><i id="fasilitas_kamar1" class="fa fa-archive" style="background-color: rgba(0, 0, 0, 0.3)"></i><span class="booking-item-feature-sign">Lemari</span>'+
                '</li>';

            }
            if (res[j]== "AC") {
                  // $('#fasilitas_kamar2').css('background-color','');
                  var fas2 = 
                  '<li rel="tooltip" data-placement="top" title="AC"><i id="fasilitas_kamar2" class="im im-air" ></i><span class="booking-item-feature-sign" >AC</span>'+
                  '</li>';

              }else{
                var fas2 = 
                '<li rel="tooltip" data-placement="top" title="AC"><i id="fasilitas_kamar2" class="im im-air" style="background-color: rgba(0, 0, 0, 0.3)"></i><span class="booking-item-feature-sign" >AC</span>'+
                '</li>';
            }
            if (res[j] == "KM Dalam") {
                  // $('#fasilitas_kamar3').css('background-color','');
                  var fas3 = 
                  '<li rel="tooltip" data-placement="top" title="KM Dalam"><i id="fasilitas_kamar3" class="im im-bathtub" ></i><span class="booking-item-feature-sign" >KM</span>'+
                  '</li>';
              }else{
                var fas3 = '<li rel="tooltip" data-placement="top" title="KM Dalam"><i id="fasilitas_kamar3" class="im im-bathtub" style="background-color: rgba(0, 0, 0, 0.3)"></i><span class="booking-item-feature-sign" >KM</span>'+
                '</li>';
            }
            if (res[j] == "Kipas Angin") {
              var fas4 = 
              '<li rel="tooltip" data-placement="top" title="Kipas Anggin"><i id="fasilitas_kamar4" class="im im-air" ></i><span class="booking-item-feature-sign" >Kipas</span>'+
              '</li>';
          }else{
            var fas4 = 
            '<li rel="tooltip" data-placement="top" title="Kipas Anggin"><i id="fasilitas_kamar4" class="im im-air" style="background-color: rgba(0, 0, 0, 0.3)"></i><span class="booking-item-feature-sign" >Kipas</span></li>';

        }
    }
    $('#bookList').append(
        '<li>'+
        '<a class="booking-item">'+
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<img src="http://localhost/mcdorm/photos/'+getCookie("detailKamar")+'/'+response[i].id_kamar+'/slot1.jpg" alt="Image Alternative text" title="Gambar Kamar" />'+
        '</div>'+
        '<div class="col-md-4">'+
        '<h5 class="booking-item-title" style="font-weight: 500;">'+response[i].nama_kamar+'</h5>'+
        '<ul class="booking-item-features booking-item-features-sign clearfix">'+
        '<li rel="tooltip" data-placement="top" title="Spring Bed"><i class="im im-bed" "></i><span class="booking-item-feature-sign">x 1</span>'+
        '</li>'+
        '<li rel="tooltip" data-placement="top" title="Luas Kamar"><i class="im im-width" ></i><span class="booking-item-feature-sign">'+response[i].panjang+'x'+response[i].lebar+'</span>'+fas1+fas2+fas3+fas4+
        '</ul>'+
        '</div>'+
        '<div class="col-md-5">'+
        '<div class="pull-right">'+
        '<span class="booking-item-price">Rp '+response[i].harga+',-</span><span>/bulan</span>'+
        '</div>'+
        '<br><br><br><br>'+
        '<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary pull-right" onclick="namaMhs(&quot;'+response[i].harga+'&quot;,&quot;'+response[i].nama_kamar+'&quot;,&quot;'+response[i].id_kamar+'&quot;)"><b>Pesan Sekarang</b></button>'+
        '</div>'+
        '</div>'+
        '</a>'+
        '</li>'
        );
}
}

});



}

function namaMhs(x,y,z){
    $('#modalMahasiswa').html(getCookie('frontNama'));
    $('#modalHarga').html('Rp '+x+',- /bulan');
    $('#modalKamar').html(y);
    bookKamar = z;
    $('#modalTotal').html('Rp '+x+',- /bulan');
    $("#modalImage").attr("src",'http://localhost/mcdorm/photos/'+getCookie("detailKamar")+'/'+z+'/slot1.jpg');
    $('#modalTanggal').html(tanggalMasuk);
}

function confirmBooking(){

    var urls='order/'+getCookie('frontCookie')+'';
alert(urls);
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      data:
      {
       'idkos':getCookie('detailKamar') ,
       'idkamar': bookKamar ,
       'tanggalmasuk': tanggalMasuk ,
   }
   ,
   success: function(response){
    if (response == 1) {

      window.location.href = 'payment';

  }else{
      alert(response);
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

</script>