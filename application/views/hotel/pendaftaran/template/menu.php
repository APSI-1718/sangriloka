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
                <h2>Sangri</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
    
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url() ?>hotel/Pemesanan/halaman_utama"><i class="fa fa-home"></i> Beranda </a></li>
                  <li><a href="<?php echo base_url() ?>hotel/Pemesanan/Pendaftaran"><i class="fa fa-edit"></i>Pendaftaran</a>
                  </li>
                  <li><a href="<?php echo base_url() ?>hotel/Pemesanan/pembayaran"><i class="fa fa-money"></i>Pembayaran</a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Master Kamar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url() ?>hotel/Pemesanan/kamar">Kelola Kamar</a></li>
                      <li><a href="<?php echo base_url() ?>hotel/Pemesanan/fasilitas">Fasilitas Kamar</a></li>
                      <li><a href="<?php echo base_url() ?>hotel/Pemesanan/jenis">Jenis Kamar</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url() ?>hotel/Pemesanan/Absensi"><i class="fa fa-bar-chart-o"></i> Absensi </a>
                  </li>
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Sangri
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                 </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->