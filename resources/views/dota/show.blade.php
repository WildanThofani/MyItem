
@foreach ($dota as $dotalist)

{{ $dotalist->id }}
{{ $dotalist->itemname }}
{{ $dotalist->price }}
{{ $dotalist->image }}
{{ $dotalist->seller }}
{{ $dotalist->phone }}

<br />
@endforeach

<a href="{{ url('Dota') }}" >
Back
</a>