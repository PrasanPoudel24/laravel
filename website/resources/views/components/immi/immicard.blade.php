@props(['i'])
                    <!-- COUNTRY BOX -->
						<div class="col-sm-6 col-lg-3">
							<div class="cbox-3">
								<a href="country-details.html">

									<!-- Image -->
									<div class="hover-overlay"> 

										<img class="img-fluid" src="{{$i['img']}}" alt="country-preview" />	
										<div class="item-overlay"></div>

										<!-- Title -->	
										<div class="country-name white-color">
											<h5 class="h5-md">{{$i['name']}}</h5>
										</div>

									</div>

								</a>
							</div>
						</div>
                        