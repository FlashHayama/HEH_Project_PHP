<?php
    include_once 'heater.php';
?>

<form id="corp">
    <div class="form-row">
        <div class="form-group col-md-6 mb-3">
            <label for="inputEmail4">Prenom</label>
            <input type="text" class="form-control" id="inputEmail4" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nom</label>
            <input type="text" class="form-control" id="inputPassword4" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" required>
            <div class="invalid-tooltip">
                Indiquer une adresse mail valide
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" required>
            <div class="invalid-tooltip">
                Au moin une majuscule,une minuscule et un caractère spécial
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Date de naissance</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="dd/mm/yyyy" required>
            <div class="invalid-tooltip">

            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Se souvenir de moi
        </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>