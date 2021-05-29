
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login as:') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{ route('admin.login') }}" class="btn btn-primary btn-block">Admin</a>
                                <a href="{{ route('vendor.login') }}" class="btn btn-primary btn-block">Vendor</a>
                                <a href="{{ route('client.login') }}" class="btn btn-primary btn-block">Client</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
