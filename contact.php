<?php include("header.php");?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      
	  <ul class="clear">
        <li><a href="index.php">Home</a></li>
        
		<li><a href="#">Contact</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-color:#efefef;">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1><b>BEST FOODIES PRIVATE LIMITED</b></h1>
		<ul style="list-style:none;">
			<li><a href="callto: +00 (123) 456 7890"><i class="fa fa-phone"></i> +91 999 456 7890</a></li>
			<li><i class="fa fa-envelope-o"></i> Best@foodies.com</li>
		</ul>
		<hr style="margin-bottom:50px;" />
      <div id="comments">
        
        <h2>Write A Comment</h2>
        <form action="mail-controller.php" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
         
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay light" style="background-image:url('../images/demo/backgrounds/05.png');">
  <figure class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group logos">
      <li class="one_quarter first"><a href="#"><img src="images/demo/1.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/2.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/3.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/4.jpg" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include("footer.php");?>