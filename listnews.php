<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php include 'includes/header.php'; ?>
<?php include 'modautoriz.php'; ?>
<body>
<div class="mg-bottom-41"></div>
<div style="background: url('img/fon3.png') top no-repeat;">
    <h3 class="h3-news pb-5" >Новости</h3>
    <div class="container bg-white custom-card3">
        <div class="row">
            <div class="col card-main">
                <img class="img-main" src="img/news1.png" alt="">
            </div>
            <div class="col ms-3 me-4">
                <div class="row mt-5">
                    <div class="col">
                        <h5 class="mb-4 fs-5 h5-news">Тариф на электроэнергию для квартир с электроплитами: как получить льготу?</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="mb-4 fs-5 p-about">Если плита на кухне электрическая, а не газовая, то тариф на электроэнергию будет ниже на 30%. Это своего рода льгота, которая предоставляется жильцами, чтобы компенсировать им более высокий расход электричества. И вот вопрос: как собственнику квартиры этот самый льготный тариф получить? Давайте разберемся...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="a-more" href="new.php">Подробнее<img src="img/follow-arrow.svg" alt=""></a>
                    </div>
                    <div class="col">
                        <p class="text-secondary p-date">13.03.2020</p>
                    </div>
                </div>
                <div class="mg-bottom-40"></div>
            </div>
        </div>
    </div>
</div>



<div class="mg-cards">
<div id="carouselExampleControls" class="carousel slide" >
        <div class="carousel-inner">
            <div class="carousel-item active" id="carouselItem-1">
                <div class="row">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>

                <div class="row mt-4">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>

                <div class="row mt-4">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>
            </div>
        

            <div class="carousel-item" id="carouselItem-2">
                <div class="row">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>

                <div class="row mt-4">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>

                <div class="row mt-4">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>
            </div>


            <div class="carousel-item" id="carouselItem-3">
                <div class="row">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>

                <div class="row mt-4">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>

                <div class="row mt-4">
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                    <?php include 'fragment.php'; ?>
                </div>
            </div>

        </div>
        
    </div>
   

<nav>
  <ul class="pagination justify-content-end mg-top-67">
  <p class="pages mg-right">Страницы</p>
    <li class="page-item">
      <a class="mg-right" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><img src="img/left-arrow.svg" alt=""></a>
    </li>
    <li class="page-item"><a class="pag-text mg-right" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">1</a></li>
    <li class="page-item"><a class="pag-text mg-right" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">2</a></li>
    <li class="page-item"><a class="pag-text mg-right" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">3</a></li>
    <li class="page-item">
      <a class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><img src="img/right-arrow.svg" alt=""></a>
    </li>
  </ul>
</nav>

</div>
<div class="mg-bottom-150"></div>


<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>




