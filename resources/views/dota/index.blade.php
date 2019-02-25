
@foreach ($dota as $dotalist)

{{ $dotalist->id }}
{{ $dotalist->itemname }}
{{ $dotalist->price }}
{{ $dotalist->image }}
{{ $dotalist->seller }}
{{ $dotalist->phone }}
<br>
<a href="
/Dota/{{ $dotalist->id }}">show</a>
<br />
<a href="
/Dota/{{ $dotalist->id }}/edit">edit</a>
<form action="/Dota/
{{$dotalist->id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE')}}
<button>X</button>  
</form>
@endforeach

<br>
<a href="{{ url('Dota/create') }}" >
Back
</a>
