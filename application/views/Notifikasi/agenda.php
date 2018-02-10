 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agenda</h2>
                    <ul class="nav navbar-right">
                      <div class="col-md-4 col-sm-6 col-xs-6 form-group">
                  <div class="input-group">
                   <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modaltambahagenda"><i class="fa fa-plus-circle">&nbsp;Tambah</i></button>
                  </div>
                </div> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id='calendar'></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Agenda
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <center><h4 class="modal-title" id="myModalLabel2">Detail Agenda</h4></center>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <center><label class="control-label">Tidak ada agenda</label></center>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

     <div id="modaltambahagenda" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah agenda</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_agenda/insert_data" >
                <div class="form-group">
                  <label class="col-sm-3 control-label">Judul agenda</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="judul" name="judul" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi agenda</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="isi" name="isi" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="waktu" name="waktu" required>
                  </div>
                </div>                
                              
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary antosubmit">Simpan</button> </form>
          </div>
        </div>
      </div>
    </div>

    <div id="modalhapusagenda" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
          </div>
          <div class="modal-body">
            <div class="delete alert alert-danger"></div>
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/agenda/delete_data" >
                <div class="form-group">
                  <input type="hidden" class="form-control id" id="id" name="id">
                 
                </div>
               
                 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary tmblHapus">Ok</button> </form>
          </div>
        </div>
      </div>
    </div>

    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Agenda</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform3" class="form-horizontal calender" role="form" method="post" action="">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Agenda</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title2" name="title2" required>
                  </div>
                </div>
                <div class="form-group">
                 
                  <div class="col-sm-9">
                    <input type="hidden" class="form-control" id="id_agenda" name="id" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kegiatan</label>
                  <div class="col-sm-9">

                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr2" required></textarea>
                  </div>
                </div>

              
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal" >Batal</button>
            <button type="button" id="tomboldel" class="btn btn-danger" data-toggle="modal" data-dismiss="modal" data-target="#modalhapusagenda">Hapus</button>
            <button type="submit" class="btn btn-primary tmblUbah">Ubah</button>
          </div></form>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
            <!-- jQuery -->
   <!-- /calendar modal -->
            <!-- jQuery -->
    <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>build/js/kostum.js"></script>
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
          displayEventTime : false,
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
          $('#descr2').val(calEvent.descr);
          $('#id_agenda').val(calEvent.id);

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
          <?php foreach ($agenda as $data) { ?>
          <?php 
            $tahun = substr($data['waktu_tanggal'],0,4);
            $bulan = substr($data['waktu_tanggal'],5,2);
            $tanggal = substr($data['waktu_tanggal'],8,2);
          ?>
            {
            title: '<?php echo $data['judul_agenda'] ?>',
            id: '<?php echo $data['id_agenda'] ?>',
            start: new Date(<?php echo $tahun; ?>, <?php echo $bulan; ?>-1, <?php echo $tanggal; ?>,08,30),
            descr: '<?php echo $data['isi_agenda'] ?>'
            }, 
          <?php  } ?>

          ]

        });
        
      };
     
     
  $(document).ready(function() {

    init_calendar();
        
  }); 
  



</script>