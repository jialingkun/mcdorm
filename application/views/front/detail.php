<?php
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
  $detailGender = 'Gender : ';
  $detailOrder = 'Order Detail :';
  $detailEnter = 'Enter Month';
  $detailFacility = 'Facility';
  $detailParkingMotor = 'Bike Parking';
  $detailRice = 'Rice';
  $detailWater = 'Drinks';
  $detailHour = '24 Hours';
  $detailKitchen = 'Kitchen';
  $detailFridge = 'Fridge';
  $detailWardrobe = 'Wardrobe';
  $detailFan = 'Fan';
  $detailChoose = 'Choose Your Room';
  $detailNamakamar = 'Name : ';
  $detailAddress = 'Address : ';
  $detailLeft = 'Room Left : ';
  $detailperMonth = ' month';
  $detailMonth1 = '( payment for ';
  $detailMonth2 = ' months )';
  $detailOrdernow = 'Order Now';
  $detailConfirmation = 'Booking Confirmation';
  $detailBookedby = 'Booked by : ';
  $detailDetail = 'Booking Details : ';
  $detailTotal = 'Total : ';
  $detailSubmit = 'Submit';
  $detailCancel = 'Cancel';
  $detailWait = 'Wait...';
  $detailFfailed = 'Order Failed, maybe you have another order';
  $detailDate = '      ';
  $labelKosMap = "Dorm Location";
  $detailJarak = "to MaChung";
  $detailParkingCar = "Car Parking";
  $detail24Hour = "24 Hours ";
  $detailHotWater = 'Hot Water';
  $detailLivingRoom = "Living Room";
  $detailDiningRoom = "Dining Room";
  $detailDryRoom = "Dry Room";
  $detailTable = "Table";
  $detailChair = "Chair";
  $detailTwinBed = "Twin Bed";
  $detailToilet = "Toilet";
  $detailDuration = "Order Duration";
  $detailKamarDetail = 'Room Name : ';
  $detailModalBulan = ' months';
  $detailSuccess = 'Successfully Booked';
  $detailAvailableFrom = 'Available from: ';
  $detailAvailableUntil = 'Status: ';
  $detailDalamBulan = 'Order duration by months: (minimum 3 months)';
  $detailPilihKamar = 'Choose the Room';
  $detailAvailable = 'Available for Particular Months';
  $alwaysAvailable = 'Available';
  $warningVakum = "Warning! This room was already booked on certain months. You may not be able to extend your reservation in case you need to stay for a long time.";

}else{
  $detailGender = 'Gender Kos :';
  $detailOrder = 'Detil Pemesanan :';
  $detailEnter = 'Bulan Masuk';
  $detailFacility = 'Fasilitas Kos';
  $detailParkingMotor = 'Parkir Motor';
  $detailRice = 'Nasi';
  $detailWater = 'Air Putih';
  $detailHour = '24 Jam';
  $detailKitchen = 'Dapur';
  $detailFridge = 'Kulkas';
  $detailWardrobe = 'Lemari';
  $detailFan = 'Kipas';
  $detailChoose = 'Pilih Kamarmu';
  $detailNamakamar = 'Nama : ';
  $detailAddress = 'Alamat : ';
  $detailLeft = 'Sisa Kamar : ';
  $detailperMonth = ' bulan';
  $detailMonth2 = 'bulan )';
  $detailMonth1 = '( pembayaran untuk ';
  $detailDate = '      ';
  $detailOrdernow = 'Pesan Sekarang';
  $detailConfirmation = 'Konfirmasi Booking';
  $detailBookedby = 'Dipesan oleh : ';
  $detailDetail = 'Detil Pemesanan : ';
  $detailTotal = 'Total : ';
  $detailSubmit = 'Setuju';
  $detailCancel = 'Batal';
  $detailWait = 'Tunggu...';
  $detailFfailed = 'Pemesanan gagal, mungkin anda memiliki pesanan lain';
  $labelKosMap = "Lokasi Kos";
  $detailJarak = "ke MaChung";
  $detailParkingCar = "Parkir Mobil";
  $detail24Hour = "Kunci 24 Jam";
  $detailHotWater = 'Air Panas';
  $detailLivingRoom = "Ruang Tamu";
  $detailDiningRoom = "Ruang Makan";
  $detailDryRoom = "Ruang Jemur";
  $detailTable = "Meja";
  $detailChair = "Kursi";
  $detailTwinBed = "Twin Bed";
  $detailToilet = "KM Mandi";
  $detailDuration = "Lama Pemesanan";
  $detailKamarDetail = 'Nama Kamar : ';
  $detailModalBulan = ' bulan';
  $detailSuccess = 'Berhasil Memesan';
  $detailAvailableFrom = 'Tersedia mulai: ';
  $detailAvailableUntil = 'Status: ';
  $detailDalamBulan = 'Lama Pemesanan dalam bulan: (minimal 3 bulan)';
  $detailPilihKamar = 'Pilih Kamar';
  $detailAvailable = 'Tersedia Bulan Tertentu';
  $alwaysAvailable = 'Tersedia';
  $warningVakum = "Peringatan! Kamar ini sudah dipesan di bulan tertentu. Anda mungkin tidak dapat melakukan perpanjangan bila ingin tinggal dalam jangka waktu yang lama.";
}
?>
<style>
#myMap {
  height: 350px;
  width: 100%;
}
#description {
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
}
#infowindow-content .title {
  font-weight: bold;
}
#infowindow-content {
  display: none;
}
#map #infowindow-content {
  display: inline;
}
.pac-card {
  margin: 10px 10px 0 0;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  background-color: #fff;
  font-family: Roboto;
}
#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
}
.pac-controls {
  display: inline-block;
  padding: 5px 11px;
}
.pac-controls label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}
#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 400px;
}
#pac-input:focus {
  border-color: #4d90fe;
}
#title {
  color: #fff;
  background-color: #4d90fe;
  font-size: 25px;
  font-weight: 500;
  padding: 6px 12px;
}
#target {
  width: 345px;
}
li.selected{
  background-color: #f7d794;
}
</style>


