
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-05-11
 * Time: 21:50
 */


<?php //require_once 'header.php'?>
<h1>S'incrire</h1>
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
<form class="loggoff" action="" method="post">

    <div class="form-group" >

        <button type="submit">SUBMIT</button>

    </div>
</form>

<?php //require_once 'footer.php'?>

