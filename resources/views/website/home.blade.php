@extends('layouts.website')


@section('content')


@include('includes.intro')
@include('includes.services')
@include('includes.about')
@include('includes.counter')
@include('includes.banner')
@include('includes.tab')
@include('includes.about_2')

{{-- @include('includes.digital') --}}
@include('includes.blog')


@endsection