<div class="container">
  <div class="booking-item-details">
    <header class="booking-item-header">
      <div class="row">
        <div class="col-md-7">
          <h2 class="lh1em" id="namaKos"></h2>
          <p class="lh1em text-small" id="alamatKos"> </p>
          <p class="lh1em text-small" ><span id="jarakKos"></span><span><?php echo $detailJarak ?></span></p>
          <h4><?php echo $detailGender ?> <b id="genderKos"></b></h4>
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
                $targetPath = $targetPath.'/'.$_COOKIE['detailKamar'].'_';
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
        <div class="gap gap-small"></div>
        <div class="row">
          <div class="col-md-12">
            <h3><?php echo $detailFacility ?></h3>
          </div>
          <div class="col-md-6">
            <ul class="booking-item-features booking-item-features-expand mb30 clearfix" >
              <li>
                <i id="fasilitasicon1" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-wi-fi"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas1" >WiFi</span>
              </li>
              <li>
                <i id="fasilitasicon2" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-parking"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas2" ><?php echo $detailParkingMotor ?></span>
              </li>
              <li>
                <i id="fasilitasicon8" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-parking"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas8" ><?php echo $detailParkingCar ?></span>
              </li>
              <li>
                <i id="fasilitasicon3" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-restaurant"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas3" ><?php echo $detailRice ?></span>
              </li>
            </ul>
            <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
              <li>
                <i id="fasilitasicon5" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-bar"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas5" ><?php echo $detailWater ?></span>
              </li>
              <li>
                <i id="fasilitasicon7" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-snowflake"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas7" ><?php echo $detailFridge ?></span>
              </li>
              <li>
                <i id="fasilitasicon6" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-washing-machine"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas6">Laundry</span>
              </li>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
            <li>
              <i id="fasilitasicon10" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-kitchen"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas10" ><?php echo $detailKitchen ?></span>
            </li>
            <li>
              <i id="fasilitasicon11" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-meet"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas11"><?php echo $detailLivingRoom ?></span>
            </li>
            <li>
              <i id="fasilitasicon13" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-sun"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas13"><?php echo $detailDryRoom ?></span>
            </li>
            <li>
              <i  id="fasilitasicon4" style="background-color: rgba(0, 0, 0, 0.3);" class="fa fa-key"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas4" ><?php echo $detail24Hour ?></span>
            </li>
          </ul>
          <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
            <li>
              <i id="fasilitasicon9" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-shower"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas9" ><?php echo $detailHotWater ?></span>
            </li>
            <li>
              <i id="fasilitasicon12" style="background-color: rgba(0, 0, 0, 0.3);" class="fa fa-spoon"></i><span class="booking-item-feature-title" style="text-decoration: line-through;" id="fasilitas12" ><?php echo $detailDiningRoom ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="gap gap-small"></div>
  <div class="row">
    <div class="col-md-12">
      <p id="deskripsiKos"></p>
    </div>
  </div>
  <div id="myMap"></div>
  <div class="gap gap-small"></div>
  <h3><?php echo $detailChoose ?></h3>
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
  <div class="modal fade" id="myModalNota" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $detailConfirmation ?></h4>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="row">

              <div class="col-sm-12">
                <h5><?php echo $detailPilihKamar?></h5>
                <ul id="modalNotaBody" class="nav nav-pills">
                </ul>
              </div>
              <div id="modalLamaPesan" >
                <div class="col-sm-12">
                  <div class="booking-item-dates-change">
                    <div class="input-daterange">
                      <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                        <label><b><?php echo $detailEnter ?></b><b style="color:#E74C3C"> <?php echo $detailDate ?></b></label>
                        <input class="date-pick form-control" type="text" onchange=" changeDurasi(this.value)" />
                      </div>
                    </div>
                    <label class="control-label"><b><?php echo $detailDalamBulan ?> </b></label>
                    <input value="3" type="number" min="3" max="12" class="form-control" name="pesan" id="pesan" required placeholder="jumlah bulan" onchange="lamapemesanan = this.value"/>

                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button data-toggle="modal" id="modalSubmitKamar" data-target="#myModal" type="button" class="btn btn-primary pull-right" onclick="updateNota()"><?php echo $detailSubmit ?></button> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $detailCancel ?></button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Nota-->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $detailConfirmation ?></h4>
      </div>
      <div class="modal-body">
        <div>
          <div class="booking-item-payment">
            <header class="clearfix">
              <a class="booking-item-payment-img">
                <img id="modalImage" src=""/>
              </a>
              <h5 id="modalNamaKos" class="booking-item-payment-title"> Kos Semangka 5</h5>
              <p id="modalNamaKamarDetail" class="booking-item-payment-title"></p>
              <small id="modalAlamatKos" ><?php echo $detailAddress ?> jl. Semangka 5 Malang</small><br>
              <small id="modalGender" ><?php echo $detailGender ?> jl. Semangka 5 Malang</small><br>
            </header>
            <ul class="booking-item-payment-details">
              <li>
                <h5><?php echo $detailBookedby ?> </h5>
                <p id="modalMahasiswa"><b>Joni Jono</b></p>
              </li>
              <li>
                <h5><?php echo $detailEnter ?></h5>
                <p id="modalTanggal"><b>32 Desember 2017</b></p>
              </li>
              <li>
                <h5><?php echo $detailDuration ?></h5>
                <p id="modalDuration"><b></b></p>
              </li>
              <li>
                <h5><?php echo $detailDetail ?></h5>
                <ul class="booking-item-payment-price">
                  <li>
                    <p id="modalKamar" class="booking-item-payment-price-title"></p>
                    <p id="modalHarga" class="booking-item-payment-price-amount"><small></small>
                    </p>
                  </li>
                </ul>
              </li>
            </ul>
            <p  class="booking-item-payment-total"><?php echo $detailTotal ?><span id="modalTotal"> </span> <span style="font-size: 12pt; margin-left:6px;" id="detailmonth"><?php echo $detailMonth1 ?></span>
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $detailCancel ?></button>
        <button type="button" id="submit" class="btn btn-primary" data-submit="modal" onclick="confirmBooking()"><?php echo $detailSubmit ?></button>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qZVw-xIAgesHbsUvhOi8zBX-TaM0cMM"></script>
