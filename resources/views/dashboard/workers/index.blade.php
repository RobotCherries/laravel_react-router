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

                <h1>Workers View</h1>
                
                <table class="table table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Company</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($workers as $worker)
                    <tr>
                        <th><a href="{{ route('panel_workers_show', $worker->id_worker) }}">{{ $worker->id_worker }}</a></th>
                        <td><a href="{{ route('panel_workers_show', $worker->id_worker) }}">{{ $worker->firstname }} {{ $worker->lastname }}</a></td>
                        <td>{{ $worker->department_name }}</td>
                        <td>{{ $worker->company_name }}</td>
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
