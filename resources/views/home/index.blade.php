@extends('layouts.default')
@section('content')

<a class="animsition-link" href="{{url('/portfolio')}}">Portfolio</a>

<div class="row">
@foreach($portfolio as $key=>$client)
    <div class="col-sm-3 col-xs-6 portfolio-item">
        <a class="animsition-link" href="{{url('/portfolio/'.$client->slug)}}"><img src="{{url($client->display_img)}}" class="img-responsive"></a>
    </div>
    @if(($key+1) % 4 == 0)
    </div><div class="row">
    @endif
@endforeach
</div>

@stop