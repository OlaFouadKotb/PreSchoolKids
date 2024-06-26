@extends('layouts.main')
@push('pageName')
 Home
 @endpush

@section('content')
@include('includes.carousel')
@include('includes.facility')
@include('includes.abouts')
@include('includes.callTo')
@include('includes.classes')
@include('includes.appoint')
@include('includes.team')
@include('includes.testimonial')
@endsection