@extends('layouts.base')
@section('body')

    @include('layouts.partial.header-horizontal')

    <div class="content">
        <div class="container-xl">
            <div class="page-header">
                <div class="row align-items-center">
                    @yield('page-header')
                </div>
            </div>

            @yield('content')
        </div>
        <footer class="footer footer-transparent">
            <div class="container">
                <div class="mt-3 col-12 col-lg-auto mt-lg-0">
                    Copyright © {{ date('Y') }}
                    <a href="." class="link">{{ config('app.name') }}</a>. All rights reserved.
                </div>
            </div>
        </footer>
    </div>

@endsection