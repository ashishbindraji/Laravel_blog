@extends('layouts.auth');

@section('title', 'Profile Post | Admin Dashbord');

@section('content')

    <div class="content-wrapper">
        <!-- Masked Input -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Update Profile</h2>
                {{-- <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-musk" role="button" aria-expanded="false" aria-controls="collapse-input-musk"></a> --}}
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ Session::get('alert-success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form method="POST" action="{{ route('auth.profileStore') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name', $user ? $user->name : '') }}"
                            class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $user ? $user->email : '') }}"
                            class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Confirm Password">
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
