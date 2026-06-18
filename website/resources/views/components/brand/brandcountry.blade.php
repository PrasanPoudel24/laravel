@props(['brandcountry'])		
			<section id="brands-3" class="wide-80 brands-section division">
				<div class="container">	

                <!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">			

			 				<!-- Title -->
							<h2 class="h2-xs">Partner Institutes & Universities</h2>

							<!-- Text -->	
							<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
							   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
							</p> 

						</div>
					</div>	 <!-- END SECTION TITLE -->	
					<!-- BRANDS FILTERING BUTTONS -->
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="brands-filter mb-50">
                                @foreach($brandcountry as $b)
			                    <x-brand.brandcountrycard :b='$b'/>
                                @endforeach
			                </div>
						</div>
					</div>