@extends('layouts.main')
 @push('pageName')
 About Us
 @endpush
@section('content')
@include('includes.pageHeader')
@include('includes.abouts')
@include('includes.callTo')
@include('includes.team')
@endsection