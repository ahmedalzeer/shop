<?php
session_start();
include 'mydbconnect.php';

// if (!isset($_SESSION['checkemail']) || !isset($_SESSION['checkpass']) )
// {
//   header('Location: index.php');
//   exit(0);
// }

if (isset($_POST['add']))
{
  $call=openDatabase();
  $PID=$_POST['ID'];
  $PNM=$_POST['Name'];
  $PSP=$_POST['Buy'];
  $PR=$_POST['sell'];
  $PBP=$_POST['quant'];
  $PW=$_POST['des'];


mkdir("images/".$PID);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "images/".$PID."/1.jpg ");

  $query="INSERT INTO products (id,name,price,des,quantity,costprice)values
  ('$PID','$PNM','$PR','$PW','$PBP','$PSP')";
  $result=useDatabase($query);
  if(!$result)
  {
    echo "<script>
    alert('Error is in running query. Try again');
    window.location.href='product.php';
    </script>" ;
  }
}
closeDatabase();
$title = 'Add product page';
include "header.php";
 ?>

  <div "col-md-4 col-md-offset-0">

 <h1 class="ph1"> &#9997 Add New Product</h1>
<span style="font-style:italic; font-size:20px;"> <a href="update.php" class="col-md-12 col-md-offset-3" style="text-decoration:none; color:#8a6d3b;font-weight:bold;">Want to update a product</a></span>

<form  id="Fm1" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="span" >
      <label for="inputText3" class="col-sm-1 control-label" id="F3" required >ProductID</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="inputText3" name="ID"placeholder="Product ID" required>
      </div>
      </div>

  <div class="span" >
    <label for="inputText3" class="col-sm-1 control-label" id="F2" required >Product name</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputText3" name="Name" placeholder="Product name" required>
    </div>
  </div>
</div>
<br>
    <div class="row">
      <div class="span" >
        <label for="inputText3" class="col-sm-1 control-label" id="P1" required>Buying Price</label>
        <div class="col-md-2" >
          <input type="number" class="form-control" id="input Text3" name="Buy" placeholder="Price" required >
        </div>
      </div>
    <div class="span" >
        <label for="inputText3" class="col-md-1 control-label" id="P1" required>Selling price</label>
        <div class="col-md-2" >
          <input type="number" class="form-control" id="input Text3" name="sell" placeholder="Price" required >
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="span" >
        <label for="inputText3" class="col-sm-1 control-label" id="E1"required >Range</label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="inputText3" name="quant" placeholder="Quantity" required>
        </div>
        </div>
    <div class="span" >
        <label for="inputText3" class="col-sm-1 control-label" id="P1" required>Description</label>
        <div class="col-md-2" >
          <input type="text" class="form-control" id="input Text3" name="des" placeholder="Description" required >
        </div>
    </div>
  </div>
  <br>
  <div class="col-md-4 col-md-offset-1">
    <p style="font-size:150%; ">
      Select image to upload:
    </p>
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div>
<br>
<br>
<br>
<br>
  <div class="row">
    <div class="col-sm-1">

    </div>
  <div class="col-sm-3 control-label" >
    <button type="submit" class="btn btn-primary" name="add" >Add</button>
  </div>
  <div class="col-sm-3 control-label" >
    <a href="sold.php" class="btn btn-danger">Cancel</a></button>
  </div>
  </div>
    </form>
  </div>
      <?php require ('footer.php');?>

</body>
</html>
