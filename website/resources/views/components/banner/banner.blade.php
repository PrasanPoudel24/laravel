@props(['apple']);
<!-- HERO-1
			============================================= -->	
			<section id="hero-1" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider">
			    	<ul class="slides">

                @foreach ($apple as $app)
    			<x-banner.bannercard :app='$app' />
				@endforeach


				    </ul>
			  	</div>	<!-- END SLIDER -->

				
				<!-- SLIDER NAV -->
			  	<div class="hero-slider-nav icon-xs white-color">
			  		<div class="slider-btn">
						<a class="slide-prev"><span class="flaticon-442-left-arrow"></span></a>
						<a class="slide-next"><span class="flaticon-441-right-arrow"></span></a>
					</div>
				</div>


			</section>	<!-- END HERO-1 -->

