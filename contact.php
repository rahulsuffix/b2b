<?php $is_active="contact"; include('components/header.php') ?>
<div class="content">
	<div class="container">
	  <h2>Contact Us</h2>
	  <p class="big grey">Come on lets join.</p>
	  <hr>
	            
	  <div class="contact">
	    <div class="row">
	       <div class="col-md-12 col-sm-12">
	          <!-- Google maps -->
	          <div class="gmap">
	             <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
	             <iframe scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Google+India+Bangalore,+Bennigana+Halli,+Bangalore,+Karnataka&amp;aq=0&amp;oq=google+&amp;sll=9.930582,78.12303&amp;sspn=0.192085,0.308647&amp;ie=UTF8&amp;hq=Google&amp;hnear=Bennigana+Halli,+Bangalore,+Bengaluru+Urban,+Karnataka&amp;t=m&amp;ll=12.993518,77.660294&amp;spn=0.012545,0.036006&amp;z=15&amp;output=embed" frameborder="0" height="300"></iframe>
	          </div>
	          
	       </div>
	    </div>
	    <div class="row">
	       <div class="col-md-6 col-sm-6">
	          <div class="cwell">
	             <!-- Contact form -->
	                <h5>Contact Form</h5>
	                <div class="form">
	                  <!-- Contact form (not working)-->
	                  <form class="form-horizontal">
	                      <!-- Name -->
	                      <div class="form-group">
	                        <label class="control-label col-md-3" for="name">Name</label>
	                        <div class="col-md-9">
	                          <input class="form-control" id="name" type="text">
	                        </div>
	                      </div>
	                      <!-- Email -->
	                      <div class="form-group">
	                        <label class="control-label col-md-3" for="email">Email</label>
	                        <div class="col-md-9">
	                          <input class="form-control" id="email" type="text">
	                        </div>
	                      </div>
	                      <!-- Website -->
	                      <div class="form-group">
	                        <label class="control-label col-md-3" for="website">Website</label>
	                        <div class="col-md-9">
	                          <input class="form-control" id="website" type="text">
	                        </div>
	                      </div>
	                      <!-- Comment -->
	                      <div class="form-group">
	                        <label class="control-label col-md-3" for="comment">Comment</label>
	                        <div class="col-md-9">
	                          <textarea class="form-control" id="comment" rows="3"></textarea>
	                        </div>
	                      </div>
	                      <!-- Buttons -->
	                      <div class="form-group">
	                         <!-- Buttons -->
	                         <div class="col-md-9 col-md-offset-3">
	                            <button type="submit" class="btn btn-default">Submit</button>
	                            <button type="reset" class="btn btn-default">Reset</button>
	                         </div>
	                      </div>
	                  </form>
	                </div>
	             </div>
	       </div>
	       <div class="col-md-6 col-sm-6">
	             <div class="cwell">
	                <!-- Address section -->
	                   <h5>Address</h5>
	                   <div class="address">
	                       <address>
	                          <!-- Company name -->
	                          <h6>Bridge technologies.</h6>
	                          <!-- Address -->
	                          795 street Ave, Ural area<br>
	                          State, India 560056<br>
	                          <!-- Phone number -->
	                          <abbr title="Phone">P:</abbr> (123) 456-7890.
	                       </address>
	                        
	                       <address>
	                          <!-- Name -->
	                          <h6>Full Name</h6>
	                          <!-- Email -->
	                          <a href="mailto:#">first.last@gmail.com</a>
	                          <br>
	                          <i>contact persion designation</i>
	                       </address>
	                       
	                   </div>
	             </div>
	       </div>
	    </div>
	    
	 </div> 

	<!-- <div class="border"></div> -->

	</div>
</div>
<?php include('components/footer.php') ?>