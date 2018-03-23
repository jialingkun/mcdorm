
<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $searchTitle = 'Search Result';
    $searchMenu = 'Search :';
    $searchPrice = 'Price';
    $searchGender = 'Gender';
    $searchMale = 'Male';
    $searchFemale = 'Female';
    $searchMix = 'Mix';
    $searchFacility = 'Facility';
    $searchParking = 'Parking';
    $searchRice = 'Rice';
    $searchWater = 'Water';
    $searchHour = '24 Hours';
    $searchKitchen = 'Kitchen';
    $searchBathroom = 'Bathroom';
    $searchWardrobe = 'Wardrobe';
    $searchFan = 'Fan';
    $searchRoomName = 'Name : ';
    $searchAddress = 'Address : ';
    $searchPrice = 'Price : ';
    $searchAvailable = ' Room Remaining!';
    $searchMonth = ' month';
    $searchNext = 'Next Page';
    $searchPrevious = 'Prev Page';
    $searchSearch = 'Search';
    $searchOrdernow = 'Order Now';

}else{
    $searchTitle = 'Hasil Pencarian';
    $searchMenu = 'Pencarian :';
    $searchPrice = 'Harga';
    $searchGender = 'Jenis Kelamin';
    $searchMale = 'Pria';
    $searchFemale = 'Wanita';
    $searchMix = 'Campuran';
    $searchFacility = 'Fasilitas';
    $searchParking = 'Parkir';
    $searchRice = 'Nasi';
    $searchWater = 'Air Putih';
    $searchHour = '24 Jam';
    $searchKitchen = 'Dapur';
    $searchBathroom = 'KM Dalam';
    $searchWardrobe = 'Lemari';
    $searchFan = 'Kipas Angin';
    $searchRoomName = 'Nama : ';
    $searchAddress = 'Alamat : ';
    $searchPrice = 'harga : ';
    $searchAvailable = ' Kamar Tersisa!';
    $searchMonth = ' bulan';
    $searchNext = 'Selanjutnya';
    $searchPrevious = 'Sebelumnya';
    $searchSearch = 'Mencari';
    $searchOrdernow = 'Pesan Sekarang';
}

?>

<div class="container">

    <h3 class="booking-title" align="center"><?php echo $searchTitle ?></h3>
    <div class="row">
        <div class="col-md-3">
            <aside class="booking-filters text-white">
                <form  id="insertData" onsubmit="insertfunction(event)">
                    <h3><?php echo $searchMenu ?></h3>
                    <ul class="list booking-filters-list">
                        <li>
                            <h5 class="booking-filters-title"><?php echo $searchPrice ?></h5>
                            <input type="text" id="price-slider" name="harga">
                        </li>
                        <li>
                            <h5 class="booking-filters-title"><?php echo $searchGender ?></h5>
                            <div>
                              <div class="radio-inline">
                                <label><input type="radio" name="gender" value="pria" checked><?php echo $searchMale ?></label>
                            </div>
                            <div class="radio-inline">
                                <label><input type="radio" name="gender" value="wanita"><?php echo $searchFemale ?></label>
                            </div>
                            <div class="radio-inline">
                                <label><input type="radio" name="gender" value="campuran"><?php echo $searchMix ?></label>
                            </div>
                        </div>
                    </li>
                    
                    <h5 class="booking-filters-title" style="padding-left: 15px; padding-top: 15px;"><?php echo $searchFacility ?></h5>
                    <div class="col-sm-5">
                        <div class="checkbox" value="WiFi">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="WiFi"/>Wifi
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Parkir" /><?php echo $searchParking ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Nasi"/><?php echo $searchRice ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Air Putih"/><?php echo $searchWater ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="24Jam"/><?php echo $searchHour ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Laundry"/>Laundry
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Dapur"/><?php echo $searchKitchen ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-7">

                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="AC"/>AC
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="KM Dalam"/><?php echo $searchBathroom ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="Lemari"/><?php echo $searchWardrobe ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="Kipas Angin"/><?php echo $searchFan ?>
                            </label>
                        </div>
                        
                        
                    </div>

                    <input style="margin-top: 40px; margin-left: 15px;" id="search" class="btn btn-primary" type="submit" value="<?php echo $searchSearch ?>">                    
                </ul>
                
            </form>
        </aside>
    </div>
    <div class="col-md-9">
        <div class="row row-wrap" >
            <div id="kamar">
                <div id="dataKamar">

                </div>    
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>


