@extends('layout')

@section('content')

<h1>{{ $heading }}</h1>

@if ($listing)
<h1>{{ $listing['title'] }}</h1>
<p>{{ $listing['description'] }}</p>
@endif


@endsection