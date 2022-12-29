<!DOCTYPE html>
<html>

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130882391-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130882391-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="./responsive-START.css">-->
     <title>Midterm: </title>
  </head>

<body>

  <center><h1>CME MUSIC</h1></center>

  <nav class="menu">
    <a href="index.php"> HOME </a>
    <a href="becomeastreamer2.php"> Become a Streamer
    <a href="newmusic3.html"> New Music </a>
    <a href="playlistvibes4.php"> Playlist Vibes </a>
    <a href="musiclibrary5.php"> Music Library </a>
  </nav>
<center><h1>What Playlist is Your Vibe Today?</h1></center>

<section class="gallery">

      <img src="assets/images/turnup.JPG">
      <img src="assets/images/rnb.JPG">
      <img src="assets/images/lovers.JPG">
      <img src="assets/images/jazz.JPG">
      <img src="assets/images/champs.JPG">


</section>


<div class="container">
  <!-- Content here -->
  <table class="table table-striped">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">playlist</th>
    <th scope="col">Genre</th>
    <th scope="col">Songs</th>
    <th scope="col"></th>
    <th scope="col"></th>
  </tr>
</thead>
<tbody>
  <?php
  include('include/db.php');
  $sql = "SELECT * FROM `artist`";
  //$result = mysql_query($con,$sql);
  // Perform query
  if ($result = mysqli_query($con, $sql)) {
    $total_orders = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['playlist']."</td>";
      echo "<td>".$row['Genre']."</td>";
      echo "<td>".$row['Songs']."</td>";
      echo '<td><a href="artist_details.php?artist_id='.$row['id'].'">View Playlist</a></td>';
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

</div>



<?php include("include/scripts.php"); ?>

</body>
  </div>
</body>
</html>
