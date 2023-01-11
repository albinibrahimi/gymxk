@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifiko email-in tuaj!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Para se të procedoni më tutje, ju lutemi kontrolloni email-in tuaj për verifikim.') }}
                    {{ __('Nëse nuk keni pranuar mesazhin') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliko këtu për të pranuar mesazhin') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
