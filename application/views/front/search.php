
<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $searchTitle = 'Search Result';
    $searchMenu = 'Search :';
    $searchPrice = 'Price';
    $searchGender = 'Gender';
    $searchMale = 'Male';
    $searchFemale = 'Female';
    $searchMix = 'Male & Female';
}else{
    $searchTitle = 'Hasil Pencarian';
    $searchMenu = 'Mencari :';
    $searchPrice = 'Harga';
    $searchGender = 'Jenis Kelamin';
    $searchMale = 'Pria';
    $searchFemale = 'Wanita';
    $searchMix = 'Campuran';
}

 ?>

<div class="container">

    <h3 class="booking-title" align="center">Hasil Pencarian</h3>
    <div class="row">
        <div class="col-md-3">
            <aside class="booking-filters text-white">
                <form  id="insertData" onsubmit="insertfunction(event)">
                    <h3>Filter :</h3>
                    <ul class="list booking-filters-list">
                        <li>
                            <h5 class="booking-filters-title">Harga</h5>
                            <input type="text" id="price-slider" name="harga">
                        </li>
                        <li>
                            <h5 class="booking-filters-title">Jenis Kelamin</h5>
                            <div>
                              <div class="radio-inline">
                                <label><input type="radio" name="gender" value="pria" checked>Pria</label>
                            </div>
                            <div class="radio-inline">
                                <label><input type="radio" name="gender" value="wanita">Wanita</label>
                            </div>
                            <div class="radio-inline">
                                <label><input type="radio" name="gender" value="campuran">Campuran</label>
                            </div>
                        </div>
                    </li>
                    
                    <h5 class="booking-filters-title" style="padding-left: 15px; padding-top: 15px;">Fasilitas</h5>
                    <div class="col-sm-5">
                        <div class="checkbox" value="WiFi">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="WiFi"/>Wifi
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Parkir" />Parkir
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Nasi"/>Nasi
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Air Putih"/>Air Putih
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="24Jam"/>24 Jam
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Laundry"/>Laundry
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskos[]" value="Dapur"/>Dapur
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
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="KM Dalam"/>KM Dalam
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="Lemari"/>Lemari
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="Kipas Angin"/>Kipas Angin
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="Kunci Duplikat"/>Kunci Duplikat
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" name="fasilitaskamar[]" value="Listrik Token"/>Listrik Token
                            </label>
                        </div>
                    </div>

                    <input style="margin-top: 40px; margin-left: 15px;" id="search" class="btn btn-primary" type="submit" value="Search">                    
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
        '<h5 class="hover-title-center">Pesan Sekarang</h5>'+
        '</a>'+
        '</header>'+
        '<div class="thumb-caption"> '+
        '<h5 class="thumb-title"><a class="text-darken" href="detail" onclick="getDetail(&quot;'+dataGlobal[i].id_kos+'&quot;)">'+dataGlobal[i].nama_kos+'</a></h5>'+
        '<p class="mb0"><small>'+dataGlobal[i].alamat+'</small>'+
        '</p>'+
        '<p class="mb0 text-darken"><span class="text-lg lh1em">'+dataGlobal[i].harga+'</span><small>/bulan</small>'+
        '</p>'+
        '<p class="mb0" style="font-size: 15px;color: #ff023c"><b>'+dataGlobal[i].kuota+' Kamar Tersisa !</b>'+
        '</p>'+
        '</div>'+
        '</div>'+
        '</div>';
    }
    $('.pagination').html('');
    $('#dataKamar').html('');
    if (totalData > 0) {
        if (active>1) {
            paginationOutput = paginationOutput + 
            '<li class="next" onclick="pagination('+(active-1)+')"><a >Prev Page</a></li>';
        }
        if(active > 3){
            paginationOutput = paginationOutput + 
            '<li><a onclick="pagination(1)">1</a></li>'+
            '<li class="dots">...</li>'+
            '<li><a onclick="pagination('+(active-1)+')">'+(active-1)+'</a></li>'+
            '<li class="active"><a onclick="pagination('+(active)+')">'+(active)+'</a></li>';
        }else{
            for (var i = 1; i <= active; i++) {
                if (i == active){
                    paginationOutput = paginationOutput +
                    '<li class="active"><a onclick="pagination('+(active)+')">'+(active)+'</a></li>';
                }
                else{
                    paginationOutput = paginationOutput +
                    '<li><a onclick="pagination('+i+')">'+i+'</a></li>';
                }
            }
        }
        if(totalPage - active >= 3){
            paginationOutput = paginationOutput + 
            '<li><a onclick="pagination('+(active+1)+')">'+(active+1)+'</a></li>'+
            '<li class="dots">...</li>'+
            '<li><a onclick="pagination('+(totalPage)+')">'+(totalPage)+'</a></li>'
            ;
        }else{
            for (var i = active+1 ; i <= totalPage; i++) {
                paginationOutput = paginationOutput +
                '<li><a onclick="pagination('+(i)+')">'+(i)+'</a></li>';
            }
        }
        if (active < totalPage) {
            paginationOutput = paginationOutput + 
            '<li class="next"><a onclick="pagination('+(active+1)+')">Next Page</a></li>';
        }
        $('.pagination').append(paginationOutput);
        $('#dataKamar').append(div);
    }
}
</script>
