<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭНСА</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
        position: relative;
        background: url('img/pic-head.png') top right no-repeat;
        background-size: 50%;
        }
</style>

</head>
<?php include 'includes/header.php'; ?>
<?php include 'modautoriz.php'; ?>
<body>
<main>
<!-- Первый блок -->
<div class="mg-bottom-150"></div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h1 class="welcome-text mt-5 h1-descr">Контролируй свои расходы за электроэнергию <br> и исключай возможность воровства</h1>
            <div class="mg-bottom-55"></div>
            <button class="btn btn-primary mt-3 btn-main">Присоединиться</button>
        </div>
    </div>
</div>
<div class="mg-bottom-95"></div>
<div class="container mt-5 icons-align-text">
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0 icons-align">
                <img src="img/Vector-2.svg" class="card-img-top icon-image" alt="Иконка 1">
                <div class="card-body">
                    <p class="card-title fs-5 icon-text text-color1">Установка и <br>обслуживание системы</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mx-2">
            <div class="card border-0 icons-align">
                <img src="img/Vector-3.svg" class="card-img-top icon-image" alt="Иконка 2">
                <div class="card-body">
                    <p class="card-title fs-5 icon-text text-color2">Контроль за расходом <br>электроэнергии</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 icons-align">
                <img src="img/Vector-4.svg" class="card-img-top icon-image" alt="Иконка 3">
                <div class="card-body">
                    <p class="card-title fs-5 icon-text text-color3">Исключение <br>возможности воровства</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Первый блок финал -->

<!-- Второй блок -->
<div class="mg-bottom-170"></div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4"> <!-- Левая часть сетки -->
            <div class="row">
                <div class="col-6">
                    <img src="img/Group-34.png" alt="Первая фотография" class="img-fluid img-wdth">
                </div>
                <div class="col-6">
                    <img src="img/Group-35.png" alt="Вторая фотография" class="img-fluid img-wdth">
                </div>
                <div class="col-12 mt-3"> 
                    <img src="img/Group-153.png" alt="Третья фотография" class="img-fluid img-horiz">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 pd-left-70"> <!-- Правая часть сетки -->
            <h2 class="h2-about">АО "ННПО им. М.В. Фрунзе"</h2>
            <div class="mg-bottom-64"></div>
            <p class="p-about">Нижегородское научно-производственное объединение имени М.В.Фрунзе – это разработчик и производитель современных высокотехнологичных радиоэлектронных приборов военного и гражданского назначения.</p>
            <p class="p-about">Сертификация системы менеджмента качества предприятия подтверждена сертификатом Системы сертификации «Военный регистр» о соответствии стандартам ГОСТ Р ИСО 9001-2015 и ГОСТ РВ 0015-002-2012.</p>
            <div class="row">
                <div class="col">
                    <p class="p-about">Лицензия на осуществление деятельности по изготовлению и ремонту средств измерений, выданная Федеральным агентством по техническому регулированию и метрологии.</p>
                    <div class="mg-bottom-41"></div>
                    <a href="index.php" class="away">Перейти на официальный сайт</a>
                </div>
                <div class="col">
                    <div class="row ">
                        <div class="col-6 ">
                            <img src="img/image-15.png" alt="Первая картинка" class="img-fluid ">
                        </div>
                        <div class="col-6 ">
                            <img src="img/image-14.png" alt="Вторая картинка" class="img-fluid ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Второй блок финал-->

<!-- Третий блок -->
<div style="background: url('img/fon.png')" class="background1">
    <h3 class="h3-light pb-5">Тарифы на электроэнергию в Архангельской области</h3>
