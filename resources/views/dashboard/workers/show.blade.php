@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1>Worker Show</h1>
                <h3>{{$worker->firstname}} {{$worker->lastname}}</h3>
            </div>
        </div>
    </div>
</div>
@endsection
