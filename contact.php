<?php
require_once('defines.php');
require_once('top.php');//le code va cherche le tableau data
require_once('views/banner.php');

?>

<div class="main" id="wrap">
    
    <form method="post" action="reserver.php"><!-- Par défaut la méthode est get-->
        <p <?= $receiving && ( ! $nom_valide) ? 'class="invalide"' : '' ?>>
            <label for="nom">Nom :</label>
            <input id="nom" type="text" name="nom" value="<?= $nom ?>"/>
            <?php if ($receiving && ( ! $nom_valide)) {
                echo "<br/><span class='msg_validation' style='color: red'>($nom_msg_validation)<span>";
            } ?>
        </p>

        <p <?= $receiving && ( ! $email_valide) ? 'class="invalide"' : '' ?>>
            <label for="email">Courriel :</label>
            <input id="email" type="text" name="email" value="<?= $email ?>"/>
            <?php if ($receiving && ( ! $email_valide)) {
                echo "<span class='msg_validation' style='color: red'>($email_msg_validation)<span>";
            } ?>
        </p>
 
        <p <?= $receiving && ( ! $forfait_valide) ? 'class="invalide"' : '' ?>><label id="forfait" for="forfait">Forfaits :</label>
            <select id="forfait" name="forfait">
                <option value="(none)" <?= '(none)' == $forfait ? 'selected="selected"' : '' ?>>Choisir le forfait</option>
                <option value="Croisiére" <?= 'Croisiére' == $forfait ? 'selected="selected"' : '' ?>>Croisiére</option>
                <option value="Family" <?= 'Family' == $forfait ? 'selected="selected"' : '' ?>>Family</option>
                <option value="Sport d'hiver" <?= "Sport d'hiver" == $forfait ? 'selected="selected"' : '' ?>>Sport d'hiver</option>
                <option value="Nature" <?= 'Nature' == $forfait ? 'selected="selected"' : '' ?>>Nature</option>
            </select>
            <?php if ($receiving && (!$forfait_valide)) {
                echo "<span class='msg_validation' style='color: red'>($forfait_msg_validation)<span>";
            } ?>
        </p>


        <!-- Nombre des personnes -->

        <p <?= $receiving && ( ! $forfait_valide) ? 'class="invalide"' : '' ?>><label for="Nombre_adultes">Nombre d'adultes :</label>
            <select id="Nombre_adultes" name="Nombre_adultes">
                <option value="1 personnes" <?= '1 personnes' == $forfait ? 'selected="selected"' : '' ?>>1 personnes</option>
                <option value="2 personnes" <?= '2 personnes' == $forfait ? 'selected="selected"' : '' ?>>2 personnes</option>
                <option value="3 personnes" <?= "3 personnes" == $forfait ? 'selected="selected"' : '' ?>>3 personnes</option>
                <option value="4 ou plus" <?= '4 ou plus' == $forfait ? 'selected="selected"' : '' ?>>4 ou plus</option>
            </select>
            <?php if ($receiving && (!$Nombre_adultes_valide)) {
                echo "<span class='msg_validation' style='color: red'>($Nombre_adultes_msg_validation)<span>";
            } ?>
        </p>

        <!-- sexe -->
        
        <p <?= $receiving && ( ! $sexe_valide) ? 'class="invalide"' : '' ?>><label name="homme" for="sexe_h">Homme :</label>
            <input type="radio" id="sexe_h" name="sexe" value="sexe_h"
                <?= $receiving && ('sexe_h' == $sexe) ? 'checked="checked"' : '' ?>
            />
            <label for="sexe_f">Femme :</label>
            <input type="radio" id="sexe_f" name="sexe" value="sexe_f"
                <?= $receiving && ('sexe_f' == $sexe) ? 'checked="checked"' : '' ?>
            />
            <?php if ($receiving && (!$sexe_valide)) {
                echo "<span class='msg_validation' style='color: red'>($sexe_msg_validation)<span>";
            } ?>
        </p>

        <!-- Champs checkbox -->

        <p <?= $receiving && ( ! $opitons_valide) ? 'class="invalide"' : '' ?>>
            <label for="opitons_lecteur">opitons1 :</label>
            <input type="checkbox" id="opitons_lecteur" name="opitons[]" value="opitons_lecteur"
                <?= $receiving && is_array($opitons) && in_array('opitons_lecteur',$opitons) ? 'checked="checked"' : '' ?>
            />
            <label for="opitons_redacteur">opitons2 :</label>
            <input type="checkbox" id="opitons_redacteur" name="opitons[]" value="opitons_redacteur"
                <?= $receiving && is_array($opitons) && in_array('opitons_redacteur',$opitons) ? 'checked="checked"' : '' ?>
            />
            <label for="opitons_moderateur">opitons3 :</label>
            <input type="checkbox" id="opitons_moderateur" name="opitons[]" value="opitons_moderateur"
                <?= $receiving && is_array($opitons) && in_array('opitons_moderateur',$opitons) ? 'checked="checked"' : '' ?>
            />
            <?php if ($receiving && (!$opitons_valide)) {
                echo "<span class='msg_validation' style='color: red'>($opitons_msg_validation)<span>";
            } ?>
        </p>

        <!-- Champ comentaire (textarea) -->

        <p <?= $receiving && ( ! $commentaire_valide) ? 'class="invalide"' : '' ?>>
            <label for="nom">Commentaire :</label>
            <textarea id="commentaire" name="commentaire" ><?= $commentaire ?></textarea>
            <?php if ($receiving && ( ! $commentaire_valide)) {
                echo "<span class='msg_validation' style='color: red'>($commentaire_msg_validation)<span>";
            } ?>
        </p>

        <p style="clear: both;"><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">Suprimer les donnés</a></p>
        <p><input id="submit" type="submit" name="soumettre" value="Soumettre"/></p>

        </form><!-- END form -->

    </div><!-- END body -->


<?php require_once('views/forfaits.php'); ?>
<?php require_once ('views/footer.php'); ?>
