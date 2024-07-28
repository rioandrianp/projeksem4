@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::check())
                    Hai, {{ Auth::user()->name }} Anda Berhasil Login <br>
                    Email Anda, {{ Auth::user()->email }}

                    @if(Auth::user()->role == 1)
                       v 
                    @elseif(Auth::user()->role == 2)
                        <a href="{{ route('pegawai.dashboard') }}">Pegawai Dashboard</a>
                    @else
                        <a href="{{ route('nasabah.dashboard') }}">Nasabah Dashboard</a>
                    @endif
                @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
