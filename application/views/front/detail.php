
<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
 $detailGender = 'Gender : ';
 $detailOrder = 'Order Detail :';
 $detailEnter = 'Enter Date';
 $detailFacility = 'Facility';
 $detailParking = 'Parking';
 $detailRice = 'Rice';
 $detailWater = 'Water';
 $detailHour = '24 Hours';
 $detailKitchen = 'Kitchen';
 $detailBathroom = 'Bathroom';
 $detailWardrobe = 'Wardrobe';
 $detailFan = 'Fan';
 $detailChoose = 'Choose Your Room';
 $detailNamakamar = 'Name : ';
 $detailAddress = 'Address : ';
 $detailLeft = 'Room Left : ';
 $detailperMonth = ' month';
 $detailMonth = '      ( payment for 3 months )';
 $detailOrdernow = 'Order Now';
 $detailConfirmation = 'Booking Confirmation';
 $detailBookedby = 'Booked by : ';
 $detailDetail = 'Booking Details : ';
 $detailTotal = 'Total : ';
 $detailSubmit = 'Submit';
 $detailCancel = 'Cancel';
 $detailWait = 'Wait...';
 $detailFfailed = 'Order Failed, maybe you have another order';
$detailDate = '      ( for 3 months )';
 $labelKosMap = "Dorm Location";


}else{
  $detailGender = 'Jenis Kelamin :';    
  $detailOrder = 'Detil Pemesanan :';
  $detailEnter = 'Tanggal Masuk';
  $detailFacility = 'Fasilitas Kos';
  $detailParking = 'Parkir';
  $detailRice = 'Nasi';
  $detailWater = 'Air Putih';
  $detailHour = '24 Jam';
  $detailKitchen = 'Dapur';
  $detailBathroom = 'KM Dalam';
  $detailWardrobe = 'Lemari';
  $detailFan = 'Kipas';
  $detailChoose = 'Pilih Kamarmu';
  $detailNamakamar = 'Nama : ';
  $detailAddress = 'Alamat : ';
  $detailLeft = 'Sisa Kamar : ';
  $detailperMonth = ' bulan';
  $detailMonth = '      ( pembayaran untuk 3 bulan )';
  $detailDate = '      ( untuk 3 bulan )';
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


</style>

<div class="container">
  <div class="booking-item-details">
    <header class="booking-item-header">
      <div class="row">
        <div class="col-md-7">
          <h2 class="lh1em" id="namaKos">Kos Semangka 5</h2>
          <p class="lh1em text-small" id="alamatKos"><i class="fa fa-map-marker"></i> Jl. Semangka 5, Bareng, Kawi, Malang</p>
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
              <h3><?php echo $detailOrder ?></h3>
              <div class="row">

                <div class="col-md-8">
                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight" ></i>
                    <label><b><?php echo $detailEnter ?></b><b style="color:#E74C3C"> <?php echo $detailDate ?></b></label>
                    <input data-date-format="dd/mm/yyyy" class="datepicker form-control" type="text" onchange="tanggalMasuk = this.value" />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="gap gap-small"></div>
        <div class="row">
          <div class="col-md-12">
            <h3><?php echo $detailFacility ?></h3>
          </div>
          <div class="col-md-4">
            <ul class="booking-item-features booking-item-features-expand mb30 clearfix" >
              <li>
                <i id="fasilitasicon1" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-wi-fi"></i><span class="booking-item-feature-title" id="fasilitas1" >WiFi</span>
              </li>
              <li>
                <i id="fasilitasicon2" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-parking"></i><span class="booking-item-feature-title" id="fasilitas2" ><?php echo $detailParking ?></span>
              </li>
              <li>
                <i id="fasilitasicon3" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-restaurant"></i><span class="booking-item-feature-title" id="fasilitas3" ><?php echo $detailRice ?></span>
              </li>
              <li>
                <i  id="fasilitasicon4" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-air"></i><span class="booking-item-feature-title" id="fasilitas4" >AC</span>
              </li>

              <li>
                <i id="fasilitasicon5" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-kitchen"></i><span class="booking-item-feature-title" id="fasilitas5" ><?php echo $detailWater ?></span>
              </li>

            </ul>
          </div>
          <div class="col-md-4">
            <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
              <li>
                <i id="fasilitasicon6" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-washing-machine"></i><span class="booking-item-feature-title" id="fasilitas6">Laundry</span>
              </li>
              <li>
                <i id="fasilitasicon7" style="background-color: rgba(0, 0, 0, 0.3);" class="im im-bathtub"></i><span class="booking-item-feature-title" id="fasilitas7" ><?php echo $detailBathroom ?></span>
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
  

  <!-- Modal -->
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
              <p  class="booking-item-payment-total"><?php echo $detailTotal ?><span id="modalTotal"> </span> <span style="font-size: 12pt; margin-left:6px;"><?php echo $detailMonth ?></span>

              </p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="submit" class="btn btn-primary" data-submit="modal" onclick="confirmBooking()"><?php echo $detailSubmit ?></button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $detailCancel ?></button>
        </div>
      </div>

    </div>
  </div>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qZVw-xIAgesHbsUvhOi8zBX-TaM0cMM"></script>

<script>
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
    var tanggalMasuk = null;
    var bookKamar = null;


    var urls='getdetail/'+getCookie("detailKamar");

    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'get',
      dataType: "json",
      success: function (response) {


        $('#namaKos').html(response.nama_kos);
        $('#modalNamaKos').html('<?php echo $detailNamakamar ?>'+response.nama_kos);

        $('#alamatKos').html(response.alamat);
        $('#modalAlamatKos').html('<?php echo $detailAddress ?>'+response.alamat);

        $('#hargaKos').html(response.harga);
        $('#deskripsiKos').html(response.deskripsi_kos);
        $('#genderKos').html(response.gender_kos);
        $('#modalGender').html('<?php echo $detailGender ?>'+response.gender_kos);
        var fas = response.fasilitas_kos;
        var res = fas.split(",");
        for (var i = 0; i < res.length; i++) {
          if ($("#fasilitas1").text()==res[i]) {
            $('#fasilitasicon1').removeAttr('style');
          }
          if ($("#fasilitas2").text()==res[i]) {
            $('#fasilitasicon2').css('background-color','');
          }
          if ($("#fasilitas3").text()==res[i]) {
            $('#fasilitasicon3').css('background-color','');
          }
          if ($("#fasilitas4").text()==res[i]) {
            $('#fasilitasicon4').css('background-color','');
          }
          if ($("#fasilitas5").text()==res[i]) {
            $('#fasilitasicon5').css('background-color','');
          }
          if ($("#fasilitas6").text()==res[i]) {
            $('#fasilitasicon6').css('background-color','');
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

        for (var i = 0; i < response.length; i++) {


          var fas1 = '';
          var fas2 = '';
          var fas3 = '';
          var fas4 = '';
          var kamar = '';


          var fas = response[i].fasilitas_kamar;
          var res = fas.split(",");
          for (var j = 0; j < res.length; j++) {

            if (res[j]== "Lemari") {
                  // $('#fasilitas_kamar1').css('background-color','');
                  var fas1= '</li>'+
                  '<li rel="tooltip" data-placement="top" title="Lemari Kayu"><i id="fasilitas_kamar1" class="fa fa-archive" ></i><span class="booking-item-feature-sign"><?php echo $detailWardrobe ?></span>'+
                  '</li>';
                }


                if (res[j]== "AC") {
                  // $('#fasilitas_kamar2').css('background-color','');
                  var fas2 = 
                  '<li rel="tooltip" data-placement="top" title="AC"><i id="fasilitas_kamar2" class="im im-air" ></i><span class="booking-item-feature-sign" >AC</span>'+
                  '</li>';

                }

                if (res[j] == "KM Dalam") {
                  // $('#fasilitas_kamar3').css('background-color','');
                  var fas3 = 
                  '<li rel="tooltip" data-placement="top" title="KM Dalam"><i id="fasilitas_kamar3" class="im im-bathtub" ></i><span class="booking-item-feature-sign" ></span>'+
                  '</li>';
                }
                if (res[j] == "Kipas Angin") {
                  var fas4 = 
                  '<li rel="tooltip" data-placement="top" title="Kipas"><i id="fasilitas_kamar4" class="im im-air" ></i><span class="booking-item-feature-sign" ><?php echo $detailFan ?></span>'+
                  '</li>';
                }

                if (response[i].kuota != 0) {
                  kamar = 
                  '<li>'+
                  '<a class="booking-item">'+
                  '<div class="row">'+
                  '<div class="col-md-3">'+
                  '<img src="<?php echo base_url(); ?>photos/'+getCookie("detailKamar")+'/'+response[i].id_kamar+'/slot1.jpg" alt="Image Alternative text" title="Gambar Kamar" />'+
                  '</div>'+
                  '<div class="col-md-4">'+
                  '<h5 class="booking-item-title" style="font-weight: 500;"><?php echo $detailNamakamar ?>'+response[i].nama_kamar+'</h5>'+
                  '<h6 class="booking-item-title" style="font-weight: 500;"><?php echo $detailLeft ?>'+response[i].kuota+'</h6>'+
                  '<ul class="booking-item-features booking-item-features-sign clearfix">'+
                  '<li rel="tooltip" data-placement="top" title="Spring Bed"><i class="im im-bed" "></i><span class="booking-item-feature-sign">x 1</span>'+
                  '</li>'+
                  '<li rel="tooltip" data-placement="top" title="Luas Kamar"><i class="im im-width" ></i><span class="booking-item-feature-sign">'+response[i].panjang+'x'+response[i].lebar+'</span>'+fas1+fas2+fas3+fas4+
                  '</ul>'+
                  '</div>'+
                  '<div class="col-md-5">'+
                  '<div class="pull-right">'+
                  '<span class="booking-item-price">Rp '+(response[i].harga).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+',-</span><span>/<?php echo $detailperMonth ?></span>'+
                  '</div>'+
                  '<br><br><br><br>'+
                  '<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary pull-right" onclick="namaMhs(&quot;'+response[i].harga+'&quot;,&quot;'+response[i].nama_kamar+'&quot;,&quot;'+response[i].id_kamar+'&quot;)"><b><?php echo $detailOrdernow ?></b></button>'+
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

function namaMhs(x,y,z){
  myString = getCookie('frontNama');
  $('#modalMahasiswa').html(myString.replace(/\+/g, " "));
  $('#modalHarga').html('Rp '+x.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+',- /<?php echo $detailperMonth ?>');
  $('#modalKamar').html(y);
  bookKamar = z;
  $('#modalTotal').html('Rp '+(x*3).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
  $("#modalImage").attr("src",'<?php echo base_url(); ?>photos/'+getCookie("detailKamar")+'/'+z+'/slot1.jpg');
  $('#modalTanggal').html(tanggalMasuk);
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
       'idkamar': bookKamar ,
       'tanggalmasuk': tanggalMasuk ,
     }
     ,
     success: function(response){
      if (response == 1) {
        $("#submit").html(buttonname);
        window.location.href = 'payment';

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