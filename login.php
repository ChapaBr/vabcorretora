<!-- Include Header -->
<?php include('layouts/header.php'); ?>

<section id="loginSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="controller/Login.php" method="POST">
                    <div class="form-group">
                        <label for="login" class="forms-label">Login</label>
                        <input type="text" class="form-control form_style" name="login" id="login">
                    </div>
                    <div class="form-group">
                        <label for="password" class="forms-label">Senha</label>
                        <input type="password" class="form-control form_style" name="password" id="password">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn_login">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Include Footer -->
<?php include('layouts/footer.php'); ?>