<?php
 session_start();
include"mydbconnect.php";
$con=openDatabase();
$i=1;
$title = 'out of stock';
include 'header.php';
//opening database and executing query to retrive some data
?>


    <form method="post" >
      <div class="form-group has-success has-feedback" >
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-1" for="inputGroupSuccess2" id="searchbar">SEARCH</label>
        <div class="col-sm-8">
          <div class="input-group">
            <span class="input-group-addon"/>Search</span>
            <input class="form-control" type="text" name="disp"/>
            <div class="input-group-addon">
              <button  class="btn-link"type="submit" name="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
          </div>
        </div>
      </div>
    </form>

  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <h1>Out of Stock products</h1>
    <?php  $qry = "select * from products";
      $a = useDatabase($qry);



    //fetching data from database
    while($row = mysqli_fetch_array($a)){
      if($row[4]==0)
      {?>
      <div class="col-md-3 product-grids">
                  <div class="agile-products">
                    <div class="new-tag"><?php print "<h6>Nil</h6>";?></div>
                    <?php print "<img src='images/".$row[0]."/1.jpg' style='height:110px;' class='img-responsive' alt='img'>";?>
                    <div class="agile-product-text">
                      <?php print "<h5><a href='#'>".$row[1]."</a></h5>";?>
                      <?php print "<h6>Rs".$row[2]."/-</h6>";?>
                      </div>
                  </div>
                </div>
                <?php
              }

            }
   closeDatabase();
    ?>

</div>
</div>
  <?php require ('footer.php');?>

  </body>
  </html>
