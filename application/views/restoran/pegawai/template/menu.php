<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url() ?>" class="site_title"><i class="fa fa-leaf"></i> <span>SANGRILOKA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url() ?>images/user1.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata('nama'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
    
                <ul class="nav side-menu">

 
                  <li><a href="<?php echo base_url() ?>Restoran/pegawai/Absensi"><i class="fa fa-book"></i> Absensi</a></li>
                  <li><a href="<?php echo base_url() ?>Restoran/pegawai/Absensi/data"><i class="fa fa-book"></i> Data Absensi</a></li>
 
                  <li><a href="<?php echo base_url() ?>Restoran/pegawai/CS"><i class="fa fa-recycle"></i> Cleaning Service</a></li>
 
                  <li><a href="<?php echo base_url() ?>Restoran/pegawai/Pembagian_Tugas"><i class="fa fa-group"></i> Pembagian Tugas</a></li>
 
                  <li><a href="<?php echo base_url() ?>Restoran/pegawai/Kontrol_Kerja"><i class="fa fa-binoculars"></i> Kontrol Kerja</a></li>
 
                  <!-- <li><a href="<?php echo base_url() ?>Restoran/pegawai/tugas"><i class="fa fa-binoculars"></i> Tugas</a></li> -->
                </ul>
              </div>
          
            </div>

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <?php if($this->session->userdata('status_login')){ ?>
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $this->session->userdata('nama'); ?>

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a href="<?php echo base_url() ?>restoran/pegawai/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <?php }else{ ?>

                <li class="">
                  <a href="<?php echo base_url(); ?>Restoran/pegawai/Login" class="user-profile" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                  </a>
                </li>                
                <?php } ?>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->