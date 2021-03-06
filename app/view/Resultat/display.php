<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui fluid container">
    <h1 class="ui teal icon center aligned header">
        <i class="user icon"></i>
        <div class="content">
            Résultats
        </div>
    </h1>
    <div class="ui hidden divider"></div>
    <div class="ui center aligned two column doubling stackable grid container">
        <div class="column">
            <div class="ui centered card">
                <div class="image">
                    <img src="./assets/img/student.svg">
                </div>
                <div class="content">
                    <h1 class="header"><?php echo $this->personnaliteDominante["intitule"];?></h1>
                    <div class="description">
                        <?php echo $this->personnaliteDominante["description"];?>
                    </div>
                </div>
                <a class="ui green bottom attached button" href=<?php echo '"./assets/docs/'.$this->personnaliteDominante["personnalite_id"].'.pdf"'?>>
                    <i class="file pdf outline icon"></i>
                    Télécharger fiche
                </a>
            </div>
        </div>
        <div class="column">
            <canvas id="myChart"></canvas>
            <h5 class="ui center aligned header">
                <div class="content">
                    L'hexagone RIASEC d'Holland
                </div>
            </h5>
        </div>
</div>



<?php include(ROOT."/app/view/footer.php"); ?>


<script type="text/javascript" src="plugins/nnnick/chartjs/dist/Chart.bundle.js"></script>
<script type="text/javascript" src="assets/js/hexagone.js"></script>
