<?php
// Include the PDO-based DBController
include 'dbcontroller.php';

// Create database object
$db = new DBController();

// Set number of products per category
$per_page = 1;

// Fetch Men products
$men = $db->runQuery("SELECT * FROM products_list WHERE gender = 'Men' ORDER BY RAND() LIMIT {$per_page}");

// Fetch Women products
$women = $db->runQuery("SELECT * FROM products_list WHERE gender = 'Women' ORDER BY RAND() LIMIT {$per_page}");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BIG SHOPE</title>

  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  
  <!-- Custom Styles -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.countdown.css">
  <link href="css/fonts.css" rel="stylesheet">
  <link href="css/megamenu.css" rel="stylesheet">

  <!-- jQuery + Plugins -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.easydropdown.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/script.js"></script>
  <script src="js/megamenu.js"></script>

  <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
      $(".megamenu").megamenu();
    });
  </script>
</head>

<body>
<?php
////include 'top_header.php';
include 'header.php';
?>

<!-- Slider Section (Full Width) -->
<div class="index_slider mb-4">
  <div class="w-100">
    <div class="callbacks_container">
      <ul class="rslides" id="slider">
        <li><img src="images/slider1.jpg" class="img-fluid w-100" alt=""/></li>
        <li><img src="images/slider2.jpg" class="img-fluid w-100" alt=""/></li>
        <li><img src="images/slider4.jpg" class="img-fluid w-100" alt=""/></li>
      </ul>
    </div>
  </div>
</div>



<!-- Men Collection -->
<div class="sellers_grid my-4">
  <ul class="sellers d-flex align-items-center">
    <i class="star me-2"> </i>
    <li class="sellers_desc"><h2>Men Collection</h2></li>
  </ul>
</div>

<div class="container">
  <div class="row g-4">
    <?php foreach ($men as $row): ?>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card product-card h-100 shadow-sm border-0">
        <div class="product-img-container">
          <img src="images/<?= $row['product_image']; ?>" alt="<?= $row['product_name']; ?>">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title mb-1"><?= $row['product_name']; ?></h5>
          <p class="card-text mb-0">Brand: <?= $row['brands']; ?></p>
          <p class="text-danger fw-bold mb-2">Rs <?= $row['product_price']; ?></p>
          <a href="single.php?UserId=<?= $row['product_id']; ?>" class="btn btn-outline-dark w-100">See More</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Women Collection -->
<div class="sellers_grid1 my-4">
  <ul class="sellers d-flex align-items-center">
    <i class="star me-2"> </i>
    <li class="sellers_desc"><h2>Women Collection</h2></li>
  </ul>
</div>

<div class="container">
  <div class="row g-4">
    <?php foreach ($women as $row): ?>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card product-card h-100 shadow-sm border-0">
        <div class="product-img-container">
          <img src="images/<?= $row['product_image']; ?>" alt="<?= $row['product_name']; ?>">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title mb-1"><?= $row['product_name']; ?></h5>
          <p class="card-text mb-0">Brand: <?= $row['brands']; ?></p>
          <p class="text-danger fw-bold mb-2">Rs <?= $row['product_price']; ?></p>
          <a href="single.php?UserId=<?= $row['product_id']; ?>" class="btn btn-outline-dark w-100">See More</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light py-4 mt-5">
  <div class="container text-center">
    <?php include('footer.php'); ?>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
