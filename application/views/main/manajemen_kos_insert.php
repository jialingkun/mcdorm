<style>
#myMap {
 height: 350px;
 width: 680px;
}

html, body {
  height: 100%;
  margin: 0;
  padding: 0;
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
<!-- Page -->
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Insert Data Kos</h1>
  </div>
  <div class="page-content">
    <div class="panel">
     <div class="panel-heading">
      <h3 class="panel-title"><b>Data Kos</b></h3>
    </div>
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="col-sm-12" style="margin-bottom: 5%;">
          <h4>Upload Foto Kos</h4>
          <hr>
          <h5><b>*Drag kembali untuk mengganti foto</b></h5>
          <!-- DROPZONE -->
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot1/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot2/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot3/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot4/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot5/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot6/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot7/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot8/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot9/temp" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot10/temp" class="dropzone" id="my-awesome-dropzone"></form>
          
          
        </div>
        <div class="col-md-12">
          <!-- Example Basic Form -->
          <div class="example-wrap">
            <div class="example">
              <form id="insertData" onsubmit="insertDataKos()">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Username</b></label>
                    <input type="text" class="form-control" name="id" pattern="^[0-9a-zA-Z_-]+$" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Gender Kos</b></label>
                    <div class="col-sm-12">
                      <div class="radio-inline">
                        <label><input type="radio" name="gender" value="pria" checked="true">Pria</label>
                      </div>
                      <div class="radio-inline">
                        <label><input type="radio" name="gender" value="wanita">Wanita</label>
                      </div>
                      <div class="radio-inline">
                        <label><input type="radio" name="gender" value="campuran">Campuran</label>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Nama Tempat</b></label>
                    <input type="text" class="form-control" name="nama" required/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>No. Telpon</b></label>
                    <input type="text" class="form-control" name="notelp" required pattern="[0-9+\s]+" />
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-sm-12">
                  <label class="control-label"><b>Alamat</b></label>
                  <input type="text" class="form-control" name="alamat" required/>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="control-label"><b>Fasilitas</b></label>
                  <div class="form-group">
                    <div class="col-sm-2">

                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="WiFi"/>
                     <label for="inputUnchecked">WiFi</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary" name="fasilitas[]" value="Parkir"/>
                     <label for="inputUnchecked">Parkir</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Nasi"/>
                     <label for="inputUnchecked">Nasi</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Air Putih"/>
                     <label for="inputUnchecked">Air Putih</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="24Jam"/>
                     <label for="inputUnchecked">24 Jam</label>
                   </div>
                   <div class="col-sm-2">
                     <input type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Laundry"/>
                     <label for="inputUnchecked">Laundry</label>
                   </div>
                 </div>
               </div>
             </div>
             <div class="form-group">
              <label class="control-label"><b>Deskripsi</b></label>
              <textarea class="form-control" rows="5" name="deskripsi" required></textarea>
              <br>
              <input id="pac-input" class="controls" type="text" placeholder="Search Box" onkeypress="if ( event.which == 13 ) return false;">
              <div id="myMap"></div><br>
              <input type="text" class="form-control" id="latitude" placeholder="Latitude" name="latitude" />
              <input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude"/>
            </div>
            <div class="form-group pull-right" style="margin-top: 25px;">
              <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md" onclick="">
                <span><i class="icon fa-plus"></i> &nbsp<b id="submit">Tambahkan Data</b></span>
              </button>
              <a href="manajemen_kos_data">
                <button type="button" class="btn btn-animate btn-animate-side btn-primary btn-md">
                  <span><i class="icon fa-mail-reply"></i> &nbsp<b>Kembali</b></span>
                </button>
              </a>
            </div>
          </form>

        </div>

      </div>
      <!-- End Example Basic Form -->
    </div>
  </div>

</div>
</div>
</div>
</div>
<!-- End Page -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qZVw-xIAgesHbsUvhOi8zBX-TaM0cMM&libraries=places"></script>


<script>

  function insertDataKos() {

    var urls='main/insertkos';
    var dataString = $("#insertData").serialize();
    var buttonname = $("#submit").html();
    $("#submit").html("Tunggu...");
    $("#submitButton").prop("disabled",true);

    // alert('klik');
    $.ajax({
      url:"<?php echo base_url() ?>index.php/"+urls,
      type: 'POST',
      data:dataString,
      success: function(response){
        if (response == 1) {
          alert("Berhasil menambah data");
          window.location.href = 'manajemen_kos_data';
          $("#submit").html(buttonname);
        }else{
          alert("Gagal menambah data");
          $("#submit").html(buttonname);
          $("#submitButton").prop("disabled",false);
        }
      }
    }); 
  }


  var map;
  var marker;
  var myLatlng = new google.maps.LatLng(-7.957260,112.589052);
  var geocoder = new google.maps.Geocoder();
  var infowindow = new google.maps.InfoWindow();
  // var input = document.getElementById('pac-input');
  // var searchBox = new google.maps.places.SearchBox(input);
  function initialize(){
    var mapOptions = {
      zoom: 18,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

    marker = new google.maps.Marker({
      map: map,
      position: myLatlng,
      draggable: true 
    });     

    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          $('#address').val(results[0].formatted_address);
          $('#latitude').val(marker.getPosition().lat());
          $('#longitude').val(marker.getPosition().lng());
          infowindow.setContent(results[0].formatted_address);
          infowindow.open(map, marker);
        }
      }
    });


    google.maps.event.addListener(marker, 'dragend', function() {

      geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $('#address').val(results[0].formatted_address);
            $('#latitude').val(marker.getPosition().lat());
            $('#longitude').val(marker.getPosition().lng());
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
          }
        }
      });
    });

// Create the search box and link it to the UI element.

// Create the search box and link it to the UI element.
var input = document.getElementById('pac-input');
var searchBox = new google.maps.places.SearchBox(input);
map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }


          // For each place, get the icon, name and location.
 
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();  

            var newLatLng = new google.maps.LatLng(latitude, longitude);
            marker.setPosition(newLatLng);
            map.panTo(newLatLng);
            geocoder.geocode({'latLng': newLatLng }, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                  $('#address').val(results[0].formatted_address);
                  $('#latitude').val(marker.getPosition().lat());
                  $('#longitude').val(marker.getPosition().lng());
                  infowindow.setContent(results[0].formatted_address);
                  infowindow.open(map, marker);
                }
              }
            });
          });
          // map.fitBounds(bounds);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
