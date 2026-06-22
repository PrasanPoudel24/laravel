@props(['service'])
									
									<!-- BLOG POST #1 -->
									<div class="blog-post">

			 			
							 			<!-- BLOG POST IMAGE -->
							 			<div class="blog-post-img mb-30">
										<img class="img-fluid" src="{{ $service->img }}" alt="blog-post-image" />	
									</div>

									

										
									<!-- Post Meta -->
										<p class="post-meta"><a href="" class="grey-color">{{ $service->name }}</a> - 12 min read</p>

										<!-- Title -->
										<h4 class="h4-xs">
											<a href="{{ route('blogdetail', ['service' => $service->id]) }}" class="darkblue-color">{{ $service->name }}</a>
										</h4>

										<!-- Text -->
										<p>{{ $service->description }}</p>
											<!-- Post Data -->
											<p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>	

										</div>


									</div>	<!-- END BLOG POST #1 -->