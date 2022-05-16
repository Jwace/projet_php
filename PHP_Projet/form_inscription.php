<?php
include("header.php");
?>

<section>
        <form action="resultat.html" method="get" name="formulaire" onsubmit="return validerFormulaire()">
            <div>
                <label for="nom_user">Nom :</label>
                <input type="text" name="nom_user" id="nom_user" onkeyup="verifierNom()">
                <span id="champNom" class="test">Saisissez un nom, entre 2 et 10 caracteres</span>
            </div>
            <div>
                <label for="prenom_user">Prenom :</label>
                <input type="text" name="prenom_user" id="prenom" onkeyup="verifierPrenom()">
                <span id="champPrenom" class="test">Saisissez un prenom, entre 2 et 10 caracteres</span>
            </div>
            <div>
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" onkeyup="verifierAdresse()">
                <span id="champAdresse" class="test">Saisissez votre ville de résidence</span>
            </div>
            <div>
                <label for="email_user">Email :</label>
                <input type="email" name="email_user" id="email_user" onkeyup="verifierEmail()" placeholder="moi@test.fr">
                <span id="champEmail" class="test">Saisir une adresse email valide</span>
            </div>
            <div>
                <label for="telephone_user">Telephone :</label>
                <input type="tel" name="telephone_user" id="telephone_user" onkeyup="verifierTel()" placeholder="01 23 45 67 89">
                <span id="champTel" class="test">Saisir un numéro de téléphone valide</span>
            </div>

            <hr>
            <div>
                <div id="explication">
                    <ul>
                        <li><img id="case1" src="img/vide.png" alt="une case" height="21">
                            Le mot de passe doit contenir des lettres et des chiffres
                        </li>
                        <li><img id="case2" src="img/vide.png" alt="une case" height="21">
                            Le mot de passe doit contenir au moins un caractère spécial
                        </li>
                        <li><img id="case3" src="img/vide.png" alt="une case" height="21">
                            Le mot de passe doit être compris entre 5 et 15 caractères
                        </li>
                    </ul>
                </div>

                <div>
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" name="mdp" id="mdp"
                        onkeyup="verifierMdp()"
                        onfocus="document.getElementById('explication').style.display = 'block'"
                        onblur="document.getElementById('explication').style.display = 'none'">
                    <span id="champMdp" class="test">Le mot de passe est trop faible.</span>
                </div>
                <div>
                    <label for="mdp2">Confirmer passe :</label>
                    <input type="password" name="mdp2" id="mdp2" onkeyup="verifierMdp2()">
                    <span id="champMdp2" class="test"></span>
                </div>
            </div>

            <hr>
            <div>
                <label for="accept">Acceptez les conditions d'utilisation :</label>
                <input type="checkbox" name="accept" id="accept">
                <span id="champAcceptation" class="test">Veuillez accepter les <a href="#">conditions</a> pour continuer</span>
            </div>

            <p>
                <input type="submit" value="Envoyer">
            </p>
        </form>
    </section>

    <script type="text/javascript" src="js/script.js"></script>

<?php
include("footer.php");
?>