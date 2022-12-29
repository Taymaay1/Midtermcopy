<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orders</title>
    <?php include("include/head.php"); ?>
  </head>
  <body>
  <?php include("include/navigation.php"); ?>

  <div class="container">
    <!-- Content here -->
    <h1>Library</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Size</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include('include/db.php');
    $sql = "SELECT * FROM `register` WHERE id = ".$_GET['becomeastreamer2_id'];
    //$result = mysql_query($con,$sql);
    // Perform query
    if ($result = mysqli_query($con, $sql)) {
      $total_orders = mysqli_num_rows($result);
      while ($row = mysqli_fetch_assoc($result)) {
        $extracted = $row;
        $comments = $row['comments'];
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
        echo "<td>".$row['size']."</td>";
        echo "<td>".$row['address']."</td>";
        echo $row['city']." ".$row['state']." ".$row['zip']."</td>";
        echo "</tr>";
      }
      // Free result set
      mysqli_free_result($result);
    } else {
      echo "No results";
    }

    mysqli_close($con);

    ?>
  </tbody>
</table>
<h3>Comments: <?php echo $comments;?> </h3>
<hr>
<h4>Order id: <?php echo $extracted['id'];?> </h4>
<h4>Name: <?php echo $extracted['first_name']." ".$extracted['last_name'];?> </h4>
<h4>Address:
  <?php echo $extracted['address'];?> <br>
  <?php echo $extracted['city'];?> <br>
  <?php echo $extracted['state'];?> <br>
  <?php echo $extracted['zip'];?><br>
</h4>
<h3>Phone: <?php echo $extracted['phone_number'];?> </h3>

  </div>



<?php include("include/scripts.php"); ?>

  </body>
</html>