<script>
  var tanggalMasuk = null;
  var tanggalAkhir = null;
  var bookKamar = null;
  var lamapemesanan = 3;
  var responseGetKamar= null;
  var hargaKamar = null;
  var vakum = '';
  var map;
  var myLatlng = new google.maps.LatLng(-7.957260,112.589052);
  var infowindow = new google.maps.InfoWindow();
  var directionsService = new google.maps.DirectionsService();
  function initialize(){
    var mapOptions = {
      zoom: 18,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("myMap"), mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  window.onload = function() {


    var urls='getdetail/'+getCookie("detailKamar");
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'get',
      dataType: "json",
      success: function (response) {
        responseGetKamar = response;
        $('#namaKos').html(response.nama_kos);
        $('#modalNamaKos').html('<?php echo $detailNamakamar ?>'+response.nama_kos);
        $('#alamatKos').html(response.alamat);
        $('#modalAlamatKos').html('<?php echo $detailAddress ?>'+response.alamat);
        $('#hargaKos').html(response.harga);
        $('#deskripsiKos').html(response.deskripsi_kos);
        $('#genderKos').html(response.gender_kos);
        $('#jarakKos').html((Math.round(response.distance/ 100)/10)+" km ");
        $('#modalGender').html('<?php echo $detailGender ?>'+response.gender_kos);
        var fas = response.fasilitas_kos;
        var res = fas.split(",");
        for (var i = 0; i < res.length; i++) {
          if ("WiFi"==res[i]) {
            $('#fasilitasicon1').removeAttr('style');
            $('#fasilitas1').css('text-decoration','none');
          }
          if ("Parkir Motor"==res[i]) {
            $('#fasilitasicon2').css('background-color','');
            $('#fasilitas2').css('text-decoration','none');
          }
          if ("Nasi Putih"==res[i]) {
            $('#fasilitasicon3').css('background-color','');
            $('#fasilitas3').css('text-decoration','none');
          }
          if ("Kunci 24 Jam"==res[i]) {
            $('#fasilitasicon4').css('background-color','');
            $('#fasilitas4').css('text-decoration','none');
          }
          if ("Air Panas"==res[i]) {
            $('#fasilitasicon5').css('background-color','');
            $('#fasilitas5').css('text-decoration','none');
          }
          if ("Laundry"==res[i]) {
            $('#fasilitasicon6').css('background-color','');
            $('#fasilitas6').css('text-decoration','none');
          }
          if ("Kulkas"==res[i]) {
            $('#fasilitasicon7').css('background-color','');
            $('#fasilitas7').css('text-decoration','none');
          }
          if ("Parkir Mobil"==res[i]) {
            $('#fasilitasicon8').css('background-color','');
            $('#fasilitas8').css('text-decoration','none');
          }
          if ("Air Panas"==res[i]) {
            $('#fasilitasicon9').css('background-color','');
            $('#fasilitas9').css('text-decoration','none');
          }
          if ("Dapur"==res[i]) {
            $('#fasilitasicon10').css('background-color','');
            $('#fasilitas10').css('text-decoration','none');
          }
          if ("Ruang Tamu"==res[i]) {
            $('#fasilitasicon11').css('background-color','');
            $('#fasilitas11').css('text-decoration','none');
          }
          if ("Ruang Makan"==res[i]) {
            $('#fasilitasicon12').css('background-color','');
            $('#fasilitas12').css('text-decoration','none');
          }
          if ("Ruang Jemur"==res[i]) {
            $('#fasilitasicon13').css('background-color','');
            $('#fasilitas13').css('text-decoration','none');
          }
        }
        var KosLatlng = new google.maps.LatLng(response.latitude,response.longitude);
        var directionsRequest = {
          origin: response.latitude+","+response.longitude,
          destination: "-7.957260,112.589052",
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: map,
                directions: response
              });
              var infowindowDestination = new google.maps.InfoWindow({
                position: myLatlng,
                content: "Ma Chung"
              });
              infowindowDestination.open(map);
              var infowindowOrigin = new google.maps.InfoWindow({
                position: KosLatlng,
                content: "<?php echo $labelKosMap ?>"
              });
              infowindowOrigin.open(map);
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
          );
      }
    });
