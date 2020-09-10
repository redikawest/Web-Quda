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
                            <h3 class="panel-title">Edit Data Berita</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mnews/{{$news->id}}/updaten" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Masukkan Gambar Berita</label>
                                    <input type="file" name="gb_berita"  value="{{$news->gb_berita}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Berita</label>
                                    <input type="date" name="tg_berita" value="{{$news->tg_berita}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Berita">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul Berita</label>
                                    <input type="text" name="jd_berita" value="{{$news->jd_berita}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Berita">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Isi Berita</label>
                                    <textarea name="is_berita"  class="ckeditor" id="ckedtor">{{$news->is_berita}}</textarea>
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