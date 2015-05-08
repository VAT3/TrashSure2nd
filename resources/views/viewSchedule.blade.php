@extends('templateDinas')


@section('content')
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Jadwal</h3>
            <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Jadwal Petugas</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-calendar"></i> Tanggal</th>
                                  <th><i class="fa fa-bell"></i> Durasi</th>
                                  <th><i class="fa fa-user"></i> Petugas</th>
                                  <th><i class="fa fa-map-marker"></i> Lokasi</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach ($Jadwal as $jadwal)
                                <tr>
                                    @if ($jadwal->tanggal == $Date)
                                    <td>{{$jadwal->tanggal}}</td>
                                    <td>
                                        {{$jadwal->durasi}}
                                    </td>
                                    <td>
                                        {{$jadwal->petugas}}
                                    </td>
                                    <td>
                                        {{$jadwal->lokasi}}
                                    </td>
                                    @endif
                                </tr>
                              @endforeach
                              </tbody>
                          </table>
                          <div>
                        </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
@endsection