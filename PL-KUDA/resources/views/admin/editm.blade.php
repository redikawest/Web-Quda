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
                            <h3 class="panel-title">Edit Data Member</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mmember/{{$member->id}}/updatem" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input type="text" value="{{$member->nm_depan}}" name="nm_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input type="text" value="{{$member->nm_belakang}}"  name="nm_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Jenis Kelamin</label>
                                    <select class="form-control" id="exampleFormControlSelect" name="jk_member">
                                        <option value="L" @if($member->jk_member=='L') selected @endif >Laki-Laki</option>
                                        <option value="P" @if($member->jk_member=='P') selected @endif >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" value="{{$member->al_member}}" name="al_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Club</label>
                        <input type="text" name="nm_club" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Club" value="{{$member->nm_club}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Club</label>
                        <input type="file" name="gb_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$member->gb_member}}">
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