<!DOCTYPE html>
<html
  <head>
    <meta charset="utf-8">
    <title>Register</title>
      <?php include("include/head.php"); ?>

    </head>
    <body>

    <?php include("include/navigation.php"); ?>


      <div class="container">
  <!-- Content here -->
  <h1>Register</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12"><hr></div>
  <div class="col-md-6">
    <?php
    if(isset($errorMsg)){
    echo  $errorMsg;
  }
    ?>

  <form method="POST" action="register_handler.php">


  <div class="form-group">
    <label for="firstname">First Name</label>
    <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="firstnamehelp" required>

  </div>

  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input name="lastname" type="text" class="form-control" id="lastname">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input name="address" type="text" class="form-control" id="address">
  </div>


  <div class="form-group">
    <label for="city">City</label>
    <input name="city" type="text" class="form-control" id="city">
  </div>

  <div class="form-group">
      <label for="state">State</label>
      <select class="form-control" name="state">
        <option value="FL">FL</option>
        <option value="GA">GA</option>
        <option value="CA">CA</option>
      </select>
    </div>


  <div class="form-group">
    <label for="zip">Zip</label>
    <input name="zip" type="text" class="form-control" id="zip">
  </div>

  <div class="form-group">
    <label for="phone_number">Phone</label>
    <input name="phone_number" type="phone" class="form-control" id="phone_number">
  </div>


  <div class="form-group">
      <label for="payment">Payment</label>
      <select class="form-control" name="payment">
        <option value="visa">Visa</option>
        <option value="master">Master</option>
        <option value="credit">Credit</option>
      </select>
    </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div

}
  mysqli_close($con);
  //Redirect the user to another page
  header("location: musiclibrary5.php");
  }
</div>




    </body>
  </html>
