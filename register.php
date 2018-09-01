<?php
session_start();
// if (!isset($_SESSION['checkemail']) || !isset($_SESSION['checkpass']) )
// {
//   header('Location: index.php');
// }
$title = 'Registration form';
include "header.php";
 ?>
<center><h1 class="headline">Create New Account</h1></center>


      <form  id="formid" method="post" action="newdbconnect.php" enctype="multipart/form-data">
        <input type="hidden" value="register" name="type" />
           <div class="form-group" >
               <label for="inputText3" class="col-sm-4 control-label"  required >First Name</label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" id="inputText3"  name="fname" placeholder="First name" required>
                </div>
           </div>
        <div class="form-group" >
          <label for="inputText3" class="col-sm-4 control-label" " required >Last Name</label>
              <div class="col-lg-6">
                <input type="text" class="form-control"  name="lname" placeholder="Last name" required>
              </div>
        </div>

          <div class="form-group" >
            <label for="inputEmail3" class="col-sm-4 control-label" required >Email</label>
            <div class="col-lg-6">
              <input type="email" class="form-control"  name="email" placeholder="Email" required>
            </div>
          </div>

            <div class="form-group" >
              <label for="inputPassword1" class="col-sm-4 control-label"  required>Password</label>
              <div class="col-lg-6" >
                <input type="password" class="form-control"  name="pass"  placeholder="Password" required >
              </div>
            </div>
            <div class="form-group" >
              <label for="inputText3" class="col-sm-4 control-label"  required >Phone no</label>
              <div class="col-lg-6">
                <input type="text" class="form-control"   name="PN" placeholder="Phone number" required>
              </div>
            </div>
              <div class="form-group" >
                <label for="inputText3" class="col-sm-4 control-label"  required >Address</label>
                <div class="col-lg-6">
                  <input type="text" class="form-control"   name="Add" placeholder="Address" required>
                </div>
              </div>

             <div class="form-group">
                 <label for="inputText3" class="col-sm-4 control-label"  required >Select image to upload:</label>
                 <div class="col-lg-6">
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                 </div>
             </div>


          <button type="submit" class="btn btn-primary btn-block" >SUBMIT</button>
  </form>

<br><br><br><br>
    <?php require ('footer.php');?>

  </body>
</html>
