@extends('layouts.app')

@section('content')

@foreach($album->Photos as $photo)

  <div class="col-lg-3">
    <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
    <img alt="{{$album->name}}" src="/albums/{{$photo->image}}">
      <div class="caption">
        <p>{{$photo->description}}</p>
        <p><p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p></p>
        <a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="return confirm('Are yousure?')"><button type="button" class="btnbtn-danger btn-small">Delete Image</button></a>
      </div>
    </div>
  </div>

@endforeach

@endsection