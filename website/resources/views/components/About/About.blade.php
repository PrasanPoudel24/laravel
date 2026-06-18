@props(['sample'])
<!-- ABOUT-5
			============================================= -->
			<section id="about-5" class="wide-60 about-section division">
				<div class="container">	

				@foreach ($sample as $data)
                <x-About.Aboutcard :data="$data"/>
				@endforeach
					</div>	  <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-5 -->
