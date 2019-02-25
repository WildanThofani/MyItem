<br>
@foreach ($dota as $dotalist)
<form action="{{ route('Dota.update',
$dotalist->id) }}" method="post">

{{ csrf_field() }}
{{ method_field('PUT')}}
<br>
<input type="text"
    name="txt_id"
    value="{{ $dotalist->id }}" />
    <br>

    <input type="text"
    name="txt_itemname"
    value="{{ $dotalist->itemname }}" />
    <br>

    <input type="text"
    name="txt_price"
    value="{{ $dotalist->price }}" />

    <br>
    <input type="text"
    name="txt_image"
    value="{{ $dotalist->image }}" />

    <br>
    <input type="text"
    name="txt_seller"
    value="{{ $dotalist->seller }}" />

    <br>
    <input type="text"
    name="txt_phone"
    value="{{ $dotalist->phone }}" />
<br>
@endforeach
<br>
<button type="submit">Submit</button>
<a href="{{ url('Dota') }}" >
<br>
back
</a>
