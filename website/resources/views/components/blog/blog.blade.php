@props(['services'])
				<!-- BLOG PAGE CONTENT
				============================================= -->
				<section id="blog-page" class="wide-100 blog-page-section division">
					<div class="container">
					  	<div class="row">
					
					@foreach ($services as $service)
						<x-blog.blogcard :service="$service"/>
							
						@endforeach


									
				



						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END BLOG PAGE CONTENT -->