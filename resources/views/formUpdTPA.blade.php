@extends('templateAdmin')


@section('content')
     <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i><a href="{{url('admin')}}">Dashboard</a> / <a href="{{url('inventoryTPA')}}">Inventaris TPA</a> /Update TPA</h3>
            <div class="row mt">
                  <div class="col-md-12">
                      <form method="post">
                        <div class="modal-content">
                            <div class="modal-header"> 
                              <h4 class="modal-title" id="editModalLabel">Ubah TPA</h4>
                            </div>
                            <div class="modal-body">
                                <input name="_token" hidden value="{!! csrf_token() !!}" />
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nama:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama" placeholder="<?php echo Session::get('namaTPA')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Lokasi:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="lokasi" placeholder="<?php echo Session::get('lokasiTPA')?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Volume:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="volume" placeholder="<?php echo Session::get('volumeTPA')?>">
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