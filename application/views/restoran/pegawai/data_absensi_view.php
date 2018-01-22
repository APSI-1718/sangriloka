
 <div class="right_col" role="main">

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Absensi <small>Tanggal : </small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Hari Ini <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                          <li><a href="#">Hari Ini</a>
                          </li>
                          <li><a href="#">Bulan Ini</a>
                          </li>
                          <li><a href="#">Tahun Ini</a>
                          </li>
                          <li class="divider"></li>


                        </ul>
                      </div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
<!--                     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Absensi</th>
                          <th>Kode Pegawai</th>
                          <th>Nama Karyawan</th>
                          <th>Masuk</th>
                          <th>Keluar</th>
                          <th>edit</th>
                          <th>hapus</th>
                        </tr>
                      </thead>datatable
 -->
                    <table id="" class="table table-striped table-bordered" >

                      <thead >
                        <tr>
                          <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
                          <th style="text-align: center; vertical-align: middle;" rowspan="2">Nama</th>
                          <th style="text-align: center; vertical-align: middle;" colspan="31">Tanggal</th>

                        </tr>
                        <tr>

                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>
                          <th>1</th>

                        </tr>

                      </thead>

                      <tbody>
                 
                        <tr>
                          <td>1</td>
                          <td>Accountant</td>
                          <td>1</td>

                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>

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
                  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
