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
                <span>Selamat Datang!</span>
                <h2>Inventory Outbound</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
    
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('outbound/inventory_outbound/peralatan')?>"><i class="fa fa-edit"></i> Kelola Peralatan</a></li>
                  <li><a href="<?=base_url('outbound/inventory_outbound/perawatan')?>"><i class="fa fa-group"></i> Kelola Perawatan</a></li>
                  <li><a href="<?=base_url('outbound/inventory_outbound/pengajuan')?>"><i class="fa fa-check-square-o"></i> Pengajuan Peralatan</a></li>
                  <li><a href="<?=base_url('#')?>"><i class="fa fa-calendar"></i> Penerimaan Peralatan</a></li>
                  
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
                    <img src="images/img.jpg" alt="">Outbound Sangriloka &nbsp; &nbsp;
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a  data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->










 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Peralatan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<a class="btn btn-primary btn-sm" href="<?php echo base_url('outbound/inventory_outbound/peralatan/form_tambah_peralatan')?>">Tambah</a>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pealatan</th>
                          <th>Jenis</th>
                          <th>Jumlah</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $i = 1;
                        foreach ($peralatan as $key => $value){
                      ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $value['nama']; ?></td>
                          <td><?php echo $value['jenis']; ?></td>
                          <td><?php echo $value['jumlah']; ?></td>
                          <td><?php echo $value['keterangan']; ?></td>
                          <td><?php echo $value['status']; ?></td>
                          <td>
                            <a class="btn btn-success btn-sm" href="<?php echo base_url('outbound/inventory_outbound/peralatan/form_edit_peralatan?id='.$value['id']) ?>">Edit</a>
				<a class="btn btn-danger btn-sm" href="<?php echo base_url('outbound/inventory_outbound/peralatan/hapus_peralatan/?id='.$value['id']) ?>" onClick="return confirm('Yakin HAPUS data ini?')">Hapus</a>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                      </table>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>