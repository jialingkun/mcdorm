<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

  <div class="navbar-header">
    <div class="navbar-brand navbar-brand-center">
      <a href="home">
        <img class="navbar-brand-logo" src="<?php echo base_url(); ?>assets/images/logo.png" 
        style="padding-left:50px;height:180%;">
      </a>
    </div>
  </div>

  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
            <span class="avatar avatar-online">
              <img src="<?php echo base_url(); ?>assets/images/15.png" alt="...">
              <i></i>
            </span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation">
              <a href="changepassword" role="menuitem"><i class="icon wb-refresh"></i> Reset Password</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
              <a href="<?php echo base_url(); ?>index.php/main/logout" role="menuitem"><i class="icon wb-power"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->
  </div>
</nav>