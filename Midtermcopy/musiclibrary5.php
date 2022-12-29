<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registered</title>
    <?php include("include/head.php"); ?>
  </head>
  <body>
  <?php include("include/navigation.php"); ?>

  <div class="container">
    <!-- Content here -->
    <h1>Registered</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Size</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $total_orders = 0;
    include('include/db.php');
    $sql = "SELECT * FROM `register`";
    //$result = mysql_query($con,$sql);
    // Perform query
    if ($result = mysqli_query($con, $sql)) {
      $total_orders = mysqli_num_rows($result);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
        echo "<td>".$row['city']."</td>";
        echo "<td>".$row['state']."</td>";
        echo '<td><a href="register_details.php?register_id='.$row['id'].'">View Order</a></td>';
        echo '<td><a href="delete_order.php?order_id='.$row['id'].'">Delete order</a></td>';
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
<h3>Active Streamers: <?php echo $total_orders;?> </h3>
  </div>



<?php include("include/scripts.php"); ?>

  </body>
</html>
