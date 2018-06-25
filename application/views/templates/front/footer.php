<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $text1 = 'McDorm is a website-based application that is used exclusively by the University of Ma Chung civitas in helping new students find residence or boarding with close access to the University.';
}else{
    $text1 = 'McDorm adalah aplikasi berbasis website yang digunakan khusus oleh civitas Universitas Ma Chung dalam membantu mahasiswa baru mencari tempat tinggal atau kos yang memiliki akses dekat dengan Universitas.';
}

 ?>


<footer id="main-footer">
    <div class="container">
        <div class="row row-wrap">
            <div class="col-md-5">
                <a class="logo" href="index.html">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Image Alternative text" title="Image Title" />
                </a>
                <p class="mb20"><?php echo $text1; ?></p>
            </div>
            <div class="col-md-3">
                <h4>Customer Service</h4>
                <h4 class="text-color">0341-557191</h4>
                <h4><a href="#" class="text-color">McDorm@gmail.com</a></h4>
            </div>
            <div class="col-md-4">
                <img style="max-width: 120px; padding: 10px;" src="<?php echo base_url(); ?>assets/images/machunglogo.png" alt="Image Alternative text" title="Image Title" />
                <img style="max-width: 120px; padding: 10px;" src="<?php echo base_url(); ?>assets/images/mdc.jpg" alt="Image Alternative text" title="Image Title" />
                
            </div>

        </div>
    </div>
</footer>

</div>
</body>
</html>