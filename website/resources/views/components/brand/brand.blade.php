	@props(['branddata'])
    <!-- BRANDS-3
			============================================= -->				
			<section id="brands-3" class="wide-80 brands-section division">
				<div class="container">
                
					<!-- BRANDS HOLDER -->
					<div class="row">	
						<div class="col-md-12 brands-list">
							<div class="masonry-wrap grid-loaded hover-primary">

							@foreach($branddata as $d)
                                <x-brand.brandcard :d='$d'/>
                            @endforeach

				</div>     <!-- End container -->
			</section>	<!-- END BRANDS-3 -->