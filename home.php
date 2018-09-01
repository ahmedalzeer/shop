<?php
session_start();
include"mydbconnect.php";
$con=openDatabase();
$i=1;
$qry1 = "select * from products";
$a1 = useDatabase($qry1);
$_SESSION['count']=0;
while($row = mysqli_fetch_array($a1))
{
  if($row[4]==0)
  $_SESSION['count']+=1;
}
$b1=count(array_unique($_SESSION['idpro']));
// if($b1){$b1+=1;}

$title = 'Home page ';
include 'header.php';
?>




  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <h1>Products</h1>
      <br>
      <div class="" id="tablecon">
        <?php
        if(isset($_POST['search']))
        {
          $t=$_POST['disp'];
          $q="select *from products where name LIKE '%".$t."%'";

          $a=useDatabase($q);
          if($a->num_rows== 0)
          {
            echo "<script>
            alert('The item is not present. Please try something else');
            window.location.href=home.php
            </script>";
            $qry = "select * from products ";
            $a = useDatabase($qry);
          }
        }
        else
        {
          $qry = "select * from products where id<26";
          $a = useDatabase($qry);
        }?>

            <?php
        //fetching data from database
        while($row = mysqli_fetch_array($a)){
          if($row[4]==0)
          continue;?>
          <div class="col-md-3 product-grids">
                      <div class="agile-products">
                        <div class="new-tag"><?php print "<h6>".$row[4]."</h6>";?></div>
                        <?php print "<img src='images/".$row[0]."/1.jpg' style='height:110px;' class='img-responsive' alt='img'>";?>
                        <div class="agile-product-text">
                          <?php print "<h5><a href='#'>".$row[1]."</a></h5>";?>
                          <?php print "<h6>".$row[2]."/-</h6>";?>
                          <form action="" method="post">
                            <?php print "<input type='hidden' name='idpro' value='$row[0]'>" ?>
                            <button type="submit" class="btn btn-success">Add to cart</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php   }
                    if(isset($_POST["idpro"]))
                    { $ids=$_SESSION['idpro'];
                        array_push($ids,$_POST["idpro"]);
                      $_SESSION['idpro']=$ids;
                     }
                     $b1=count(array_unique($_SESSION['idpro']));
                  ?>
      </div>
<br>


      <div class="col-md-12 col-md-offset-2" style="padding:23px;">
        <nav aria-label="...">
          <ul class="pagination pagination-lg">
            <li class="page-item disabled">
              <a style="font-size:30px;padding-left:25px;padding-right:25px;" class="page-link" href="#" aria-label="-1">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="active"><a style="font-size:30px; padding-left:25px;padding-right:25px;" class="page-link" href="home.php">1</a></li>
            <li class="page-item"><a style="font-size:30px; padding-left:25px; padding-right:25px;" class="page-link" href="home1.php">2</a></li>
            <li class="page-item"><a style="font-size:30px; padding-left:25px; padding-right:25px;"class="page-link" href="home2.php">3</a></li>
            <li class="page-item"><a style="font-size:30px;padding-left:25px; padding-right:25px;" class="page-link" href="home3.php">4</a></li>
            <li class="page-item">
              <a  style="font-size:30px;padding-left:25px; padding-right:25px;" class="page-link" href="home1.php" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
</div>
</div>
</div>
<br>
  <?php require ('footer.php');?>

</body>
  </html>
