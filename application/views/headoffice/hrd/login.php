<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sangriloka || APSI 2017 </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="demo-form2" method="post" action="<?php echo base_url('headoffice/hrd/hal_awal/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
              <h1>Form Absensi</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" id="tanggal" required="required" use value=<?php echo date('Y-m-d');?> readonly>
              </div>
              <div>
                <input type="text" class="form-control" name="id_pegawai" id="id_pegawai" placeholder="Maukkan NIP" required="required">
              </div>
              <div>
                <input type="hidden" class="form-control" placeholder="Maukkan NIP" value="Hadir" name="status" id="status" required="required">
              </div>
              <div>
                <button class="btn btn-default submit">Hadir</button>
              </div>
           

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Anda Ingin Masuk?
                  <a href="#signup" class="to_register"> Klik Disini! </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-institution"></i> Sangriloka Resort</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Form Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" href="<?php echo base_url() ?>headoffice/hrd/hal_awal_hrd/beranda">Masuk</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Anda Belum Absen?
                  <a href="#signin" class="to_register"> Absen Klik Disini! </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-institution"></i> Sangriloka Resort</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
