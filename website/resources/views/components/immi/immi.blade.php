@props(['immidata'])
<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">		

			 				<!-- Title -->
							<h2 class="h2-xs">Immigration Opportunities</h2>

							<!-- Text -->	
							<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
							   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
							</p> 

						</div>
					</div>	 <!-- END SECTION TITLE -->	
<!-- COUNTRY BOX -->
						<div class="col-sm-6 col-lg-3">
							<div class="cbox-3">
								<a href="country-details.html">
                                @foreach($immidata as $i)
									<x-immi.immicard :i='$i'/>
                                @endforeach
									

								</a>
							</div>
						</div>