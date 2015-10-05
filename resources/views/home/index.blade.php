@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<div id="home" class="home-container" style="{{isset($special_wallpaper)?'background-image:url('.$special_wallpaper.')':''}}">
	<div class="page text-center">
		<h1 class="slogan heading">{{(isset($special_quote))?'New name...<br>Same awesome websites!':'&quot;Anybody can make a website... but only a few can make it look good!&quot;'}}</h1>
		<div class="button-holder">
			<a href="#portfolio" class="btn btn-clear btn-lg scroll">See For Yourself <i class="fa fa-angle-down"></i></a>
		</div>
	</div>
</div>

<div id="portfolio">
	<div class="page portfolio-container">
		<h1>Portfolio</h1>
		<p class="section-description">Crandell Design and Matt Crandell work with businesses of all sizes. Check out some of the expert work that I have provided. Click on an item below to see more.</p>
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
		<div class="button-holder text-center">
			<a href="{{url('/')}}/portfolio" class="btn btn-lg btn-green">See My Full Portfolio <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<div id="services" class="services-container">
	<div class="page">
		<h1>Services</h1>
		<p class="section-description">Crandell Design is a website design company in Metro Detroit, Michigan. With over 10 years of experience, you can expect a professional looking website for an excellent value. Crandell Design also offers other skilled services from website hosting to logo design.</p>
		<div class="clearfix margin-bottom-15"></div>
		<div class="row">
			<div class="col-md-1 hidden-sm hidden-xs"></div>
			<div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
				<div class="btn btn-block btn-translucent-blue"  data-toggle="modal" data-target="#webDesignModal">
					<img srcset="{{url('/')}}/img/icon-web-design.svg 2x" src="{{url('/')}}/img/icon-web-design.png" alt="Web Design and Development" class="img-responsive center-block" data-no-retina>
					<h2>Web Design and Development</h2>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
				<div class="btn btn-block btn-translucent-blue"  data-toggle="modal" data-target="#webHostingModal">
					<img srcset="{{url('/')}}/img/icon-web-hosting.svg 2x" src="{{url('/')}}/img/icon-web-hosting.png" alt="Web Hosting" class="img-responsive center-block" data-no-retina>
					<h2>Web Hosting</h2>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 margin-bottom-15">
				<div class="btn btn-block btn-translucent-blue"  data-toggle="modal" data-target="#socialMediaModal">
					<img srcset="{{url('/')}}/img/icon-social-media.svg 2x" src="{{url('/')}}/img/icon-social-media.png" alt="Social Media Advising Services" class="img-responsive center-block" data-no-retina>
					<h2>Social Media Advising Services</h2>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 col-sm-offset-2 col-md-offset-0 margin-bottom-15">
				<div class="btn btn-block btn-translucent-blue"  data-toggle="modal" data-target="#logoDesignModal">
					<img srcset="{{url('/')}}/img/icon-logo-design.svg 2x" src="{{url('/')}}/img/icon-logo-design.png" alt="Logo Design" class="img-responsive center-block" data-no-retina>
					<h2>Logo Design</h2>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 col-xs-offset-3 col-sm-offset-0 margin-bottom-15">
				<div class="btn btn-block btn-translucent-blue"  data-toggle="modal" data-target="#seoModal">
					<img srcset="{{url('/')}}/img/icon-seo.svg 2x" src="{{url('/')}}/img/icon-seo.png" alt="Search Engine Optimization" class="img-responsive center-block" data-no-retina>
					<h2>Search Engine Optimization</h2>
				</div>
			</div>
		</div>