<script>
    var dataGlobal = '';
    window.onload = function() {
        $.ajax({
            url:"<?php echo base_url() ?>index.php/getallkamar",
            type: 'get',
            dataType: "json",
            success: function (response) {
                dataGlobal = response;
                pagination(1);
            }
        });
    }
    function insertfunction(e) {
        $('#dataKamar').detach();
        $('#failed').detach();
   e.preventDefault();// will stop alethe form submission
   var dataString = $("#insertData").serialize();
   $.ajax({
    url:"<?php echo base_url() ?>index.php/getsearch",
    type: 'POST',
    data:dataString,
    success: function(response){
        if (response != "null") {
          $("#search").prop("disabled",true);
          $('#kamar').append(' <img id="load" style="width:100px; margin: auto;"  id="theImg" src="http://localhost/mcdorm/assets/images/spin.gif" />');
          dataGlobal = JSON.parse(response);
          $('#kamar').append('<div id="dataKamar"></div>');
          
          setTimeout(function(){
            $("#search").prop("disabled",false);
            $('#load').detach();
            pagination(1);
        }, 2000);
      }
      if(response == "null"){
        $("#search").prop("disabled",true);
        $('#kamar').append(' <img id="load" style="width:100px; margin: auto;"  id="theImg" src="http://localhost/mcdorm/assets/images/spin.gif" />');
        setTimeout(function(){
            $("#search").prop("disabled",false);
            $('#load').detach();
            $('#kamar').append('<div id="failed"> <h3>Maaf Pencarian Tidak Ditemukan</h3></div>');
            dataGlobal = '';
            pagination(1);
        }, 2000);
    }
},
error: function(){
  alert('Gagal menambahkan data');
}
}); 
}
function getDetail(x){
    document.cookie = "detailKamar="+x+"; path=/mcdorm/index.php/detail;"
}
function pagination(active){
    var div = '';
    var totalData = dataGlobal.length;
    var dataPerpage = 9;
    var totalPage = Math.ceil(totalData/dataPerpage);
    var start = 0+((active-1)*dataPerpage);
    var end = start+dataPerpage;
    var paginationOutput = '';
    
    if (end > totalData ) {
        end = totalData;
    }
    // alert(start +'|'+ end);
    for (var i = start; i < end ; i++) {
       div = div + '<div class="col-md-4">'+
       '<div class="thumb">'+
       '<header class="thumb-header" >'+
       '<a  class="hover-img" href="detail" onclick="getDetail(&quot;'+dataGlobal[i].id_kos+'&quot;)">'+
       '<img style="width:240px; height:240px; " src="http://localhost/mcdorm/photos/'+dataGlobal[i].id_kos+'/'+dataGlobal[i].id_kamar+'/slot1.jpg" />'+
       '<h5 class="hover-title-center"><?php echo $searchOrdernow ?></h5>'+
       '</a>'+
       '</header>'+
       '<div class="thumb-caption"> '+
       '<h5 class="thumb-title"><a class="text-darken" href="detail" onclick="getDetail(&quot;'+dataGlobal[i].id_kos+'&quot;)"><?php echo $searchRoomName ?>'+dataGlobal[i].nama_kos+'</a></h5>'+
       '<p class="mb0"><small><?php echo $searchAddress ?>'+dataGlobal[i].alamat+'</small>'+
       '</p>'+
       '<p class="mb0 text-darken"><span class="text-lg lh1em"><?php echo $searchPrice ?>'+dataGlobal[i].harga+'</span><small>/<?php echo $searchMonth ?></small>'+
       '</p>'+
       '<p class="mb0" style="padding-right:21px; float:right; font-size: 15px;color: #ff023c"><span class="label label-danger">'+dataGlobal[i].kuota+'<?php echo $searchAvailable ?></span> </b>'+
       '</p>'+
       '</div>'+
       '</div><br>'+
       '</div>';
   }
   $('.pagination').html('');
   $('#dataKamar').html('');
   if (totalData > 0) {
    if (active>1) {
        paginationOutput = paginationOutput + 
        '<li class="next" onclick="pagination('+(active-1)+')"><a href="#"><?php echo $searchPrevious ?> </a></li>';
    }
    if(active > 3){
        paginationOutput = paginationOutput + 
        '<li><a href="#" onclick="pagination(1)">1</a></li>'+
        '<li class="dots">...</li>'+
        '<li><a href="#" onclick="pagination('+(active-1)+')">'+(active-1)+'</a></li>'+
        '<li class="active"><a onclick="pagination('+(active)+')">'+(active)+'</a></li>';
    }else{
        for (var i = 1; i <= active; i++) {
            if (i == active){
                paginationOutput = paginationOutput +
                '<li class="active"><a href="#" onclick="pagination('+(active)+')">'+(active)+'</a></li>';
            }
            else{
                paginationOutput = paginationOutput +
                '<li><a href="#" onclick="pagination('+i+')">'+i+'</a></li>';
            }
        }
    }
    if(totalPage - active >= 3){
        paginationOutput = paginationOutput + 
        '<li><a href="#" onclick="pagination('+(active+1)+')">'+(active+1)+'</a></li>'+
        '<li class="dots">...</li>'+
        '<li><a href="#" onclick="pagination('+(totalPage)+')">'+(totalPage)+'</a></li>'
        ;
    }else{
        for (var i = active+1 ; i <= totalPage; i++) {
            paginationOutput = paginationOutput +
            '<li><a href="#" onclick="pagination('+(i)+')">'+(i)+'</a></li>';
        }
    }
    if (active < totalPage) {
        paginationOutput = paginationOutput + 
        '<li class="next"><a href="#" onclick="pagination('+(active+1)+')"><?php echo $searchNext ?></a></li>';
    }
    $('.pagination').append(paginationOutput);
    $('#dataKamar').append(div);
}
}
</script>
