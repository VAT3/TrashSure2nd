@extends('templateAdmin')

@section('content')
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i><a href="{{'admin'}}">Dashboard</a> / Inventaris TPS</h3>
            <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Daftar TPS</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-asterisk"></i> ID</th>
                                  <th><i class="fa fa-home"></i> Nama</th>
                                  <th><i class="fa fa-map-marker"></i> Lokasi</th>
                                  <th><i class="fa fa-download"></i> Volume</th>
                                  <th><i class=" fa fa-edit"></i> Update</th>
                                  <th><i class=" fa fa-edit"></i> Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($TPS as $tps)
                              <tr>
                                  <td>TPS - {{$tps->id}}</td>
                                  <td>{{$tps->nama}}</td>
                                  <td>{{$tps->lokasi}}</td>
                                  <td>{{$tps->volume}}</td>
                                  <td>
                                      <a href="{{'updTPS/'.$tps->id}}"><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button></a>
                                  </td>
                                  <td>    
                                      <form action="{{'delTPS/'.$tps->id}}">
                                        <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin data dihapus?');"><i class="fa fa-trash-o "></i></button>
                                      </form>
                                  </td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                          <div>
                          <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#tambahModal" data-whatever="">TAMBAH</button>

                          <!-- Modal Tambah -->
                          <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <form method="post" action="/addTPS">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="tambahModalLabel">Tambah TPS</h4>
                                </div>
                              
                                <div class="modal-body">
                                  <input name="_token" hidden value="{!! csrf_token() !!}" />
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nama:</label>
                                    <input type="text" class="form-control" id="namax" name="nama">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="control-label">Lokasi:</label>
                                    <input type="text" class="form-control" id="usernamex" name="lokasi">
                                  </div>
                                  <input name="volume" hidden value="0" />
                                </div>
                              
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Tutup</button>
                                  <input type="submit" class="btn btn-default" value="Simpan">
                                </div>
                              </div>
                            </form>
                            </div>
                          </div>

                          <!-- End Modal Tambah -->

                        </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
@endsection
