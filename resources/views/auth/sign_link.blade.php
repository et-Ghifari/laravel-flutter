@extends('layouts.auth')
@section('title', 'Sign Link')
@push('class')
    class="fp-page"
@endpush
@section('auth')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Verification <b>Email</b></a>
            <small>Admin Laravel - Flutter</small>
        </div>
        <div class="card">
            <div class="body">
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/email_success.png') }}" class="img-responsive">
                </div>
                <center>
                    <p>We have sent verification to your email,</p>
                    <b>please check your email!</b>
                </center>
            </div>
        </div>
    </div>
@endsection
@push('scrypt')
    <!-- Validation Plugin Js -->
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js/pages/examples/forgot-password.js') }}"></script>
@endpush
