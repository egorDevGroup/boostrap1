<?php
include 'header.php';
?>
<body class="w100" onload="loading()">


<nav class="navbar navbar-expand-lg d-flex justify-content-between bg-dark container-fluid">
    <a href="#" class="navbar-brand text-whit">Home</a>




    <div id="navItems" class="navbar-collapse collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link">Main</a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">Production</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contacts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider text-danger"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>


    </div>

    <div class="tel text-white">89228635635</div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navItems" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-dark"></span>
    </button>
</nav>

<!--    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2">1</div>
            <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2">2</div>
            <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2">3</div>
            <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2">4</div>
            <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2">5</div>
            <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2">6</div>
        </div>
    </div>-->


<div id="resp"></div>
<span id="placeValue"></span>
<script>
    var var1 = "old value";
    document.getElementById("placeValue").innerText = var1;

</script>
<input  type="button" id="sendResp" value="Отправить переменную">







<div class="callback w-100 h-50 p-4">
    <div id="response">

    </div>

    <div class="input-group w-50 mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text" >Name</span>
        </div>
        <input class='form-control' type="tel" id="name" placeholder="Name">
    </div>
    <div class="input-group w-50">
        <div class="input-group-prepend">
            <span class="input-group-text">Tel</span>
        </div>
        <input class='form-control' type="tel" id='tel' placeholder="Phone">
    </div>
    <button class="btn btn-outline-success mt-4" id="sendTask">
        <span>Подать заявку</span>
    </button>


</div>

<div class="landing-photo w100 d-flex justify-content-center align-items-center flex-column">

    <div class="text-light display-1 center-label">Поверь в мечту</div><br>
    <div class="text-light display-3 center-label">Поверь в мечту вместе с нами</div>
    <button type="button" id="sign" class="btn btn-danger p-4 wh-25" data-toggle="modal" data-target="#staticBackdrop">Записаться</button>
</div>

<!-- <i class="fab fa-apple fa-8x text-danger"></i> -->
<div class="products">
    <div class="row">
        <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-5 d-flex justify-content-center" ><span class="fa-2x text-danger d-car d-flex justify-content-center flex-column">Автомобили<i class="ml-5 d-block fas fa-car fa-3x"></i></span></div>
        <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-5 d-flex justify-content-center" ><span class="fa-2x text-danger d-fish d-flex justify-content-center flex-column">Продукты<i class="ml-5 d-block fas fa-utensils fa-3x"></i></span></div>
        <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-5 d-flex justify-content-center" ><span class="fa-2x text-danger d-flex justify-content-center flex-column">Камеры<i class="ml-5 d-block fas fa-camera fa-3x "></i></span></div>
        <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-5 d-flex justify-content-center" ><span class="fa-2x text-danger d-block d-flex justify-content-center flex-column text-align-center">Ноутбуки<i class="ml-5 d-block fas fa-laptop fa-3x"></i></span></div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Заявка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>


<form action="">

    <input type="text" class="form-control" required>
    <input type="submit" >


</form>

</body>
</html>