$.ajax({
  url:"<?php echo base_url() ?>index.php/"+urls+"/kamar",
  type: 'get',
  dataType: "json",
  success: function (response) {
    responseGetKamar = response;
    for (var i = 0; i < response.length; i++) {
      var a = i;
      var fas1 = '';
      var fas2 = '';
      var fas3 = '';
      var fas4 = '';
      var fas5 = '';
      var fas6 = '';
      var fas7 = '';
      var kamar = '';
      var jumlahKamar = response[i].kamardetail.length;
      var fas = response[i].fasilitas_kamar;
      var res = fas.split(",");
      for (var j = 0; j < res.length; j++) {
        if (res[j]== "Lemari") {
          var fas1= '</li>'+
          '<li rel="tooltip" data-placement="top" title="Lemari Kayu"><i id="fasilitas_kamar1" class="fa fa-archive" ></i><span class="booking-item-feature-sign"><?php echo $detailWardrobe ?></span>'+
          '</li>';
        }
        if (res[j]== "AC") {
          var fas2 =
          '<li rel="tooltip" data-placement="top" title="AC"><i id="fasilitas_kamar2" class="im im-air" ></i><span class="booking-item-feature-sign" >AC</span>'+
          '</li>';
        }
        if (res[j] == "KM Dalam") {
          var fas3 =
          '<li rel="tooltip" data-placement="top" title="KM Dalam"><i id="fasilitas_kamar3" class="im im-bathtub" ></i><span class="booking-item-feature-sign" style="top:37px;"><?php echo $detailToilet ?></span>'+
          '</li>';
        }
        if (res[j] == "Kipas Angin") {
          var fas4 =
          '<li rel="tooltip" data-placement="top" title="Kipas"><i id="fasilitas_kamar4" class="im im-air" ></i><span class="booking-item-feature-sign" ><?php echo $detailFan ?></span>'+
          '</li>';
        }
        if (res[j] == "Meja") {
          var fas5 =
          '<li rel="tooltip" data-placement="top" title="Meja"><i id="fasilitas_kamar5" class="fa fa-archive" ></i><span class="booking-item-feature-sign" ><?php echo $detailTable ?></span>'+
          '</li>';
        }
        if (res[j] == "Kursi") {
          var fas6 =
          '<li rel="tooltip" bookmark-placement="top" title="Kursi"><i id="fasilitas_kamar6" class="fa fa-bookmark" ></i><span class="booking-item-feature-sign" ><?php echo $detailChair ?></span>'+
          '</li>';
        }
        if (res[j] == "Twin Bed") {
          var fas7 =
          '<li rel="tooltip" data-placement="top" title="Twin Bed"><i id="fasilitas_kamar7" class="im im-bed" ></i><span class="booking-item-feature-sign" style="top:37px;"><?php echo $detailTwinBed ?></span>'+
          '</li>';
        }
        if (response[i].kuota > 0) {
          kamar =
          '<li>'+
          '<a class="booking-item">'+
          '<div class="row">'+
          '<div class="col-md-3">'+
          '<img src="<?php echo base_url(); ?>photos/'+getCookie("detailKamar")+'_'+response[i].id_kamar+'_slot1.jpg" alt="Image Alternative text" title="Gambar Kamar" />'+
          '</div>'+
          '<div class="col-md-4">'+
          '<h5 class="booking-item-title" style="font-weight: 500;"><?php echo $detailNamakamar ?>'+response[i].nama_kamar+'</h5>'+
          '<h6 class="booking-item-title" style="font-weight: 500;"><?php echo $detailLeft ?>'+response[i].kuota+'</h6>'+
          '<ul class="booking-item-features booking-item-features-sign clearfix">'+
          '<li rel="tooltip" data-placement="top" title="Spring Bed"><i class="im im-bed" "></i><span class="booking-item-feature-sign">x 1</span>'+
          '</li>'+
          '<li rel="tooltip" data-placement="top" title="Luas Kamar"><i class="im im-width" ></i><span class="booking-item-feature-sign">'+response[i].panjang+'x'+response[i].lebar+'</span>'+fas1+fas2+fas3+fas4+fas5+fas6+fas7+
          '</ul>'+
          '</div>'+
          '<div class="col-md-5">'+
          '<div class="pull-right">'+
          '<span class="booking-item-price">Rp '+(response[i].harga).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+',-</span><span>/<?php echo $detailperMonth ?></span>'+
          '</div>'+
          '<br><br><br><br>'+
          '<button data-toggle="modal" data-target="#myModalNota" type="button" class="btn btn-primary pull-right" onclick="modalNota(&quot;'+a+'&quot;,&quot;'+jumlahKamar+'&quot;,&quot;'+response[i].harga+'&quot;,&quot;'+response[i].nama_kamardetail+'&quot;,&quot;'+response[i].id_kamar+'&quot;)"><b><?php echo $detailOrdernow ?></b></button>'+
          '</div>'+
          '</div>'+
          '</a>'+
          '</li>';
        }else{
          kamar =
          '<li>'+
          '<a class="booking-item">'+
          '<div class="row">'+
          '<div class="col-md-3">'+
          '<img src="<?php echo base_url(); ?>photos/'+getCookie("detailKamar")+'_'+response[i].id_kamar+'_slot1.jpg" alt="Image Alternative text" title="Gambar Kamar" />'+
          '</div>'+
          '<div class="col-md-4">'+
          '<h5 class="booking-item-title" style="font-weight: 500;"><?php echo $detailNamakamar ?>'+response[i].nama_kamar+'</h5>'+
          '<h6 class="booking-item-title" style="font-weight: 500;"><?php echo $detailLeft ?><?php echo $detailAvailable ?></h6>'+
          '<ul class="booking-item-features booking-item-features-sign clearfix">'+
          '<li rel="tooltip" data-placement="top" title="Spring Bed"><i class="im im-bed" "></i><span class="booking-item-feature-sign">x 1</span>'+
          '</li>'+
          '<li rel="tooltip" data-placement="top" title="Luas Kamar"><i class="im im-width" ></i><span class="booking-item-feature-sign">'+response[i].panjang+'x'+response[i].lebar+'</span>'+fas1+fas2+fas3+fas4+fas5+fas6+fas7+
          '</ul>'+
          '</div>'+
          '<div class="col-md-5">'+
          '<div class="pull-right">'+
          '<span class="booking-item-price">Rp '+(response[i].harga).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+',-</span><span>/<?php echo $detailperMonth ?></span>'+
          '</div>'+
          '<br><br><br><br>'+
          '<button data-toggle="modal" data-target="#myModalNota" type="button" class="btn btn-primary pull-right" onclick="modalNota(&quot;'+a+'&quot;,&quot;'+jumlahKamar+'&quot;,&quot;'+response[i].harga+'&quot;,&quot;'+response[i].nama_kamardetail+'&quot;,&quot;'+response[i].id_kamar+'&quot;)"><b><?php echo $detailOrdernow ?></b></button>'+
          '</div>'+
          '</div>'+
          '</a>'+
          '</li>';
        }
      }
      $('#bookList').append(kamar);
    }
  }
});
}
function modalNota(index,jumlah,harga,namaKamar,idKamar){
  $('#modalLamaPesan').hide();
  $('#modalSubmitKamar').hide();
  var blnTutup = null;
  $('#modalNotaBody').html('');
  for (var i = 0; i < jumlah; i++) {
    if (responseGetKamar[index].kamardetail[i].bulan_tutup == null) {
      vakum = 0;
      blnTutup = "<b style='color:#03A678;'><?php echo $alwaysAvailable ?></b>";
    }else{
      vakum = 1;
      blnTutup = "<b style='color:#D35400;'> Dipesan "+ responseGetKamar[index].kamardetail[i].bulan_tutup + "</b>";
    }


    eachRoom =
    '<li class="booking-item col-sm-5 lists" onclick="setActive(this); namaMhs(&quot;'+harga+'&quot;,&quot;'+namaKamar+'&quot;,&quot;'+idKamar+'&quot;,&quot;'+tanggalMasuk+'&quot;,&quot;'+responseGetKamar[index].kamardetail[i].id_kamardetail+'&quot;,&quot;'+vakum+'&quot;,&quot;'+responseGetKamar[index].kamardetail[i].nama_kamardetail+'&quot;); setdate(&quot;'+responseGetKamar[index].kamardetail[i].bulan_tutup+'&quot;,&quot;'+responseGetKamar[index].kamardetail[i].bulan_buka+'&quot;); tanggalAkhir=&quot;'+responseGetKamar[index].kamardetail[i].bulan_tutup+'&quot;;   $(&quot;#modalLamaPesan&quot;).show(); $(&quot;#modalSubmitKamar&quot;).show(); changeDurasi(&quot;'+responseGetKamar[index].kamardetail[i].bulan_buka+'&quot;)"><input type="hidden" id="hid" value="'+idKamar+'"><h5><?php echo $detailKamarDetail ?>'+responseGetKamar[index].kamardetail[i].nama_kamardetail+'</h5>'+
    
    '<h6><span><?php echo $detailAvailableFrom ?><span><span>'+responseGetKamar[index].kamardetail[i].bulan_buka+'</span></h6>'+
    '<h6><span><?php echo $detailAvailableUntil ?><span><span>'+blnTutup+'</span></h6></li>'+
    '</ul>';

    $('#modalNotaBody').append(eachRoom);
  }
}

