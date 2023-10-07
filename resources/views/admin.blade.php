@extends('layouts.app')


@section('content')


    @include('partials._header-admin')
	<style>

	</style>

    <div class="container">
        @yield('admin-content')
    </div>

	
@endsection



  