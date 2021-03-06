        @if($uri == '')
        <section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>What would you learn?</h3>
					<p>Increase your expertise in business, technology and personal development</p>
					<form>
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query" placeholder="Ex. Architecture, Specialization...">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
        <!-- /hero_single -->
        @else
        <section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{$uri}}</h1>
				</div>
			</div>
		</section>
        <!--/hero_in-->
        @endif