function setActive(activeElement){
  $('.lists').removeClass('selected');
  $(activeElement).addClass('selected');
  
}

function changeDurasi(masuk){
  tanggalMasuk = masuk;
  if (tanggalAkhir != null && tanggalAkhir != "null" ) {

    var date1 = new Date(tanggalMasuk);
    var date2 = new Date(tanggalAkhir);

    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    var diffMonth = Math.ceil(timeDiff / (1000 * 3600 * 24 * 30 ))-1;
    if ($('#pesan').val() > diffMonth) {
      $('#pesan').val(diffMonth);
    }
    $('#pesan').prop('max',diffMonth);
    // alert(diffMonth);
  }else{
    $('#pesan').prop('max',12);
  }
  lamapemesanan = $('#pesan').val();

}

function setdate(BulanTutup,BulanBuka){
  var start = new Date(BulanBuka);
  if (BulanTutup == "null") {
    var d = new Date(BulanBuka);
    d.setMonth(d.getMonth() + 9);
    
  }else{
    var d = new Date(BulanTutup);
    d.setMonth(d.getMonth() - 3);  
  }
  
  
  $('input.date-pick').datepicker('setStartDate', start);
  $('input.date-pick').datepicker('setDate', start);

  $('input.date-pick').datepicker('setEndDate', d);

}

