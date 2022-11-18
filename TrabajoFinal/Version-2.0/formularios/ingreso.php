<div class="col-md-8">
    <div class="card">
        <div class="card-header text-center h2">Ingreso</div>
        <div class="card-body">
            <form action="control/validacionIngreso.php" method="POST" autocomplete="on">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de Usuario</label>
                    <input type="text" name="nombreUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
                    <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</!--small-->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="contraseñaUsuario" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-form btn-primary ">Ingresar</button>
                </div>
                <div class="form-group">
                    <br>
                    <p class="text-center">¿No esta registrado? <a class="link" href="#" onClick="llamadaAsincrona('registro')">Registrarse</a> </p>
                </div>
            </form>
        </div>
    </div>
</div>