<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url() ?>" class="site_title"><i class="fa fa-leaf"></i> <span>SANGRILOKA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
        
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
             <div class="menu_section">
    
                <ul class="nav side-menu">
                  <li><a href="../notifikasi/utama"><i class="fa fa-newspaper-o"></i>Kelola Konten</a></li>
                  <li><a href="../notifikasi/agenda"><i class="fa fa-calendar"></i>Kelola Agenda</a></li>
                  <li><a href="../notifikasi/promosi"><i class="fa fa-bullhorn"></i> Promosi </a> </li>
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
                    <img src="../images/admin.png" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">                
                    <li><a href="../ekstra/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              <ul class="nav navbar-nav navbar-right">
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope">&nbsp;Notifikasi</i>
                  </a>

                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php foreach ($notifikasi as $key => $value){?>
                    <li>
                      <a href="../notifikasi/all_notifikasi">
                        <span class="image"><img src="<?php echo base_url() ?>images/admin.png" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $value ['judul_notifikasi']; ?></span>
                          <span class="time"><?php echo $value ['waktu_tanggal']; ?></span>
                        </span> 
                        <span class="message">
                          <?php echo word_limiter( $value ['isi_notifikasi'], 5); ?>
                        </span>
                      </a>
                    </li>
                   <?php } ?>
                    <li>
                      <div class="text-center">
                        <a href="../notifikasi/all_notifikasi">
                          <strong>Lihat semua notifikasi</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->