@extends("back.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($location as $item )
    <div style="display: flex; justify-content:center; align-items:center; flex-direction:column">
        <p>{{$item->id}}</p>
        <p style="text-align: center">{{$item->text1}}</p>
        <p>{{$item->text2}}</p>
        @can('update', $location)
            <button class="btn-success"><a href="{{route("location.edit", $item->id)}}">Edit</a></button>
        @endcan

    </div>  
    @endforeach
</div>
@endsection