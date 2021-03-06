    <footer class="ui inverted vertical footer segment">
            <div class="ui center aligned container">
                <div class="ui stackable inverted divided grid">
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Plan du site</h4>
                        <div class="ui inverted link list">
                            <a href="./" class="item">Accueil</a>
                            <?php
                                if(isset($this->data['userData']) && $this->data['userData']["role"] === 'etudiant' && !isset($this->data['questionnaireRealise'])) {
                                    echo '<a href="?query=questionnaire" class="item">Questionnaire</a>';
                                }
                                else if(isset($this->data['userData']) && $this->data['userData']["role"] === 'etudiant' && isset($this->data['questionnaireRealise'])) {
                                    echo '<a href="?query=resultat" class="item">Résultat</a>';
                                }
                            ?>
                            <?php
                                if(isset($this->data['userData']) && $this->data['userData']["role"] === 'admin'){
                                    echo '<a href="?query=classe" class="item">Statistiques</a>';
                                }
                            ?>
                            <?php
                                if(!isset($this->data['userData'])) {
                                    echo '<a href="?query=register/etudiant" class="item">S\'enregistrer</a>';
                                }
                            ?>
                            <?php
                                if (isset($this->data['userData']) && $this->data['userData']["role"] === 'admin'){
                                    echo '<a href="?query=dashboard" class="item">Dashboard</a>';
                                }
                            ?>
                            <?php
                            if(isset($this->data['userData']) && ($this->data['userData']["role"] === 'etudiant'||($this->data['userData']["role"] === 'admin'))){
                                if($this->title === 'Mon Profil')
                                    echo '<a class="active item" href="?query=profile">Mon Profil</a>';
                                else
                                    echo '<a class="item" href="?query=profile">Mon Profil</a>';
                            }
                            ?>
                            <?php
                                if(isset($this->data['userData'])) {
                                    echo '<a href="?query=login/disconnect" class="item">Déconnexion</a>';
                                }
                                else{
                                    echo '<a href="?query=login" class="item">Connexion</a>';
                                }
                            ?>

                        </div>
                    </div>
                    <div class="nine wide column">
                        <h4 class="ui inverted header">Création du site</h4>
                        <p>Ce site a été réalisé dans le cadre d'un projet scolaire.</p>
                        <p>Basé sur du pur MVC PHP et mise en forme par <a href="http://semantic-ui.com/" title="Framework CSS" target="_blank">Semantic-UI</a> </p>
                        <p>Voir le dépôt officiel : <a href="https://github.com/kevinhassan/RIASEC" target="_blank"><i class="github icon"></i></a></p>
                    </div>
                </div>
                <div class="ui inverted section divider"></div>
                <img src="favicon.ico" class="ui centered mini image">
                <div class="ui horizontal inverted small divided link list">
                    <a class="item" href="#">Plan du site</a>
                    <a class="item" href="#">Nous contacter</a>
                    <a class="item" href="#">Termes & Conditions</a>
                    <a class="item" href="#">Politique de vie privée</a>
                    <div class="ui inverted section">
                        <p>Kévin Hassan<i class="copyright icon"></i>2017</p>
                    </div>
                </div>
            </div>
        </footer>
       </body>
    <script type="text/javascript" src="assets/js/navbar.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    </html>
