<h1>{{ $heading }}</h1>

<!-- Unless Directive -->
@unless (count($listings) === 0)

<!-- For each Directive -->
@foreach ($listings as $listing)
<h1>{{ $listing['title'] }}</h1>
<p>{{ $listing['desc'] }}</p>
@endforeach

@else
<p>No listings found!</p>
@endunless

<!-- If Directive -->
<!-- @if (count($listings) == 0)
<p>No listings found!</p>
@endif -->