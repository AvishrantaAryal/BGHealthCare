


<!-- healthcare footer --> 
<div class="container-fluid footerhealthcare">
	<div class="container healthcarecontainer">
		<div class="row">

			<div class="col-md-3 healthcarecolumn">
				<ul>
					<li>
						<div class="foot-info">
							<h6>Small info</h6>
						</div>
					</li>
					<li>
						<div class="paragraph">
							<p>
								{!!str_limit($about->summary, 100)!!}
							</p>
							
						</div>						
					</li>

				</div>


				<div class="col-md-3 healthcarecolumn">	
					<ul>	
						<li>	
							<div class="contactheader">
								<h6>Contact Us</h6>
							</div>
						</li>

					</ul>					
					<div class="contactinfo">
						<ul>
							<li>9800-000-000</li>
							<li>Balkumari-07, Ringroad</li>
							<li>abc@bdc.gmail.com</li>
						</ul>
					</div>									

				</div>


				<div class="col-md-3 healthcarecolumn">
					<ul>
						<li>
							<div class="linkheader">
								<h6>Useful Links</h6>
							</div>
						</li>
						<li>
							<div class="links">	
								<div class="row">
									<div class="col-md-6 sublist"><ul>
										<li><a href="{{url('home')}}">Home</a></li>
										<li><a href="{{url('blog')}}">Blog</a></li>
										<li><a href="{{url('contactus')}}">Contact</a></li>
									</ul>
								</div>
								<div class="col-md-6 sublist">
									<ul>  						
										<li><a href="{{url('aboutus')}}">About</a></li>		  						
										<li><a href="{{url('faq')}}">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>


			<div class="col-md-3 healthcarecolumn">
				<ul>
					<li>
						<div class="foot_gallery">
							<h6>Gallery</h6>
						</div>
					</li>
				</ul>

				<div class="row">
					@foreach($ga as $gal)
					<div class="col-md-4 col-sm-6 gal_mar">
						<div class="gallery_image">
							<img src="{{url('/imageupload/'.$gal->image)}}" alt="{{$gal->altimage}}" class="img-fluid">
						</div>
					</div>
					@endforeach


					

					
					

					

					

				</div>
			</div>
		</div>
	</div>



	<div class="container foot">
		<div class="row">
			<div class="col-md-4 owner">
				<h5>&copy; {{date('Y')}}, BG Health Care </h5>
			</div>

			<div class="col-md-4 creator"> 
				<h5>Developed by: <a href="https://creatudevelopers.com/">Creatu Developers</a></h5>
			</div>

			<div class="col-md-4 healthicon">	
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>				
			</div>
		</div>	
	</div>
</div>