<div class="modal fade" id="webDesignModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    		<div class="h3 modal-title">Web Design and Development</div>
  		</div>
  		<div class="modal-body">
  			<div class="row">
		      	<div class="col-sm-4 col-sm-push-8">
		      		<img srcset="{{url('/')}}/img/icon-web-design-green.svg 2x" src="{{url('/')}}/img/icon-web-design-green.png" alt="Web Design and Development" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
		      	</div>
		      	<div class="col-sm-8 col-sm-pull-4">
		      		<p>Everybody needs a website. In today's world, nothing is more true. Perhaps you need a website to promote your business or organization? Crandell Design can do that. We also specialize in website renovations, in order to modernize your website to match today's standards.</p>

			        <h4>Responsive Design</h4>
			        <p>With the plethora of devices that have access to the internet, it is more important than ever to ensure that your website will look right on every one of them. This is where responsive design comes in. A single website would be created that would work and look good on almost every device, whether it is a phone, a tablet, or a normal desktop computer.</p>
			        
			        <h4>Maintenance</h4>
					<p>So you have a new website, but let's say that your address changes or you add new services. Crandell Design can maintain your website for you. Using a flat, monthly rate, it has never been easier to keep your website up to date.</p>

			        <h4>Manage Your Own</h4>
					<p>If your feeling a little adventurous, Crandell Design can build your website using a content management system catered to your needs. What is a content management system (CMS)? It is the backbone to your website that will allow you to create and change content without any coding knowledge. A great way to do things your way.</p>
		      	</div>
		    </div>
  		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal -->

<div class="modal fade" id="webHostingModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    		<div class="h3 modal-title">Web Hosting</div>
  		</div>
  		<div class="modal-body">
  			<div class="row">
		      	<div class="col-sm-4 col-sm-push-8">
		      		<img srcset="{{url('/')}}/img/icon-web-hosting-green.svg 2x" src="{{url('/')}}/img/icon-web-hosting-green.png" alt="Web Hosting" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
		      	</div>
		      	<div class="col-sm-8 col-sm-pull-4">
					<p>So you have a new website, but now you need a place to put it. Crandell Design can host it for you. With over 10 years of experience, we know the best hosting solutions for you.</p>
					<p>Say you need assistance with both hosting and maintaining your website. Crandell Design offers discounts when you combine what you need.</p>
				</div>
			</div>
  		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal -->

<div class="modal fade" id="socialMediaModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    		<div class="h3 modal-title">Social Media Advising Services</div>
  		</div>
  		<div class="modal-body">
  			<div class="row">
		      	<div class="col-sm-4 col-sm-push-8">
		      		<img srcset="{{url('/')}}/img/icon-social-media-green.svg 2x" src="{{url('/')}}/img/icon-social-media-green.png" alt="Social Media Advising Services" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
		      	</div>
		      	<div class="col-sm-8 col-sm-pull-4">
					<p>You keep hearing all of these things about social media but don't have the time to learn them all. That's where Crandell Design comes in. Being on Facebook since 2005, I have been able to keep up with the trends. Crandell Design will ensure you will have a Facebook or Twitter that people will actually want to go to. Through personalized customization, Crandell Design will get you on the right track.</p>
				</div>
			</div>
  		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal -->

<div class="modal fade" id="logoDesignModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    		<div class="h3 modal-title">Logo Design</div>
  		</div>
  		<div class="modal-body">
  			<div class="row">
		      	<div class="col-sm-4 col-sm-push-8">
		      		<img srcset="{{url('/')}}/img/icon-logo-design-green.svg 2x" src="{{url('/')}}/img/icon-logo-design-green.png" alt="Logo Design" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
		      	</div>
		      	<div class="col-sm-8 col-sm-pull-4">
					<h4>Logo Creation</h4>
					<p>Do you have a company or organization that needs to establish brand presence? At Crandell Design, we can create a logo that will conform to the style you and your customers are looking for. Logos created by Crandell Design will be produced to fit any media you need.</p>
					<h4>Logo Modification/Restoration</h4>
					<p>Although you may already have a logo, it may not be up to par with what you may need or what you may require it to do. Crandell Design can update your logo to fit your modern needs.</p>
				</div>
			</div>
  		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal -->

