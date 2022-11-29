<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/Encripatdor/Template/header.php';
?>
<div class="container-lg text-center" style="height: 100%;">
    <div class="row ">
        <div class="jumbotron">
            <h1 class="display-3">Encriptador</h1>
            <p class="lead">Practicando un encriptador</p>
            <hr class="my-2">
        </div>
        <div class="col-md-7">
            <form action="">
                <div class="form-group">
                    <label for="">Ingresa tu texto para encriptarlo</label>
                    <textarea class="form-control" name="" id="" rows="6"></textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" name="" id="" class="btn btn-outline-light" btn-lg btn-block">Encriptar</button>
                    <button type="submit" name="" id="" class="btn btn-outline-light" btn-lg btn-block">Desencriptar</button>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Texto Encriptado</label>
                <textarea class="form-control" name="" id="" rows="8"></textarea>
            </div>
        </div>
    </div>
</div>
<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/Encripatdor/Template/footer.php';
?>