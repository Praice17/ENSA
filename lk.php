<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="mg-bottom-41"></div>
<div style="background: url('img/fon3.png') top no-repeat;">
    <h3 class="h3-news pb-5" >Личный кабинет</h3>
    <div class="container bg-white custom-card3">
        <div class="row">
            <div class="col card-main">
                <img class="" src="img/profile-pic.png" alt="">
            </div>


        </div>
    </div>
</div>



<div class="mg-bottom-150"></div> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'modautoriz.php'; ?>

    <div class="mg-bottom-41"></div>
<div style="background: url('img/fon3.png') top no-repeat;">
    <h3 class="h3-news pb-5" >Личный кабинет</h3>
    <div class="container bg-white custom-card4">
        <div class="row">
            <div class="col-md-4">
                
                    <div class="text-center">
                        <img src="img/profile-pic.png" class="mb-3" alt="Профиль">
                        <div class="mg-bottom-23"></div>
                        <button type="button" class="btn btn-pass" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Сменить пароль</button>
                    </div>
                
            </div>
            <div class="col-md-8">
                
                        <div class="mb-3">
                            <label for="fullName" class="form-label pages">ФИО:</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" value="Иванов Иван Иванович" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="birthDate" class="form-label pages">Дата рождения:</label>
                            <input type="text" class="form-control" id="birthDate" name="birthDate" value="01.01.1990" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label pages">Телефон:</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="+7 (123) 456-7890" readonly>
                        </div>
                </div>
        </div>
    </div>

    <!-- Modal-->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Сменить пароль</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form-->
                    <form>
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Текущий пароль:</label>
                            <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Новый пароль:</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Подтвердите новый пароль:</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        </div>
                        <button type="submit" class="btn btn-save">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="mg-bottom-95"></div>


<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-FtnA3zj1Hnvms/oxeKt/wk4WCjPyviN+taYoAl/e7lshCvF0JL6M2JaaIbZmtOeG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
