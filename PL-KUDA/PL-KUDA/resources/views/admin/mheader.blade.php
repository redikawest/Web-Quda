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
                            <h3 class="panel-title">Data Header</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>TANGGAL HEADLINE</th>
                                        <th>JUDUL HEADLINE</th>
                                        <th>GAMBAR HEADLINE</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_header as $header)
                                    <tr>
                                        <td>{{$header->tanggal_head}}</td>
                                        <td>{{$header->judul_head}}</td>
                                        <td><img src="{{asset('/images/'.$header->gambar_head)}}" width="64" height="64"></td>
                                        <td>
                                            <a href="/PL-Kuda/mheader/{{$header->id}}/edith" class="btn btn-warning btn-sm">Edit</a>

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
@stop