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
    <h1 class="page-title">Edit Data Kos</h1>
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
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot1/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone">
          </form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot2/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone" ></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot3/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot4/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot5/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot6/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot7/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot8/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot9/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          <form action="<?php echo base_url() ?>index.php/main/uploadimage/slot10/<?php echo $_COOKIE['editDataKos'] ?>" class="dropzone" id="my-awesome-dropzone"></form>
          
          
        </div>
        <div class="col-md-12" >
          <!-- Example Basic Form -->
          <div class="example-wrap" >
            <div class="example">
              <h4>Profil Kos</h4>
              <hr>
              <form id="updateData" onsubmit="insertfunction(event)" >
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Username</b></label>
                    <p  class="form-control" name="id" id="id" > </p>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>Gender Kos</b></label>
                    <div class="col-sm-12">
                      <div class="radio-inline">
                        <label><input  id="gender" type="radio" name="gender" value="pria">Pria</label>
                      </div>
                      <div class="radio-inline">
                        <label><input id="gender" type="radio" name="gender" value="wanita">Wanita</label>
                      </div>
                      <div class="radio-inline">
                        <label><input id="gender" type="radio" name="gender" value="campuran">Campuran</label>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="control-label"><b>Nama Tempat</b></label>
                    <input type="text" class="form-control" name="nama" id="nama"/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><b>No. Telpon</b></label>
                    <input type="text" class="form-control" name="notelp" id="notelp"/>
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-sm-12">
                  <label class="control-label"><b>Alamat</b></label>
                  <input id="alamat" type="text" class="form-control" name="alamat"/>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <label class="control-label"><b>Fasilitas</b></label>
                  <div class="form-group">
                    <div class="col-sm-2">

                     <input id="fasilitas1" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="WiFi"/>
                     <label for="inputUnchecked">WiFi</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas2" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="Parkir Motor"/>
                     <label for="inputUnchecked">Parkir Motor</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas3" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="Parkir Mobil"/>
                     <label for="inputUnchecked">Parkir Mobil</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas4" class="icheckbox-primary" type="checkbox"  name="fasilitas[]" value="Nasi Putih"/>
                     <label for="inputUnchecked">Nasi Putih</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas5" class="icheckbox-primary" type="checkbox" name="fasilitas[]" value="Air Putih"/>
                     <label for="inputUnchecked">Air Putih</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas6" class="icheckbox-primary" type="checkbox"  name="fasilitas[]" value="Kunci 24 Jam"/>
                     <label for="inputUnchecked">Kunci 24 Jam</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas7" class="icheckbox-primary" type="checkbox"  name="fasilitas[]" value="Laundry" />
                     <label for="inputUnchecked">Laundry</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas8" type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Kulkas"/>
                     <label for="inputUnchecked">Kulkas</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas9" type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Air Panas"/>
                     <label for="inputUnchecked">Air Panas</label>
                   </div>
                   <div class="col-sm-2">
                     <input id="fasilitas10" type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Dapur"/>
                     <label for="inputUnchecked">Dapur</label>
                   </div>
                   <div class="col-sm-2">
                     <input  id="fasilitas11" type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Ruang Tamu"/>
                     <label for="inputUnchecked">Ruang Tamu</label>
                   </div>
                   <div class="col-sm-2">
                     <input  id="fasilitas12" type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Ruang Makan"/>
                     <label for="inputUnchecked">Ruang Makan</label>
                   </div>
                   <div class="col-sm-2">
                     <input  id="fasilitas13" type="checkbox" class="icheckbox-primary"  name="fasilitas[]" value="Ruang Jemur"/>
                     <label for="inputUnchecked">Ruang Jemur</label>
                   </div>
                 </div>
               </div>
             </div>
            
           <div class="form-group">
            <label class="control-label"><b>Deskripsi</b></label>
            <textarea id="deskripsi" class="form-control" rows="5" name="deskripsi"></textarea>
            <input id="pac-input" class="controls" type="text" placeholder="Search Box" onkeypress="if ( event.which == 13 ) return false;">

            <br>
            <div id="myMap"></div><br/>
            <input type="hidden" class="form-control" id="latitude" placeholder="Latitude" name="latitude" />
            <input type="hidden" class="form-control" id="longitude" placeholder="Longitude" name="longitude"/>
            <input type="hidden" class="form-control" id="distance" placeholder="Distance" name="distance"/>

          </div>


          <div class="form-group pull-right" style="margin-top: 25px;">
            <button type="submit" id="submitButton" class="btn btn-animate btn-animate-side btn-info btn-md">
              <span><i class="icon fa-exchange"></i> &nbsp<b id="submit">Ubah Data</b></span>
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
<div class="page animsition" style="margin-top: -50px;">
  <div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title"><b>Data Kamar </b><b id="namaKamar"></b > </h3>
        <div id="exampleTableAddToolbar">
          <a href="manajemen_kos_kamar_insert">
            <button class="btn btn-info" type="button">
              <i class="icon fa-plus"></i> <b>Tambah Kamar</b>
            </button>
          </a>
        </div>
        <div class="panel-body">
          <table id="example" class="table table-hover dataTable table-striped width-full" >
            <thead>
              <tr>
                <th>Tipe Kamar</th>
                <th>Harga/Bulan</th>
                <th>Panjang (m)</th>
                <th>lebar (m)</th>
                <th>Kuota</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Tipe Kamar</th>
                <th>Harga/Bulan</th>
                <th>Panjang (m)</th>
                <th>lebar (m)</th>
                <th>Kuota</th>
                <th>Update</th>
                <th>Hapus</th>
              </tr>
            </tfoot>
            <tbody id="tabelKamar">

            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>

  <!-- End Page -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qZVw-xIAgesHbsUvhOi8zBX-TaM0cMM&libraries=places"></script>

  <script>

    var long = null;
    var lat = null;


    var map;
    var marker;
    var myLatlng = new google.maps.LatLng(-1.2159058047717985,113.55818729451255);
    var machungLatlng = new google.maps.LatLng(-7.957260,112.589052);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();

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
            $('#distance').val(getDistance(marker.getPosition(),machungLatlng));

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
                                $('#distance').val(getDistance(marker.getPosition(),machungLatlng));

              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            }
          }
        });
      });

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
                  $('#distance').val(getDistance(marker.getPosition(),machungLatlng));

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





      function berubah(){
        $("#imageslot1").attr("src","<?php echo base_url() ?>photos/<?php echo $_COOKIE['editDataKos'] ?>/slot1.jpg");
      }

      window.onload = function() {
        dataKamar();
        dataKos();
      }  

      function dataKamar(){
  // $('#slot').attr("src","http://localhost/mcdorm/photos/9019/slot1.jpg");


  // $('#id_mahasiswa').val("2") ;
//   document.getElementById("id_mahasiswa").value = '999999';
// alert($('#id_mahasiswa').val());
    // alert( getCookie('editDataKos'));
    var urls='main/getkos/'+getCookie("editDataKos")+"";
      // alert(urls);

      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'get',
        dataType: "json",
        success: function (response) {
          $('#id').html(response.id_kos);
          $('#nama').val(response.nama_kos);
          $('#notelp').val(response.notelp_kos);
          $('#alamat').val(response.alamat);
          $('#latitude').val(response.latitude);
          lat = parseFloat(response.latitude);
          $('#longitude').val(response.longitude);
          long = parseFloat(response.longitude);

          var newLatLng = new google.maps.LatLng(lat, long);
          marker.setPosition(newLatLng);
          map.panTo(newLatLng);

          geocoder.geocode({'latLng': newLatLng }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              if (results[0]) {
                $('#address').val(results[0].formatted_address);
                $('#latitude').val(marker.getPosition().lat());
                $('#longitude').val(marker.getPosition().lng());
                $('#distance').val(getDistance(marker.getPosition(),machungLatlng));
                infowindow.setContent(results[0].formatted_address);
                infowindow.open(map, marker);
              }
            }
          });

          $('#deskripsi').html(response.deskripsi_kos);
          $("input[name=gender][value="+response.gender_kos+"]").prop("checked",true);
          // $('#fasilitas').html(response.fasilitas_kos);
          var fas = response.fasilitas_kos;
          var res = fas.split(",");
          // alert(res);
          // alert(res[2]);
          for (var i = 0; i < res.length; i++) {
            // alert( res[i].replace(/\s/g, ''));
            
            if ($("#fasilitas1").val()==res[i]) {
              $("#fasilitas1").attr('checked', true);
            }
            else if ($("#fasilitas2").val()==res[i]) {
              $("#fasilitas2").attr('checked', true);
            }
            else if ($("#fasilitas3").val()==res[i]) {
              $("#fasilitas3").attr('checked', true);
            }
            else if ($("#fasilitas4").val()==res[i]) {
              $("#fasilitas4").attr('checked', true);
            }
            else if ($("#fasilitas5").val()==res[i]) {
              $("#fasilitas5").attr('checked', true);
            }
            else if ($("#fasilitas6").val()==res[i]) {
              $("#fasilitas6").attr('checked', true);
            }
            else if ($("#fasilitas7").val()==res[i]) {
              $("#fasilitas7").attr('checked', true);
            }
            else if ($("#fasilitas8").val()==res[i]) {
              $("#fasilitas8").attr('checked', true);
            }
            else if ($("#fasilitas9").val()==res[i]) {
              $("#fasilitas9").attr('checked', true);
            }
            else if ($("#fasilitas10").val()==res[i]) {
              $("#fasilitas10").attr('checked', true);
            }
            else if ($("#fasilitas11").val()==res[i]) {
              $("#fasilitas11").attr('checked', true);
            }
            else if ($("#fasilitas12").val()==res[i]) {
              $("#fasilitas12").attr('checked', true);
            }
            else if ($("#fasilitas13").val()==res[i]) {
              $("#fasilitas13").attr('checked', true);
            }
            
          }
        }
      });


    }
    function dataKos(){


      $('#example').DataTable( {

        "ajax": {
          "deferLoading": 57,
          "type": "GET",
          "url": "<?php echo base_url(); ?>index.php/main/getkamar/"+getCookie('editDataKos')+"",

          "dataSrc": function ( json ) {
            if (json == null) {
              e.preventDefault();
              return false;
            }else{
              return json;  
            }            
          }     
        },

        "columns": [
        { "data": "nama_kamar" },
        { "data": "harga" },
        { "data": "panjang" },
        { "data": "lebar" },
        { "data": "kuota" },

        {
          "targets": -1,
          "data": null, 
          "defaultContent": "<a href='manajemen_kos_kamar_edit' ><button id='perbaruiKos' type='button' class='btn btn-animate btn-animate-side btn-info btn-sm'><span><i class='icon fa-pencil'></i> &nbsp<b>Perbarui</b></span></button></a></td>"
        },
        {
          "targets": -1,
          "data": null, 
          "defaultContent": "<a  ><button id='hapus' type='button' class='btn btn-animate btn-animate-side btn-danger btn-sm'><span><i class='icon fa-trash'></i> &nbsp<b>Hapus</b></span></button></a></td>"
        }
        ]

      } );
      $.fn.dataTable.ext.errMode = 'none';
      $('#example tbody').on( 'click', '#perbaruiKos', function () {
        var table = $('#example').DataTable();
        var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      editDataKamar(data.id_kamar);
    });

      $('#example tbody').on( 'click', '#hapus', function () {
        var table = $('#example').DataTable();
        var data = table.row($(this).parents('tr')).data();
      // alert( data.id_kos);
      hapusDataKamar(data.id_kamar);
    } );

      
    }
    

    function hapusDataKamar(x){
     var txt;
     if (confirm("Apakah anda yakin ingin menghapus data kamar ini?")) {
      txt = "Data kamar berhasil dihapus";
      var urls = "main/securedelete/kamar/"+x+"";
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


    function insertfunction(e) {

      var urls='main/updatekos/profil/'+getCookie("editDataKos")+"";
      e.preventDefault();
      var buttonname = $("#submit").html();
      $("#submit").html("Tunggu...");
      $("#submitButton").prop("disabled",true);
      $.ajax({
        url:"<?php echo base_url() ?>index.php/"+urls,
        type: 'POST',
        data: $("#updateData").serialize(),
        success: function(response){
          if (response == 1) {
            alert("Berhasil mengubah data");
            // window.location.href = 'manajemen_kos_data';
            location.reload();

            $("#submit").html(buttonname);
          }else{
            alert("Gagal mengubah data");
            $("#submit").html(buttonname);
            $("#submitButton").prop("disabled",false);
          }
        }
      });   
    }

    function editDataKamar(x){

      document.cookie = "editDataKamar="+x+"; path=<?php echo base_url(); ?>;"
    }


    var rad = function(x) {
      return x * Math.PI / 180;
    };

    var getDistance = function(p1, p2) {
      var R = 6378137; 
      var dLat = rad(p2.lat() - p1.lat());
      var dLong = rad(p2.lng() - p1.lng());
      var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
      Math.sin(dLong / 2) * Math.sin(dLong / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      var d = R * c;
      var e = Math.round(d);
      return e;
    };
    // alert(lat);
  </script> 


