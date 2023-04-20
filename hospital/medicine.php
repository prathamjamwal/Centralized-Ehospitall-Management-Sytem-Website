<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1> Medicines</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>Name</th>
<th>Type of Sell</th>
<th>Category</th>
<th>MRP</th>
<th>Best Price</th>
<th>Manufacturer</th>
<th>BUY NOW!</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 


                                    $con = mysqli_connect("localhost","root","","hospital");

                                    if(isset($_GET['search']))
                                    {
                                      $filtervalues = $_GET['search'];
                                      $query = "SELECT * FROM medicine WHERE CONCAT(Name,type_of_sell,category,MRP,price,manufacturer) LIKE '%$filtervalues%' ";
                                      $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                <td><?= $items['Name']; ?></td>
                                                <td><?= $items['type_of_sell']; ?></td>
                                                <td><?= $items['category']; ?></td>
                                                <td><?= $items['MRP']; ?></td>
                                                <td><?= $items['price']; ?></td>
                                                <td><?= $items['manufacturer']; ?></td>
                                                <td>  <a href="checkout.php?name=<?= $items['Name']; ?>&type_of_sell=<?= $items['type_of_sell']; ?>&category=<?= $items['category']; ?>&MRP=<?= $items['MRP']; ?>&price=<?= $items['price']; ?>&manufacturer=<?= $items['manufacturer']; ?>" class="btn btn-primary">BUY NOW</a></td>
                                                </tr>



                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      
      </script>

</body>
</html>


















