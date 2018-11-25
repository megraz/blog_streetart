<?php include "header.php";?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Inscription</h1>
            <form>
                <div class="form-group row">
                    <div class="col">
                        <label for="formGroupExampleInput">Nom</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                        <label for="inputEmail3" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail3" required>
                        <label for="inputPassword3" class="col-form-label">Mot de passe (8 caractères minimum)</label>
                        <input type="password" class="form-control" id="inputPassword3" name="password" minlength="8" required>
                        <label for="inputPassword3" class=" col-form-label">Confirmer mot de passe</label>
                        <input type="password" class="form-control" id="inputPassword3" required>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Inscription</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php include "footer.php";?>