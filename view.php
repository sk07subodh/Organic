<?php include "header.php";?>
<?php include "action.php";?>
<?php 

?>
<br><br><br>
 <?php

                    include ('db.php');
                    $pro_id=$_GET['product_id'];

                    
                    $SqlQueryRun=mysqli_query($con,"SELECT * FROM addproduct  WHERE product_id='$pro_id'");
                    $sqlrun=mysqli_query($con,"SELECT * FROM farmers WHERE farmer_id IN (SELECT farmer_id FROM addproduct WHERE product_id='$pro_id')");
                    
              
                    $rows=mysqli_fetch_array($sqlrun);
                    
                    $fname=$rows['f_name'];
                    $contact=$rows['mobile'];
                  
                    while($rows=mysqli_fetch_array($SqlQueryRun))
                    {
                      $pro_cat=$rows['product_cat'];
          ?>
          
          
    <div class="container">
      <div class="col-md-12 ">
            <div class="row">
              <div class="col-md-12" id="product_msg"></div>
            </div>
          </div>
      
      <div class="row">
        <div class="col-md-5">
        &nbsp;&nbsp;<h1><?php echo $rows['product_title']; ?></h1>
			  <?php echo "<img class='cimg' src='farmer_images/".$rows['product_image']."' style='width:60%; height:auto;'/> "?>
        </div>
        <div class="col-md-7">
            <br><br>
            <p class="lead"><b>Owner</b></p>
            <p>Farmer name :<?php echo $fname;?></p>
            <p>Farmer contact no :<?php echo $contact; ?></p><br>
            <p class="lead"><b>Description</b></p>
            <p><?php echo $rows['product_desc']; ?></p><br>
            <p class="lead"><b>Price </b></p>
            <p><?php echo $rows['product_price']; ?> Rs</p>

            <form action="">
              <!-- Default input -->
              <input type="number" value="1" class="input-sm" style="width:20%">
              <?php echo "<button  class='btn btn-primary' pid='$pro_id' id='product' type='submit'>Add to cart"?>
                <i class="glyphicon glyphicon-shopping-cart"></i>
              </button>
            </form>
        </div>
          <?php } ?>
       <!-- <div class="col-md-3"></div>-->
          
          <br><br>
            <?php 
            echo"<hr></hr>";
            echo"<h3 style='color:#59B210;'>You May Also Buy</h3><hr></hr>";
              $sqlrunsimilar=mysqli_query($con,"SELECT * FROM addproduct WHERE product_cat='$pro_cat' AND product_id <> '$pro_id' ORDER BY RAND() LIMIT 3;");
              while($rows=mysqli_fetch_array($sqlrunsimilar))
                    {
                      $pro_id=$rows['product_id'];
           ?>
           <div class="col-md-4">
                       

              <div class='cards'>
                <?php echo "<img class='cimg' src='farmer_images/".$rows['product_image']."' style='width:100%; height:auto;'/>";?>
                <?php echo $rows['product_title']; ?><br>
                <?php echo $rows['product_price']; ?> Rs<br>
                <?php echo "<button pid='$pro_id' id='product' class='act_btn 'style='width:103px;'>Add To Cart</button>";?>
                <?php echo "<a href='view.php?product_id=$pro_id'><button pid='$pro_id' class='act_btn' >View</button></a>";?>
              </div>  
          
        </div>
        <?php }
                  //include ('../close.php');
                  ?>
      </div>
	</div>
 
                
  <br>
  <div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#review">Review</a></li>
    <li><a data-toggle="tab" href="#feedback">Feedback</a></li>
  </ul>

  <div class="tab-content">
    <div id="review" class="tab-pane fade in active">
      <h3>Review</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="feedback" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>
</div>

    <hr>
<br><br><br><br><br>
		
<?php include "footer.php";?>