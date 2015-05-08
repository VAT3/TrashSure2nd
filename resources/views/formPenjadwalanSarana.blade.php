@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Isi Volume TPS/TPA
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Menu Penjadwalan Sarana
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <form method="post">
                    <div class="form-group">
                        <label>Nama TPS/TPA</label>
                        <select name="lokasi" class="form-control">
                            <option selected>Lokasi</option>
                            <optgroup label="---TPA---"></optgroup>
                            @foreach ($tpa as $tpaElement)
                            <option>{{$tpaElement->nama}}</option>
                            @endforeach
                            <optgroup label="---TPS---"></optgroup>
                            @foreach ($tps as $tpsElement)
                            <option>{{$tpsElement->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Sarana</label>
                        <select name="jenis" class="form-control">
                            <option selected>Jenis</option>
                            @foreach ($sarana as $saranaElement)
                            <option>{{$saranaElement->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Plat Sarana</label>
                        <select name="plat" class="form-control">
                            <option selected>Plat</option>
                            @foreach ($sarana as $saranaElement)
                            <option>{{$saranaElement->plat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-primary" value="Reset">
                </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
</div>

@endsection