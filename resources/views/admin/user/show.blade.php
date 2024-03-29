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
                                <a href="{{ url('users/' . $user->id . '/edit') }}" class="btn btn-sm btn-secondary">Edit</a>
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

                            <dt class="col-sm-3">Status:</dt>
                            <dd class="col-sm-9">{{ $user->userStatus->name }}</dd>

                            <dt class="col-sm-3">Roles:</dt>
                            <dd class="col-sm-9">
                                @foreach($user->roles as $role)
                                    <div> {{ $role->name }}</div>
                                @endforeach
                            </dd>
                        </dl>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
