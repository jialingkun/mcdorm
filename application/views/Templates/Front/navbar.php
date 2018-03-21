 <header id="main-header">
    <div class="header-top"">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="logo" href="http://localhost/mcdorm/index.php/">
                        <img src="<?php echo base_url(); ?>assets/images/logo.png"/>
                    </a>
                </div>
                
                <div class="col-md-6">
                    <div class="top-user-area clearfix">
                        <ul class="top-user-area-list list list-horizontal list-border">
                            <li class="top-user-area-avatar">
                                <a id="login" href="login">Masuk</a>
                            </li>
                            <li>
                                <a id="status" href="http://localhost/mcdorm/index.php/status">Status</a>
                            </li>
                            <li>
                                <a id="changePassword" href="http://localhost/mcdorm/index.php/changepassword">Ubah Password</a>
                            </li>
                            <li class="top-user-area-lang nav-drop">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/images/flags/32/id.png"/>IND<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
                                </a>
                                <ul class="list nav-drop-menu">
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/images/flags/32/uk.png"/><span class="right">ENG</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/images/flags/32/ch.png"/><span class="right">CHN</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a id="logout" href="http://localhost/mcdorm/index.php/logout">Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <ul class="slimmenu" id="slimmenu">
                <li><a href="http://localhost/mcdorm/index.php/">Home</a></li>
                <li><a href="about">Tentang Kami</a></li>
                
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

</script>