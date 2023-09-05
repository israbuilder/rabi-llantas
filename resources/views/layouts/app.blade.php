@extends('layouts.base')

@section('body')

    <main>

        @yield('header','')

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')

        </div>

    </main>


    @include('layouts.partials.footer')



@endsection
