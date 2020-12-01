
<!-- start modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- start regis form -->
        <form name="signup_form" action="" method="post">
        	<div class="form-group">
    <label for="exampleInputPassword1" class="font-weight-bold pl-2"><i class="fas fa-user-alt"></i> Name</label>
    <input type="text" class="form-control " name="name" placeholder="Enter Student Full name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold pl-2"><i class="fas fa-envelope"></i> Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter Email Address">
    <small id="emailHelp" class="form-text text-muted">enter valid email address (e.g. abcd@mail.com)</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="font-weight-bold pl-2"><i class="fas fa-key"></i> Password</label>
    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Enter Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="font-weight-bold pl-2"><i class="fas fa-user-lock"></i> Confarm Password</label>
    <input type="password" class="form-control" name="cpwd" id="exampleInputPassword1" placeholder="Enter Password Again">
  </div>
  
 
</form>
<!-- end regis form -->
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- end student registration trigger modal -->



<!-- Modal for std login start-->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Log-In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- start login form -->
        <form name="login_form" action="" method="post">
        	
  <div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold pl-2"><i class="fas fa-envelope"></i> Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter Email Address">
    <small id="emailHelp" class="form-text text-muted">enter valid email address which you varified us.</small>
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1" class="font-weight-bold pl-2"><i class="fas fa-user-lock"></i> Password</label>
    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  
 
</form>
<!-- end login form -->
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-info">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- student login end -->


<!-- admin login start -->

<!-- Modal for std login start-->
<div class="modal fade" id="adminloginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Entrance Line</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- start login form -->
        <form name="adminlogin_form" action="" method="post">
        	
  <div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold pl-2"><i class="fas fa-envelope"></i> Admin Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="aemail" placeholder="Enter Email Address">
    <small id="emailHelp" class="form-text text-muted">enter valid email address.</small>
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1" class="font-weight-bold pl-2"><i class="fas fa-user-lock"></i> Password</label>
    <input type="password" class="form-control" name="apwd" id="exampleInputPassword1" placeholder="Enter Admin Password">
  </div>
  
 
</form>
<!-- end login form -->
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-info">Sign-In</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- admin login end -->

<!-- end modal -->



<!-- jquery.slim.min.js, popper.js, bootstrap.min.js -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

		<!-- own carousel -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

		<!--  -->
	</body>
</html>