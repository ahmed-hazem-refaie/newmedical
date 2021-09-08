@extends('layouts.website')


@section('content')




<h1>HELLO CONTACT</h1>

<form action="{{route(website.contact_post)}}" method="post">
@csrf



@include('includes.captcha')

</form>



@endsection