<div class="container bg-white custom-card1" >
    <table class="table text-center border-secondary">
    <thead class="align-middle">
        <tr>
            <th class="border-end border-secondary table-header" rowspan="2">№</th>
            <th class="border-end border-secondary table-header th-period" rowspan="2">Период</th>
            <th class="border-end border-secondary table-header th-tarif" rowspan="2">Одноставочный тариф, кВт.ч</th>
            <th class="border-end border-secondary border-bottom-0 table-header th-tarif2" colspan="2">Дифференцированный тариф по двум зонам суток</th>
            <th rowspan="2" class="table-header th-doc">Документ, устанавливающий тарифы</th>
        </tr>
        <tr>
            <td class="border-end border-secondary th-zone" >дневная зона (с 7 до 23 часов), кВт.ч</td>
            <td class="border-end border-secondary th-zone" >ночная зона (с 23 до 7 часов), кВт.ч</td>
        </tr>
    </thead>
    <tbody class="align-middle">
        <tr class="tr-hover">
            <th class="border-end border-secondary th-bok">1</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary" style="font-size: 16px;">4.91 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65 руб за 1 кВт.ч</td>
            <td class="td-download"><a href="#" class="download">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="img/download.svg"></a></td>
        </tr>
        <tr class="tr-hover">
            <th class="border-end border-secondary th-bok">2</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65 руб за 1 кВт.ч</td>
            <td class="td-download"><a href="#" class="download">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="img/download.svg"></a></td>
        </tr>
        <tr class="tr-hover">
            <th class="border-end border-secondary th-bok">3</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65 руб за 1 кВт.ч</td>
            <td class="td-download"><a href="#" class="download">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="img/download.svg"></a></td>
        </tr>
        <tr class="tr-hover">
            <th class="border-end border-secondary th-bok">4</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65 руб за 1 кВт.ч</td>
            <td class="td-download"><a href="#" class="download">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="img/download.svg"></a></td>
        </tr>
        <tr class="tr-hover">
            <th class="border-end border-secondary th-bok">5</th>
            <td class="border-end border-secondary">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary">4.91 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">5.65 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary">1.65 руб за 1 кВт.ч</td>
            <td class="td-download"><a href="#" class="download">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="img/download.svg"></a></td>
        </tr>
        <tr class="tr-hover">
            <th class="border-end border-secondary border-bottom-0 th-bok">6</th>
            <td class="border-end border-secondary border-bottom-0">01.01.20 — 30.06.20</td>
            <td class="border-end border-secondary border-bottom-0">4.91 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary border-bottom-0">5.65 руб за 1 кВт.ч</td>
            <td class="border-end border-secondary border-bottom-0">1.65 руб за 1 кВт.ч</td>
            <td class="border-bottom-0 td-download" ><a href="#" class="download">Постановление от 13 декабря 2019 г. № 81-э/30 <img class="pb-1" src="img/download.svg"></a></td>
        </tr>
    </tbody>
</table>
</div>
</div>
<!-- Третий блок финал -->

<!-- Четвёртый блок -->
<div class="mg-bottom-194"></div>
<div class="container">
    <div class="card col mt-5 mb-2 border-0 px-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col items-center">
                            <img class="img-news" src="img/lap.png" alt="">
                        </div>
                        <div class="col ms-5">
                            <h2 class="h2-about">Актуальные новости</h2>
                            <div class="mg-bottom-64"></div>
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
                                    <a class="a-more" href="new.php">Подробнее <img src="img/follow-arrow.svg" alt=""></a>
                                </div>
                                <div class="col">
                                    <p class="p-date">13.03.2020</p>
                                </div>
                            </div>
                            <div class="btn-mg-top"></div>
                            <div class="row ">
                                <div class="col">
                                    <a href="listnews.php" class="btn btn-lg btn-news">Все новости</a>
                                </div>
                                <div class="col arrow-nav">
                                    <a class="me-3" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><img src="img/left-arrow.svg" alt=""></a>
                                    <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><img src="img/right-arrow.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col items-center">
                            <img class="img-news" src="img/lap.png" alt="">
                        </div>
                        <div class="col ms-5">
                            <h2 class="h2-about">Актуальные новости</h2>
                            <div class="mg-bottom-64"></div>
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
                                    <a class="a-more" href="new.php">Подробнее <img src="img/follow-arrow.svg" alt=""></a>
                                </div>
                                <div class="col">
                                    <p class="p-date">13.03.2020</p>
                                </div>
                            </div>
                            <div class="btn-mg-top"></div>
                            <div class="row ">
                                <div class="col">
                                    <a href="listnews.php" class="btn btn-lg btn-news">Все новости</a>
                                </div>
                                <div class="col arrow-nav">
                                    <a class="me-3" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><img src="img/left-arrow.svg" alt=""></a>
                                    <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><img src="img/right-arrow.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Четвёртый блок финал -->

<!-- Пятый блок -->
<div class="mg-bottom-150"></div>
<div style="background: url('img/fonn.png')" class="background2">
    <div class="container mt-5 custom-card2">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="h2-about">О компании</h2>
                <div class=" mg-bottom-64"></div>
                <div class="row">
                    <div class="col">
                        <p class="mb-4 fs-5 p-about">ООО “ЭНСА” ведет установку и обслуживание системы АИИС КУЭ на базе КТС “МАЯК”.</p>
                        <p class="mb-4 fs-5 p-about">С нашей помощью СНТ, СОТы и любые граждане контролируют свои расходы за электроэнергию и исключают возможность воровства.</p>
                        <p class="mb-4 fs-5 p-about">На сайте Вы можете получить всю необходимую информацию по потребленной и оплаченной злектроэнергии</p>
                        <p class="mb-4 fs-5 p-about">Чтобы присоединиться или узнать подробности подключения обратитесь по адресу <a href="mailto:dm.5265@mail.ru" class="away-text">dm.5265@mail.ru</a> или <a href="#" class="away-text">оставить заявку</a> на сайте и мы свяжемся с Вами.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <img src="img/Group-130.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Пятый блок финал -->



</div>
</main>






<?php include 'includes/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-FtnA3zj1Hnvms/oxeKt/wk4WCjPyviN+taYoAl/e7lshCvF0JL6M2JaaIbZmtOeG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
