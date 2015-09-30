@extends('master.templates.master', array('active_page'=>'portfolio', 'var2'=>''))
@section('body')

<div id="portfolioHome" class="home-container portfolio-page-home" style="{{isset($special_wallpaper)?'background-image:url('.$special_wallpaper.')':''}}">
	<div class="page text-center">
		<h1 class="heading">Hi, I'm Matt Crandell</h1>
		<div class="button-holder text-center">
			<a href="#fullPortfolio" class="btn btn-clear btn-lg scroll">See My Work <i class="fa fa-angle-down"></i></a>
		</div>
	</div>
</div>

<div id="fullPortfolio" class="full-portfolio-container">
	<div class="page">
		<h1>Matt Crandell's Full Portfolio</h1>
		<p class="section-description">Crandell Design works with businesses of all sizes. Check out some of the expert work that I have provided. Click on an item below to see more.</p>
		<div class="samples" id="portfolio-grid">
			@foreach($clients as $client)
				@include('master.templates.grid-item', array('client'=>$client))
			@endforeach
		</div>

		@foreach($clients as $client)
			@if($client->is_custom)
				@include('portfolio.'.$client->slug, array('client'=>$client))
			@else
				@include('master.templates.client-modal', array('client'=>$client))
			@endif
		@endforeach

	</div>
</div>

@stop

@section('footercode')
<script type="text/javascript">
	$(document).ready(function() {
        var url = "{{url('/')}}";
        $(".content .scroll").click(function(event){
        	event.preventDefault();
        	$('html,body').animate({scrollTop:$(this.hash).offset().top-60},1200);
        });
    });
</script>
@stop

