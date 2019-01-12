@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1>Workers View</h1>
                
                <table class="table table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($workers as $worker)
                    <tr>
                        <th>{{ $worker->id_worker }}</th>
                        <td>{{ $worker->firstname }}</td>
                        <td>{{ $worker->lastname }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                
                {{ $workers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
