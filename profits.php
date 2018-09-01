<?php
session_start();
//starting the session
// if($_SESSION==""){
//   header("location:index.php");
  //if the session is not started properly redirects to login page.
// }
include"mydbconnect.php";
$con=openDatabase();
$title = 'Profit page';
include ('header.php');
?>

    <img src="images/p6.jpg" id="bg" style="margin-top:110px;">
  <br>
    <div class="col-md-8 col-md-offset-2">
  <h1 class="profitH">Profit this Week</h1>
<br>
<div class="col-md-6">
   <table align='center' class="table table-bordered table-hover">
    <tr >
      <th style="padding:15px; font-size:20px;color:darkblue;">Profit this week </th>
      <?php
      $t1=0;
      date_default_timezone_set("Asia/Kolkata");
      $mondate = date('Y-m-d',strtotime('last monday', strtotime('tomorrow')));
      $qry = "select profit from customers where date > ".$mondate." ";
      $a = useDatabase($qry);
      while($row = mysqli_fetch_array($a)){
           $t1+=$row[0];}
           print "<td style='padding:15px;font-size:1.3em;'>".$t1."</td>";
           ?>
           <br>

      </tr>
        <tr>
          <th style="padding:15px; font-size:20px;color:darkblue;">Profit this month </th>
          <?php
          $t1=0;
          $mon=date('m');
          $year=date('Y');
          $qry = "select profit from customers where date > ".$year."-".$mon."-00 ";
          $a = useDatabase($qry);
          while($row = mysqli_fetch_array($a)){
               $t1+=$row[0];}
            print "<td style='padding:15px;font-size:1.3em;'>".$t1."</td>";
           ?>
        </tr>

        <tr>
          <th style="padding:15px; font-size:20px;color:darkblue;">Profit this year </th>
        <?php
                  $t1=0;
             $qry = "select profit from customers where date > ".$year."-00-00 ";
             $a = useDatabase($qry);
             while($row = mysqli_fetch_array($a)){
                  $t1+=$row[0];}
                  print "<td style='padding:15px; font-size:1.3em;'>".$t1."</td>";
                  $t1="";

                   ?>
        </tr>
  </table>
</div>
</div>
</div>

      <?php closeDatabase();
         require ('footer.php');
?>
      </div>

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </div>
  </body>
  </html>
