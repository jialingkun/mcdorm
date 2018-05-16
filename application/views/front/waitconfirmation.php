<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $title = 'Thank You';
    
    $pesan = '
    <h5>We will re-check your room availability as soon as possible</h5>
    <h5>Please wait our email confirmation at least 2 days from now.</h5>
    <h5>We recommend to keep an eye on your order status via email or status menu.</h5>';

    $status = 'Order Status';
}else{
    $title = 'Terima Kasih';
    
    $pesan = '
    <h5>Kami akan segera mengecek ulang ketersediaan kamar yang anda pesan.</h5>
    <h5>Silahkan tunggu email konfirmasi dari kami paling lambat 2 hari.</h5>
    <h5>Kami sarankan untuk terus memantau status pesanan anda melalui email atau menu status.</h5>';

    $status = 'Status Pesanan';
}
?>

<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>	
            <h2 class="text-center"><?php echo $title ?></h2>
            
            <ul class="order-payment-list list mb30">
                <li>
                    <div class="row">
                        <div class="col-xs-12 text-center" >
                            <?php echo $pesan ?>
                            <a href="status">
                                <button style="margin-top:15px;" type="button" class="btn btn-success" "><?php echo $status ?></button>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="gap"></div>
    </div>