<div class="modal fade" id="seoModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    		<div class="h3 modal-title">Search Engine Optimization</div>
  		</div>
  		<div class="modal-body">
  			<div class="row">
		      	<div class="col-sm-4 col-sm-push-8">
		      		<img srcset="{{url('/')}}/img/icon-seo-green.svg 2x" src="{{url('/')}}/img/icon-seo-green.png" alt="Search Engine Optimization" class="img-responsive center-block margin-bottom-15 services-modal-icon" data-no-retina>
		      	</div>
		      	<div class="col-sm-8 col-sm-pull-4">
					<p>Nobody uses a phone book anymore, they use Google. So you better make sure Google can find you. That's where Crandell Design comes in. While we can't guarantee that you will automatically be number one in all of the listings (nobody can), we will help you get as high as we can so people can find you.</p>
					<p>Don't resort to using the paid listings if you don't have to as these don't always equal visits to your site. We will use key words and other inexpensive methods to get your listing moved up so you get the best bang for your buck.</p>
				</div>
			</div>
  		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal -->

		

	</div>
</div>

<div id="about" class="about-container">
	<div class="page">
		<h1>About</h1>
		<div class="row">
			<div class="col-sm-3">
				<img srcset="{{url('/')}}/img/matt-crandell-2014@2x.jpg 2x" src="{{url('/')}}/img/matt-crandell-2014.jpg" class="img-responsive me-pic" alt="Picture of Matt Crandell">
				<div class="margin-bottom-10 visible-xs-block"></div>
			</div>
			<div class="col-sm-9 col-xs-12">
				<h2>Hi, I'm Matt Crandell.</h2>
				<p>In 2009, I established Crandell Design. Prior to Crandell Design, I launched my first website in 2001 and have had a great passion for web design ever since. Currently, I am also a full time employee for a marketing company where I handle various projects to satisfy their web development and design needs. I hold degrees in Graphic Design and Computer Information Systems from Ferris State University.</p>
				<h2>A little about Crandell Design</h2>
				<p>Crandell Design was created to give people a personal touch for their web and graphic design needs. I believe that all businesses deserve a website that is unique to their brand, as well as access to all online business needs.</p>
			</div>
		</div>
		
	</div>
</div>

<div id="contact" class="contact-container">
	<div class="page">
		<h1>Contact</h1>
		<div class="row">
			<div class="col-sm-7">
				<form class="form" role="form" action="{{url('/')}}/submit-contact" method="post" autocomplete="off">
				  	<div class="form-group">
				    	<label for="name" class="sr-only">Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
					    <label class="control-label error-label" for="name">Please Enter Your Name</label>
				  	</div>
					<div class="form-group">
					    <label for="email" class="sr-only">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
					    <label class="control-label error-label" for="email">Please Enter A Valid Email Address</label>
					</div>
					<div class="form-group">
						<label for="message" class="sr-only">Message</label>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
					    <label class="control-label error-label" for="message">What? You Don't Want to Say Something?</label>
					</div>
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<input class="url" type="text" id="url" name="url" value="" />
				  	<div class="form-group">
				      	<button type="submit" class="btn btn-submit pull-right btn-blue" data-loading-text="Sending...">Send</button>
						<div class="clearfix"></div>
				  	</div>
				</form>
			</div>
			<div class="col-sm-5">
				<p>Phone: <a class="phone" href="tel:+12483835376">248-383-5376</a><br>
  				Email: <a href="mailto:matt@crandelldesign.com">matt@crandelldesign.com</a></p>
  				<h2>Matt Crandell's R&eacute;sum&eacute;</h2>
  				<p><a href="{{url('/')}}/img/resume.pdf" target="_blank" class="btn btn-blue" title="Download Matt Crandell's R&eacute;sum&eacute; as PDF"><span class="glyphicon glyphicon-file"></span> Download My R&eacute;sum&eacute;</a></p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
 	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close contact-close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<div class="h3 modal-title">Thank Your For Contacting Crandell Design</div>
      		</div>
      		<div class="modal-body">
      			<p>Thank you, <span class="thanks-name"></span>, for contacting Crandell Design. Your message will be responded to as soon as possible.</p>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop

@section('footercode')
<script src="{{url('/')}}/js/index.min.js"></script>
@stop