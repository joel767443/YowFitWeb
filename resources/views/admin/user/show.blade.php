@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            {{ $user->name }}
                            <span class="float-end">
                                <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">Back to Users</a>
                            </span>
                        </h5>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <dl class="row">
                            <dt class="col-sm-3">Name:</dt>
                            <dd class="col-sm-9">{{ $user->name }}</dd>

                            <dt class="col-sm-3">Email:</dt>
                            <dd class="col-sm-9">{{ $user->email }}</dd>

                            <dt class="col-sm-3">Created At:</dt>
                            <dd class="col-sm-9">{{ $user->created_at }}</dd>
                        </dl>
                        <h5>Calendar</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
