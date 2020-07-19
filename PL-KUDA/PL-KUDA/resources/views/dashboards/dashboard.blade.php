@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome To {{auth()->user()->name}} {{auth()->user()->role}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop