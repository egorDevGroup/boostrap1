<?php
    require 'header.php';




?>


<form class="m-4 p-4 text-white w-50 bg-dark" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label id="serverResponse"></label>
        <input type="text" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">

        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <input type="button" class="checking" value="check">
</form>


<script>
var var1="Vladimir";
    $(function () {

        var myForm = $('form');
        myForm.on('submit', function() {

            $('#serverResponse').load('php/workingWithVariables.php', {'var' : var1});

            // Чтоб страница не перезагрузилась
            return false;
        });


        $("button[type='submit']").on('click', function() {
            myForm.submit();


        });
        $(".checking").on('click', function() {
            alert(var1);


        });


    });
</script>

