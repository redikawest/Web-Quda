@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{session('sukses')}}
                        </div>
                        @endif
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Kuda</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mhorse/{{$horse->id}}/updateho" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group" >
                        <label for="exampleInputEmail1">Kode Kuda</label>
                        <input type="text" name="kd_kuda" value="{{$horse->kd_kuda}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kuda">
                    </div>        
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Nama Kuda</label>
                        <input type="text" name="nama_kuda" value="{{$horse->nama_kuda}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kuda">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Status Kuda</label>
                        <select class="form-control" id="exampleFormControlSelect" name="st_kuda">
                            <option value="R" @if($horse->st_kuda=='R') selected @endif >Register</option>
                            <option value="U" @if($horse->st_kuda=='U') selected @endif >Unregister</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect" name="jk_kuda">
                            <option value="J"  @if($horse->jk_kuda=='J') selected @endif >Jantan</option>
                            <option value="B" @if($horse->jk_kuda=='B') selected @endif>Betina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Warna Kuda</label>
                        <input type="text" name="wr_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Warna Kuda" value="{{$horse->wr_kuda}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pejantan</label>
                        <input type="text" name="pj_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pejantan" value="{{$horse->pj_kuda}}"> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Induk</label>
                        <input type="text" name="in_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Induk" value="{{$horse->in_kuda}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tl_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$horse->tl_kuda}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemilik</label>
                        <input type="text" name="np_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pemilik" value="{{$horse->np_kuda}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Club</label>
                        <input type="text" name="nc_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Club" value="{{$horse->nc_kuda}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Kuda</label>
                        <input type="file" name="gb_kuda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$horse->gb_kuda}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
