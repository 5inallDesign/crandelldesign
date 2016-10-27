<div class="col-sm-3 col-xs-6">
    <a class="animsition-link portfolio-thumbnail" href="{{url('/portfolio/'.$client->slug)}}">
        <div class="client-img">
            <img src="{{url($client->display_img)}}" alt="{{$client->name}}" class="img-responsive main-img">
            <img src="{{url($client->hover_img)}}" alt="{{$client->name}}" class="img-responsive hover-img">
        </div>
        <div class="info">
            <div class="client-name">{{$client->name}}</div>
            <div class="client-location">{{$client->city}}, {{$client->state}}</div>
        </div>
    </a>

</div>