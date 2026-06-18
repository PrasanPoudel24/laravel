@props(['sample'])
				<!-- BLOG PAGE CONTENT
				============================================= -->
				<section id="blog-page" class="wide-100 blog-page-section division">
					<div class="container">
					 	<div class="row">
						
						@foreach ($sample as $data)
							<x-blog.blogcard :data="$data"/>
							
						@endforeach


									
				



						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END BLOG PAGE CONTENT -->