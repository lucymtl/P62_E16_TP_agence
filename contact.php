    <div class="main" id="main_reserver">

        <!-- *********** PAS DE SLIDER ***********-->

        <h1>Formulaire de réservation</h1>
        <!-- *********** FORM ************ -->

        <form action="mail_send.php" method="post" name="form_resa" id="form_resa" novalidate="novalidate">



            <!-- INFOS CLIENT-->
            <fieldset>
                <legend>Vos coordonnées</legend>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" value="">
                <p class="msg_erreur"  id="erreur_prenom">Veuillez saisir votre prénom.</p>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" value="">
                <p class="msg_erreur" id="erreur_email">Veuillez saisir un courriel valide.</p>
                <label for="email">Courriel</label>
                <input type="email" id="email" name="email" value="">
                <p class="msg_erreur"  id="erreur_tel">Veuillez saisir votre numéro de téléphone au format : (555)555-5555.</p>
                <label for="tel">Téléphone</label>
                <input type="tel" id="tel" name="tel" value="" placeholder ="(555)555-5555">
                <p class="msg_erreur" id="erreur_adresse">Veuillez saisir votre adresse.</p>
                <label for="adresse">Adresse</label>
                <textarea id="adresse" name="adresse" rows="10"></textarea>
            </fieldset><!-- end INFOS CLIENT-->

            <!-- INFOS FORFAIT-->
            <fieldset>
                <legend>Votre forfait</legend>
                <p class="msg_erreur" id="erreur_choix_forfait">Veuillez sélectionner un forfait.</p>
                <label for="choix_forfait">Sélectionner votre forfait :</label>
                <select id="choix_forfait" name="choix_forfait">
                    <optgroup label="Croisière">
                        <option value="0">L'atlantique emblématique</option>
                        <option value="1">Capitales scandinaves</option>
                        <option value="2">Du Groenland au St Laurent</option>
                        <option value="3">Croisière des ours blancs</option>
                    </optgroup>
                    <optgroup label="Sports d'hiver">
                        <option value="4">Motoneige (Charlevoix, Québec)</option>
                        <option value="5">Sommets du St Laurent en ski</option>
                        <option value="6">Ski de fond raquette à Tremblant</option>
                        <option value="7">Via ferrata des glaces</option>
                    </optgroup>
                    <optgroup label="Aventure">
                        <option value="8">Trekking du grand nord en hydravion</option>
                        <option value="9">Chiens et gîtes du grand nord</option>
                        <option value="10">Au sommet de l'Everest (8850 m.)</option>
                        <option value="11">Sermilik, la route des icebergs</option>
                    </optgroup>
                </select>


            </fieldset><!-- end INFOS FORFAIT-->


            <a href="#"><input id="btn_submit" type="submit" value="Réserver"></a>

        </form><!-- END form -->
    </div><!-- END body -->

