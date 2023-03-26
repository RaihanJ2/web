<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a href="#" class="navbar-brand">Bootstrap</a>
    <button class="navbar-toggler"
    type="button"
    data-bs-toggle = "collapse"
    data-bs-target = "#mobileMenu"
    aria-controls="mobileMenu"
    aria-expanded="false"
    aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div></div>
  </nav>
<!-- CONTENT -->
      <?php
      require'functions.php';
      //select
      $items = query("SELECT * FROM item");
      ?>
    <div class="container-fluid">
    <div class="wrap-up">
      <div class="container">
        <div class="text-center my-4">
          <h1>
            Products
            <hr />
          </h1>
        </div>
      <a href="add.php" class="btn btn-success">Add</a>
        <!-- Row -->
        <div class="row justify-content-center">
        <?php foreach ($items as $row):  ?>
          <!-- <div class="col-sm">
          <div class="card w-100">
  <img class="card-img-top" src="img/appalachia.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $row["name"];?></h5>
    <p class="card-text"><?= $row["description"];?></p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
  </div>
</div> -->

  <div class="card col-auto mb-3 border-0"style="width: 18rem;">
    <img class="card-img-top" src="img/appalachia.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?= $row["name"];?></h5>
      <p class="card-text"><?= $row["description"];?></p>
      <a href="#" class="btn btn-primary">Buy</a>
    </div>
  </div>
  

        <?php endforeach;?>

        </div>
          <!-- row -->
      </div>
  </div>
</div>
  
  <script type="text/javascript">
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script> 
</body>
</html>