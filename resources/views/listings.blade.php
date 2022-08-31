@extends('layout')

@section('content')
<h1>{{ $heading }}</h1>

<!-- Unless Directive -->
@unless (count($listings) === 0)

<!-- For each Directive -->
@foreach ($listings as $listing)


<a href="/listing/{{ $listing['id'] }}">
    <h1>
        {{ $listing['title'] }}
    </h1>
</a>

<p>{{ $listing['description'] }}</p>
@endforeach

@else
<p>No listings found!</p>
@endunless

<!-- If Directive -->
<!-- @if (count($listings) == 0)
<p>No listings found!</p>
@endif -->

@endsection