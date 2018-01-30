
<<<<<<< HEAD
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Absensi </h3>
                <?php foreach ($absen as $data) {
                  $absen = true;
                } ?>
              </div>
            </div>
              <div class="title_right">
                <div class="  form-group pull-right top_search">
                  <div class="input-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" <?php if ($absen){echo "disabled";} ?> data-target="#AbsenMasuk">Absen Masuk</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
=======
 <div class="right_col" role="main">
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0

<div class="clearfix"></div>
   <form method="post" action="absensi/selesai_absensi">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Absensi Pegawai <small>Tanggal : <?php echo date('d M Y') ?></small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
                    <table id="table_cs" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="5">No</th>
                          <th>Nama Pegawai</th>
                          <th>Nama Tugas</th>
                          <th width="180">Masuk/Tidak</th>
                        </tr>
                      </thead>

    
                      <tbody>
                     
                        <?php $x = 1; ?>
                        <?php foreach ($data_pegawai as $data) { ?>
                        <tr>
                          <td><?php echo $x; ?></td>
                          <td><?php echo $data['nama_pegawai'] ?></td>
                          <td><?php echo $data['Nama_tugas'] ?></td>
                          <td>
                          <?php if ($this->absensi_model->jumlah_absensi_sekarang()>=1){ ?>  
                          <?php echo $this->absensi_model->tampil_status($data['id_pegawai']) ?>
                          <?php }else{ ?>
                          <input type="hidden" name="id_pegawai<?php echo $data['id_pegawai'] ?>" value="<?php echo $data['id_pegawai'] ?>" >
                          <div id="absensi<?php echo $data['id_pegawai'] ?>" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default active" data-toggle-class="btn-primary active" data-toggle-passive-class="btn-default active" >
                              <input type="radio" name="absensi<?php echo $data['id_pegawai'] ?>" value="Tidak Masuk" checked> Tidak Masuk
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="absensi<?php echo $data['id_pegawai'] ?>" value="Masuk" > Masuk
                            </label>
                          </div>                    
                          </td>
                          <?php } ?>
                        </tr>
                        <?php $x++; } ?>      

                       
                      </tbody>
                    </table>

                  </div>

                    <div class="title_right">
                      <div class="  form-group pull-right top_search">
                        <div class="input-group">

                          <input <?php if ($this->absensi_model->jumlah_absensi_sekarang()>=1){echo "disabled";} ?>   class="btn btn-primary" type="submit" name="selesai" value="Selesai">
                          </div>
                      </div>
                    </div>                  
                </div>
                 
              </div>
               
                </div>
            </div>
           </form> 
          </div>
        </div>

<<<<<<< HEAD
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!--  modal -->
    <div id="AbsenMasuk" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Absensi Tanggal <?php echo date('d - m - Y'); ?></h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
                <form action="Absensi/absen_masuk" method="post" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="title2" name="password" required>
=======
        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
                  </div>

<<<<<<< HEAD
              
            </div>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-primary antosubmit2" name="submit" value="Absen">
             </form>
          </div>
         
=======
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
        </div>
      </div>
    </div>
  </div>
</div>

<<<<<<< HEAD
    <!-- /calendar modal -->
            <!-- jQuery -->
    <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>vendors/nprogress/nprogress.js"></script>
    <!-- FullCalendar -->
    <script src="<?php echo base_url() ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>build/js/custom.min.js"></script>
    <!-- Custom Theme Scripts -->
<script type="text/javascript">
/**
 * Resize function without multiple trigger
 * 
 * Usage:
 * $(window).smartresize(function(){  
 *     // code here
 * });
 */
(function($,sr){
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
      var timeout;

        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args); 
                timeout = null; 
            }

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100); 
        };
    };

    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
    $BODY = $('body'),
    $MENU_TOGGLE = $('#menu_toggle'),
    $SIDEBAR_MENU = $('#sidebar-menu'),
    $SIDEBAR_FOOTER = $('.sidebar-footer'),
    $LEFT_COL = $('.left_col'),
    $RIGHT_COL = $('.right_col'),
    $NAV_MENU = $('.nav_menu'),
    $FOOTER = $('footer');

  
      /* CALENDAR */
      
        function  init_calendar() {
          
        if( typeof ($.fn.fullCalendar) === 'undefined'){ return; }
        console.log('init_calendar');
          
        var date = new Date(),
          d = date.getDate(),
          m = date.getMonth(),
          y = date.getFullYear(),
          started,
          categoryClass;

        var calendar = $('#calendar').fullCalendar({
          header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listMonth'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
          $('#fc_create').click();

          started = start;
          ended = end;

          $(".antosubmit").on("click", function() {
            var title = $("#title").val();
            if (end) {
            ended = end;
            }

            categoryClass = $("#event_type").val();

            if (title) {
            calendar.fullCalendar('renderEvent', {
              title: title,
              start: started,
              end: end,
              allDay: allDay
              },
              true // make the event "stick"
            );
            }

            $('#title').val('');

            calendar.fullCalendar('unselect');

            $('.antoclose').click();

            return false;
          });
          },
          eventClick: function(calEvent, jsEvent, view) {
          $('#fc_edit').click();
          $('#title2').val(calEvent.title);

          categoryClass = $("#event_type").val();

          $(".antosubmit2").on("click", function() {
            calEvent.title = $("#title2").val();

            calendar.fullCalendar('updateEvent', calEvent);
            $('.antoclose2').click();
          });

          calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
          <?php foreach ($data_absensi as $data) { ?>
          <?php 
            $tahun = substr($data['tanggal'],0,4);
            $bulan = substr($data['tanggal'],5,2);
            $tanggal = substr($data['tanggal'],8,2);
          ?>
            {
            title: '<?php echo $data['status'] ?>',
            start: new Date(<?php echo $tahun; ?>, <?php echo $bulan; ?>-1, <?php echo $tanggal; ?>,08,30)
            }, 
          <?php  } ?>

          ]
        });
        
      };
     
     
  $(document).ready(function() {

    init_calendar();
        
  }); 
  

  

</script>
=======
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
