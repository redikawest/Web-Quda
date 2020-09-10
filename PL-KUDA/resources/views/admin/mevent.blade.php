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
                            <h3 class="panel-title">Data Event</h3>
                           
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>TANGGAL EVENT</th>
                                        <th>NAMA EVENT</th>
                                        <th>LOKASI EVENT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_event as $event)
                                    <tr>
                                        <td>{{$event->tanggal_event}}</td>
                                        <td>{{$event->nama_event}}</td>
                                        <td>{{$event->lokasi_event}}</td>
                                        <td>
                                            <a href="/PL-Kuda/mevent/{{$event->id}}/edite" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/PL-Kuda/mevent/{{$event->id}}/deletee" class="btn  btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/PL-Kuda/createe" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Event</label>
                        <input type="date" name="tanggal_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Event">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Event</label>
                        <input type="text" name="nama_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Lokasi Event</label>
                        <input type="text" name="lokasi_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi Event">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @stop
