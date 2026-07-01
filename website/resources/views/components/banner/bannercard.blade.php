@props(['app']);
<!-- SLIDE #1 -->
				      	<li id="slide-1">

					        <!-- Background Image -->
				        	<img src="{{ asset('storage/' . $app->image) }}" alt="slide-background">

							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">

						       					<!-- Title -->
					        					<h5 class="h5-xl">{{ $app->title }}</h5>
								         	 	<h2>{{ $app->Description }}</h2>
									          	
									          	<!-- Text -->
												<p class="p-md">{{ $app->buttonlink }}
												</p>

												<!-- Button -->
												<a href="{{$app['link']}}" class="btn btn-md btn-primary tra-white-hover btn-arrow">
													<span>{{ $app->link }} <i class="fas fa-arrow-right"></i></span>
												</a>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->