@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            {{-- add tutor --}}
          
        <a class="nav-link" href="{{ route('register') }}">{{ __('Add Tutor') }}</a>
                             
        </div>
    </div>
</div>
@endsection
