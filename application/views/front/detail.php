
<div class="container">
    <div class="booking-item-details">
        <header class="booking-item-header">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="lh1em" id="namaKos">Kos Semangka 5</h2>
                    <p class="lh1em text-small" id="alamatKos"><i class="fa fa-map-marker"></i> Jl. Semangka 5, Bareng, Kawi, Malang</p>
                    <h4>Gender : <b id="genderKos"></b></h4>
                </div>
                <div class="col-md-5">
                    <p class="booking-item-header-price" ><span class="text-lg" >Rp 650.000</span>/bulan</p>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-md-7">
                <div class="tabbable booking-details-tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1">
                            <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" id="gambarKos">

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
                                    <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                        <label>Nama Pemesan</label>
                                        <input class="form-control" type="text"  placeholder="Jono" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                        <label>Tanggal Masuk</label>
                                        <input class="date-pick form-control" type="text" value="" />
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



<script>

 window.onload = function() {

  var urls='getdetail/'+getCookie("detailKamar");

  $.ajax({
    url:"<?php echo base_url() ?>index.php/"+urls,
    type: 'get',
    dataType: "json",
    success: function (response) {
        var gambar = ' <img  src="<?php echo base_url(); ?>photos/9019/slot1.jpg"/>';
        $('#gambarKos').append(gambar);
        $('#namaKos').html(response.nama_kos);
        $('#alamatKos').html(response.alamat);
        $('#hargaKos').html(response.harga);
        $('#deskripsiKos').html(response.deskripsi_kos);
        $('#genderKos').html(response.gender_kos);
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
                '<li rel="tooltip" data-placement="top" title="Spring Bed"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>'+
                '</li>'+
                '<li rel="tooltip" data-placement="top" title="Luas Kamar"><i class="im im-width"></i><span class="booking-item-feature-sign">3 x 5</span>'+
                '</li>'+
                '<li rel="tooltip" data-placement="top" title="Lemari Kayu"><i class="fa fa-archive"></i><span class="booking-item-feature-sign"></span>'+
                '</li>'+
                '</ul>'+
                '</div>'+
                '<div class="col-md-5">'+
                '<div class="pull-right">'+
                '<span class="booking-item-price">Rp '+response[i].harga+',-</span><span>/bulan</span>'+
                '</div>'+
                '<br>'+
            '<button type="button" class="btn btn-primary pull-right" onclick="location.href="http://localhost:8080/kos/payment.php";"><b>Pesan Sekarang</b></button>'+
                                    '</div>'+
                                    '</div>'+
                                    '</a>'+
                                    '</li>'

                                    );
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