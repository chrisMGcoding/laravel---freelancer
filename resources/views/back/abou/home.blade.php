@extends("back.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($abou as $item )
    <div style="display: flex; justify-content:center; align-items:center; flex-direction:column">
        <p>{{$item->id}}</p>
        <p style="text-align: center">{{$item->text1}}</p>
        <p>{{$item->text2}}</p>
        @can('update', $abou)
            <button class="btn-success"><a href="{{route("abou.edit", $item->id)}}">Edit</a></button>
        @endcan
    </div>  
    @endforeach
</div>
@endsection