@props(['data'])
<!-- ABOUT-2
			============================================= -->
			<section id="about-2" class="bg-lightgrey wide-60 about-section division">
				<div class="container">	
			 		<div class="row d-flex align-items-center">


			 			<!-- ABOUT IMAGE -->
			 			<div class="col-md-6">
			 				<div class="about-img text-center mb-40">

			 					<!-- Image -->
								<img class="img-fluid" src="{{$data['img']}}" alt="about-image" />

							</div>
			 			</div>


			 			<!-- ABOUT TEXT	-->
			 			<div class="col-md-6">
			 				<div class="about-2-txt pc-20 mb-40">


			 					<!-- Section ID -->	
					 			<span class="section-id id-color">About Agency</span>

			 					<!-- Title -->
								<h3 class="h3-lg">{{$data['name']}}</h3>

								<!-- INFO BOX #1 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>{{$data['des']}}
									</p>							
								</div>

									
							</div>
			 			</div>	<!-- END ABOUT TEXT	-->


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-2 -->