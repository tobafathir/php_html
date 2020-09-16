<?php include"data.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            
            <!-- carousel -->
            
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php $nomor=1;foreach($data_slider as $data) : ?>

                        <div class="carousel-item <?php if($nomor==1){echo "active"; }?>">
                            <img src="<?php echo $data; ?>" class="d-block w-100" alt="logo-<?php echo $nomor; ?>">
                        </div>

                        <?php $nomor++; endforeach; ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <?php foreach($data_siwa as $key=>$value): ?>

            <div class="col-4">
                <div class="card <?php if($value[3]==true){echo "bg-primary";}?> " style="width: 18rem;">
                <img src="asset/gambar/walrus.png" class="card-img-top" alt="walrus">
                <div class="card-body">
                <h5 class="card-title"><?php echo $value[0]; ?></h5>
                <p class="card-text"><?php echo $value[1]; ?></p>
                <a href="#" class="btn btn-danger ">Go somewhere</a>
                </div>
                </div>  
            </div>

            <?php endforeach; ?>


        </div>

    </div>

     <script src="asset/js/jquery-3.5.1.full.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/rbootstap.min.js"></script>
</body>
</html>