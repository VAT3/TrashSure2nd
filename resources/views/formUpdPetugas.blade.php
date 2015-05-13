@extends('templateAdmin')


@section('content')
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="{{asset('img/ui-sam.jpg')}}" class="img-circle" width="60"></p>
                  <h5 class="centered"><?php echo Session::get('name')?></h5>
                    
                  <li class="mt">
                      <a href="{{url('admin')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-folder-open"></i>
                          <span>Inventaris</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('inventoryTPA')}}">TPA</a></li>
                          <li><a  href="{{url('inventoryTPS')}}">TPS</a></li>
                          <li><a  href="{{url('inventorySarana')}}">Sarana</a></li>
                          <li><a  href="{{url('inventoryPetugas')}}">Petugas</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- MAIN CONTENT -->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('inventorySarana')}}">Inventaris Petugas</a> / Update Petugas</h3>
            <div class="row mt">
                  <div class="col-md-12">
                      <form method="post">
                        <div class="modal-content">
                            <div class="modal-header"> 
                              <h4 class="modal-title" id="editModalLabel">Ubah Petugas</h4>
                            </div>
                            <div class="modal-body">
                                <input name="_token" hidden value="{!! csrf_token() !!}" />
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nama Petugas:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama" placeholder="<?php echo Session::get('namaPetugas')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">NIP Petugas:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nip" placeholder="<?php echo Session::get('NIP')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Pekerjaan:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="pekerjaan" placeholder="<?php echo Session::get('pekerjaan')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Username:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="username" placeholder="<?php echo Session::get('username')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Password:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="password" placeholder="<?php echo Session::get('password')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Ulangi Password:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                            </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Reset</button>
                            <button type="submit" class="btn btn-default">Simpan</button>
                          </div>
                        </div>
                        </form>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
      
    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

@endsection