
<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $aboutInfo = "McDorm is a website that provides information about the booking system and living place for Ma Chung University students. A place to live that we recommend, we prepare well so that the students who stay can live comfortably and be able to follow the processes studied at the University.";
    $aboutUs = 'About Us';
}else{
    $aboutInfo = "McDorm merupakan sebuah website yang menyediakan informasi dan sistem pemesanan mengenai tempat tinggal bagi mahasiswa Ma Chung. Tempat tinggal yang kami rekomendasikan telah kami tinjau kelayakannya sehingga para mahasiswa yang menghuni dapat bertempat tinggal dengan nyaman dan dapat mengikuti proses belajar di Universitas dengan baik.";
    $aboutUs = 'Tentang Kami';
}
?>

<div class="bg-holder">
        <div class="bg-parallax" style="background-image:url(<?php echo base_url(); ?>assets/images/kos2.jpg);"></div>
        <div class="bg-mask"></div>
        <div class="bg-holder-content">
            <div class="container">
                <div class="gap gap-big text-white">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 align="center">Ma Chung Lodge</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gap"></div>
        <h3 align="center"><?php echo $aboutUs ?></h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-bigger" align="center"><?php echo $aboutInfo ?></p>
            </div>
        </div>
        <div class="gap"></div>
    </div>
    <div class="container">
    </div>