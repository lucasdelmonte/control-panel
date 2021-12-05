<?php 
  include('db.php'); 
  $products = "SELECT * FROM products";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Home</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="">Ryzen System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="btn nav-link active" aria-current="page" href="">Home</a>
              <a class="btn nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">Products</a>
              <a 
                class="btn nav-link" 
                data-bs-toggle="modal" 
                data-bs-target="#mi-modal-1"
              >Add product</a>
              <div
                class="modal fade"
                id="mi-modal-1"
                tabindex="-1"
                aria-hidden="true"
                aria-labelledby="label-modal-1"
                data-bs-backdrop="static"
              >
              <!-- Caja de dialogo -->
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                  <!-- Contenido de la caja -->
                  <div class="modal-content">
                    <!-- Encabezado de la caja -->
                    <div class="modal-header">
                      <h5 class="modal-title">Add Product</h5>
                      <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Cuerpo de la caja -->
                    <div class="modal-body">
                      <form action="registerProduct.php" method="post" onsubmit="return validate();">
                        <label for="product" class="form-label">Product</label>
                        <input type="text" name="product" id="product" class="form-control">

                        <label for="mark" class="form-label mt-2">Mark</label>
                        <input type="text" name="mark" id="mark" class="form-control">

                        <label for="model" class="form-label mt-2">Model</label>
                        <input type="text" name="model" id="model" class="form-control">

                        <label for="price" class="form-label mt-2">Price</label>
                        <input type="number" name="price" id="price" class="form-control">

                        <label for="stock" class="form-label mt-2">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control">

                        <button type="submit" class="btn btn-success mt-3">Add</button>
                      </form>
                    </div>
                    <!-- Pie de la caja -->
                    <div class="modal-footer"> 
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn nav-link disabled" href="" tabindex="-1" aria-disabled="true">Service</a>
            </div>
          </div>
          </div> 
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col mt-2">
        <h3>Welcome! Click on products to see the product table.</h3>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col">
        <div class="collapse" id="collapseExample">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-light">
              <caption>Table of products</caption>
              <tr class="table-dark">
                <th>ID</th>
                <th>Product</th>
                <th>Mark</th>
                <th>Model</th>
                <th>Price</th>
                <th>Stock</th>
                <th>State</th>
                <th>Options</th>
              </tr>
              <?php 
                $resultado = mysqli_query($conection, $products);

                while($row=mysqli_fetch_assoc($resultado)){
              ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product'] ?></td>
                <td><?php echo $row['mark'] ?></td>
                <td><?php echo $row['model'] ?></td>
                <td><?php echo '$'. $row['price'] ?></td>
                <td><?php echo $row['stock'] ?></td>
                <td>
                  <?php
                    if($row['stock'] <= 0){
                      echo '<img src="img/notAvailable_48px.png" alt="Available width="30" height="30">';
                    } else {
                      echo '<img src="img/available_48px.png" alt="Not Available" width="30" height="30">';
                    }
                  ?>
                </td>
                <td>
                  <a href="#"><img src="img/edit_30px.png" alt="Edit"></a>
                  <a href="removeProduct.php?id=<?php echo $row['id']; ?>"><img src="img/trash_can_30px.png" alt="Edit"></a>
                </td>
              </tr>
              <?php
                } mysqli_free_result($resultado);
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
