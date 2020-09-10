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
                            <h3 class="panel-title">Data Berita</h3>

                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                         <th>GAMBAR BERITA</th>
                                        <th>TANGGAL BERITA</th>
                                        <th>JUDUL BERITA</th>
                                        <th>AKSI</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_news as $news)
                                    <tr>
                                    <td><img src="{{asset('/images/'.$news->gb_berita)}}" width="64" height="64"></td>
                                        <td>{{$news->tg_berita}}</td>
                                        <td>{{$news->jd_berita}}</td>
                                        <td>
                                            <a href="/PL-Kuda/mnews/{{$news->id}}/editn" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/PL-Kuda/mnews/{{$news->id}}/deleten" class="btn  btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kuda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/PL-Kuda/createn" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Gambar Berita</label>
                        <input type="file" name="gb_berita" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Tanggal Berita</label>
                        <input type="date" name="tg_berita"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Berita">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Berita</label>
                        <input type="text" name="jd_berita"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Berita">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Isi Berita</label>
                       <textarea name="is_berita" class="ckeditor" id="ckedtor"></textarea>
                    </div>
                   

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post News</button>
                </form>
            </div>
        </div>
    </div>
    @stop