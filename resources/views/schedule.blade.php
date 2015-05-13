@extends('templateDinas')


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
                      <a  href="{{url('dinas')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="laporan.html" >
                          <i class="fa fa-file"></i>
                          <span>Laporan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-list-alt"></i>
                          <span>Penjadwalan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{'schedule'}}">Petugas</a></li>
                          <li><a  href="pengangkutan.html">Pengangkutan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="{{url('viewSchedule')}}" >
                          <i class="fa fa-calendar"></i>
                          <span>Jadwal</span>
                      </a>
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
            <h3><i class="fa fa-angle-right"></i> Penjadwalan</h3>
            <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Penjadwalan Petugas</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-calendar"></i> Tanggal</th>
                                  <th><i class="fa fa-bell"></i> Durasi</th>
                                  <th><i class="fa fa-user"></i> Petugas</th>
                                  <th><i class="fa fa-map-marker"></i> Lokasi</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <form role="form" method="post" action="/assignSchedule">
                                  <input name="_token" hidden value="{!! csrf_token() !!}" />
                                  <td>
                                      <input type="text" class="form-control" name="tanggal" value="{{$Date}}" readonly>
                                  </td>
                                  <td>
                                    <select class="form-control placeholder" name="durasi" type="text">
                                        <option>Durasi</option>
                                        <option>05:00-06.00</option>
                                        <option>06:00-07.00</option>
                                        <option>07:00-08.00</option>
                                        <option>08:00-09.00</option>
                                        <option>09:00-10.00</option>
                                        <option>10:00-11.00</option>
                                        <option>11:00-12.00</option>
                                        <option>12:00-13.00</option>
                                        <option>13:00-14.00</option>
                                        <option>14:00-15.00</option>
                                        <option>15:00-16.00</option>
                                        <option>16:00-17.00</option>
                                        <option>17:00-18.00</option>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="form-control placeholder" name="petugas" type="text">
                                        <option>Petugas</option>
                                        @foreach($Petugas as $petugas)
                                        @if($petugas->pekerjaan == 'Petugas')
                                        <option>{{$petugas->nama}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                  </td>
                                  <td>
                                    <select class="form-control placeholder" name="lokasi" type="text">
                                        <option>Lokasi</option>
                                        <optgroup label="---TPA---"></optgroup>
                                        @foreach($TPA as $tpa)
                                        <option>{{$tpa->nama}} - {{$tpa->lokasi}}</option>
                                        @endforeach
                                        <optgroup label="---TPS---"></optgroup>
                                        @foreach($TPS as $tps)
                                        <option>{{$tps->nama}} - {{$tps->lokasi}}</option>
                                        @endforeach
                                    </select>
                                  </td>
                                  <td>
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                  </td>
                                  </form>
                              </tr>
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