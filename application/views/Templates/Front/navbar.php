 <?php
 if (isset($_COOKIE['bahasa']) && $_COOKIE['bahasa']=='ENG') {
    $langTag1 = '<img src="'.base_url().'assets/images/flags/32/uk.png"/>ENG<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>';
    $langTag2 = 
    '<li onclick="changeLang(\'IND\')">
    <a>
    <img src="'.base_url().'assets/images/flags/32/id.png"/><span class="right">IND</span>
    </a>
    </li>';
    $ubahpassword = 'Change Password';
    $keluar = 'Logout';
    $masuk = 'Login';
    $tentang = 'About Us';
}else{
    $langTag1 = '<img src="'.base_url().'assets/images/flags/32/id.png"/>IND<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>';
    $langTag2 = 
    '<li onclick="changeLang(\'ENG\')">
    <a>
    <img src="'.base_url().'assets/images/flags/32/uk.png"/><span class="right">ENG</span>
    </a>
    </li>';
    $ubahpassword = 'Ubah Password';
    $keluar = 'Keluar';
    $masuk = 'Masuk';
    $tentang = 'Tentang Kami';
}

?>


<header id="main-header">
    <div class="header-top"">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="logo" href="<?php echo base_url(); ?>index.php">
                        <img src="<?php echo base_url(); ?>assets/images/logo.png"/>
                    </a>
                </div>
                
                <div class="col-md-6">
                    <div class="top-user-area clearfix">
                        <ul class="top-user-area-list list list-horizontal list-border">
                            <?php 

                            if (isset($_COOKIE['frontCookie'])) {
                                ?>
                                <li>
                                    <a id="status" href="<?php echo base_url(); ?>index.php/status">Status</a>
                                </li>
                                <li>
                                    <a id="changePassword" href="<?php echo base_url(); ?>index.php/changepassword"><?php echo $ubahpassword ?></a>
                                </li>
                                <li><a id="logout" href="<?php echo base_url(); ?>index.php/logout"><?php echo $keluar ?></a></li>
                                <?php
                            }else{
                                ?>
                                <li class="top-user-area-avatar">
                                    <a id="login" href="<?php echo base_url(); ?>index.php/login"><?php echo $masuk ?></a>
                                </li>
                                <?php
                            }
                            ?>
                            
                            <li class="top-user-area-lang nav-drop">
                                <a>
                                    <?php echo $langTag1;?>
                                </a>
                                <ul class="list nav-drop-menu">
                                    <?php echo $langTag2;?>
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <ul class="slimmenu" id="slimmenu">
                <li><a href="<?php echo base_url(); ?>index.php/">Home</a></li>
                <li><a href="about"><?php echo $tentang;?></a></li>
                
            </ul>
        </div>
    </div>
</header>

<script >
    // window.onload = function() {


    //     if (getCookie('frontCookie')  == null) {
    //         $('#logout').remove();
    //          $('#status').remove();
    //          $('#changePassword').remove();
    //     }
    //     else{
    //         $('#login').remove();

    //     } 




    // }

    function getCookie(name) {
        var dc = document.cookie;
        var prefix = name + "=";
        var begin = dc.indexOf("; " + prefix);
        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }
        else
        {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
                end = dc.length;
            }
        }
        // because unescape has been deprecated, replaced with decodeURI
        //return unescape(dc.substring(begin + prefix.length, end));
        return decodeURI(dc.substring(begin + prefix.length, end));
    }

    function changeLang(lang){
        var CookieDate = new Date;
        CookieDate.setFullYear(CookieDate.getFullYear( ) +1);
        document.cookie = "bahasa="+lang+"; expires="+CookieDate.toGMTString()+"; path=/mcdorm/index.php;";
        window.location.reload();
        return false;
    }

</script>