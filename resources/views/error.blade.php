
@extends('layouts.main')
@push('pageName')
404 Error
 @endpush
@section('content')
 <!-- Page Header End -->
 @include('includes.pageHeader')
        <!-- Page Header End -->

          <!-- 404 Start -->
          @include('includes.404')
        <!-- 404 End -->
        @endsection