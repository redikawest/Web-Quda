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
                            <h3 class="panel-title">Edit Data Event</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/PL-Kuda/mevent/{{$event->id}}/updatee" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Event</label>
                                    <input type="text" name="tanggal_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Event" value="{{$event->tanggal_event}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Event</label>
                                    <input type="text" name="nama_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event" value="{{$event->nama_event}}">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lokasi Event</label>
                                    <input type="text" name="lokasi_event" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi Event" value="{{$event->lokasi_event}}">
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
