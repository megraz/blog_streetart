<?php include "header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Connexion</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;" >Connexion</button>
                </form>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>

<?php include("footer.php"); ?>