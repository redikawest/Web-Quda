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
                            <h3 class="panel-title">Edit Data Header</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mheader/{{$data_header->id}}/updateh" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Headline</label>
                                    <input type="text" name="tanggal_head" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Event" value="{{$data_header->tanggal_head}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Headline</label>
                                    <input type="text" name="judul_head" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event" value="{{$data_header->judul_head}}">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gambar Headline</label>
                                    <input type="file" name="gambar_head" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi Event" value="{{$data_header->gambar_head}}">
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
