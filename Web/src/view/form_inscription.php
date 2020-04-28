<?php
    include_once 'heater.php';
    extract($_GET);
?>

<form id="corp" method="post" action="../controller/verif_inscription.php?value=<?= $value?>">
    <div class="form-row">
        <div class="form-group col-md-6 mb-3">
            <label for="inputEmail4">Prenom</label>
            <input type="text" oninput="inputChange(this)" class="form-control <?php if(isset($f) && $f) echo "is-valid"; else if(isset($f)) echo "is-invalid";?>" id="inputFirstName4" name="firstName" required
            value="<?php if(isset($fi)) echo $fi;?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nom</label>
            <input type="text" oninput="inputChange(this)" class="form-control <?php if(isset($n) && $n) echo "is-valid"; else if(isset($n)) echo "is-invalid";?>" id="inputName" name="name" required
            value="<?php if(isset($na)) echo $na;?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" oninput="inputChange(this)" class="form-control <?php if(isset($m) && $m) echo "is-valid"; else if(isset($m)) echo "is-invalid";?>" id="inputEmail4" name="mail" required
            value="<?php if(isset($ma)) echo $ma;?>">
            <div class="invalid-tooltip">
                <?php
                    if(isset($vm) && $vm == 1)
                    {
                        echo "L'adresse utiliser est déjà inscrite au site";
                    }
                    else
                    {
                        echo "Indiquer une adresse mail valide";
                    }
                ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" oninput="inputChange(this)" class="form-control <?php if(isset($p) && $p) echo "is-valid"; else if(isset($p)) echo "is-invalid";?>" id="inputPassword4" name="password" required>
            <div class="invalid-tooltip">
                Au moin une majuscule,une minuscule et un caractère spécial
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Date de naissance</label>
            <input type="text" oninput="inputChange(this)" class="form-control <?php if(isset($d) && $d) echo "is-valid"; else if(isset($d)) echo "is-invalid";?>" id="inputDate" placeholder="dd/mm/yyyy" name="date" required
            value="<?php if(isset($da)) echo $da;?>">
            <div class="invalid-tooltip">
                Utiliser le format JJ/MM/AAAA
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="remenber">
        <label class="form-check-label" for="gridCheck">
            Se souvenir de moi
        </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="formSend">Sign in</button>
</form>
<script>
    function inputChange(form)
    {

        if($(form).hasClass('is-invalid'))
        {
            $(form).removeClass('is-invalid');
        }
        else if($(form).hasClass('is-valid'))
        {
            $(form).removeClass('is-valid');
        }
    }
</script>