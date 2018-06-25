<?php 
if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $title = 'Thank You';
    $time = 'Transfer Date';
    $pesan = '
    <h5>We Will Process Your Payment as Soon as Possible</h5>
    <h5>Please wait our Verification at least 2 days from now.</h5>';
    $status = 'Order Status';
}else{
    $title = 'Terima Kasih';
    $time = 'Waktu Transfer';
    $pesan = '
    <h5>Pembayaran anda sedang kami proses. </h5>
    <h5>Silahkan tunggu verifikasi dari kami paling lambat 2 hari.</h5>';
    $status = 'Status Pesanan';
}
?>

<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>	
            <h2 class="text-center"><?php echo $title ?></h2>
            <h5 class="text-center mb30"><?php echo $time ?> : <?php echo date("d-m-Y") ?> </h5>
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