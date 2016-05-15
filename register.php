
<?php require_once('data/data.php');//le code va cherche le tableau data?>
<?php require_once('top.php');//le code va cherche le tableau data?>



<h3>S'incrire</h3>
<form action="" method="post">
    <div class="form-group">

        <label for ="">Pseudo</label>

        <input type = "text" name="username" required/>


    </div>
    <div class="form-group" >
        <label for ="">E-mail</label>

        <input type = "text" name="email" required/>

    </div>

    <div class="form-group" >
        <label for ="">Mot de passe</label>

        <input type = "password" name="password" required/>

    </div>



    <div class="form-group" >
        <label for ="">Confirmez votre mot de passe</label>

        <input type = "password" name="password_confirm" required/>

    </div>

<button type="submit">M'inscrire</button>
</form>


<?php require_once('views/forfaits.php'); ?>
<?php require_once ('views/footer.php'); ?>
