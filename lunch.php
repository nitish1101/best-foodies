<?php include("header.php");?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Meal</a></li>
		<li><a href="#">Lunch</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
	
    <!-- Portfolio Grid Section -->
 <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">lunch</h2>
                    <h3 class="section-subheading text-muted">LoVe At FiRsT BiTe:-)</h3>
                </div>
            </div>
            <div class="row">
                <?php 
					$a=$db->lunch();
					while($ar=mysqli_fetch_array($a))
					{
						$rows=$db->getMealDetails($ar["Meal_ID"]);
						$r=mysqli_fetch_array($rows);
					echo"<div class='col-md-4 col-sm-6 portfolio-item'>";
							echo"<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
								echo"<div class='portfolio-hover'>";
								echo"<div class='portfolio-hover-content'>";
									echo"<i class='fa fa-plus fa-3x'></i>";
								echo"</div>";
							echo"</div>";
							echo"<img src='backfoot/".$r["ImagePath"]."' class='img-responsive' alt='' style='height:190px; width:400px;'>";
						echo"</a>";
						echo"<div class='portfolio-caption'>";
							echo"<h4>".$r["Name"]."</h4>";
							echo"<p class='text-muted'><a href='#'>".$r["Description"]."</a></p>";
                    echo"</div>";
                echo"</div>";
					}
					?>
            </div>
			
			
            </div>
        </div>
    </section>
	
<!-- ################################################################################################ -->
<?php include("footer.php");?>