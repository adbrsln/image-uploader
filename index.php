<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="home.css" rel="stylesheet">
</head>
<body>



<form class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
<img src="logo.png" alt="logo" width="100%" class="mb-4">
<?php
if(isset($_GET['id']) && isset($_GET['type'])){
  $link_address = 'http://adbroslan.com/imgr/'. $_GET['id'].'.'.$_GET['type'];
  echo '<div class="alert alert-success" role="alert">Link : <a href="'.$link_address.'" target="blank">'.$link_address.'</a></div>';
}
?>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="inputUsername" name="username" class="form-control mb-3" placeholder="username" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control mb-3" placeholder="Password" required="">
  <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Upload</button>
  <p class="mt-5 mb-3 text-muted">© 2020</p>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
if(isset($_GET['e'])){
    echo "<script>Swal.fire({title: 'Error!',text: 'Do you want to continue',icon: 'error',confirmButtonText: 'Cool'})</script>";
}

?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>