function namaMhs(harga,namaKamar,idKamar,tglMasuk,idKamarDetail,vakums,namaKamarDetail){
  myString = getCookie('frontNama');
  $('#modalMahasiswa').html(myString.replace(/\+/g, " "));
  $('#modalHarga').html('Rp '+harga.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+',- /<?php echo $detailperMonth ?>');
  $('#modalKamar').html("<?php echo $detailKamarDetail ?>"+namaKamarDetail);
  $('#modalNamaKamarDetail').html("<?php echo $detailKamarDetail ?>"+namaKamarDetail);
  bookKamar = idKamar;
  id_kDetail = idKamarDetail;
  vakum = vakums;
  hargaKamar = harga;
  
  
  $("#modalImage").attr("src",'<?php echo base_url(); ?>photos/'+getCookie("detailKamar")+'_'+idKamar+'_slot1.jpg');
}
function updateNota(){
  if (vakum=="1") {
    alert("<?php echo $warningVakum ?>");
  }
  $('#modalDuration').html($('#pesan').val()+"<?php echo $detailModalBulan ?>");
  $('#modalTanggal').html(tanggalMasuk);
  $('#detailmonth').html("<?php echo $detailMonth1 ?> "+$('#pesan').val()+" <?php echo $detailMonth2 ?>");
  $('#modalTotal').html('Rp '+(hargaKamar*lamapemesanan).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
}
function confirmBooking(){
  var buttonname = $("#submit").html();
  $("#submit").html("<?php echo $detailWait ?>");
  $("#submitButton").prop("disabled",true);
  var urls='order/'+getCookie('frontCookie')+'';
// alert(urls);
$.ajax({
  url:"<?php echo base_url() ?>index.php/"+urls,
  type: 'POST',
  data:
  {
    'idkos':getCookie('detailKamar') ,
    'idkamar': bookKamar,
    'idkamardetail' : id_kDetail,
    'tanggalmasuk': tanggalMasuk,
    'vakum': vakum,
    'lamapemesanan': lamapemesanan
  }
  ,
  success: function(response){
    if (response == 1) {
      alert("<?php echo $detailSuccess ?>");
      $("#submit").html(buttonname);
      window.location.href = 'waitconfirmation';
      
      
    }else{
      alert("<?php echo $detailFfailed ?>");
      $("#submitButton").prop("disabled",false);
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