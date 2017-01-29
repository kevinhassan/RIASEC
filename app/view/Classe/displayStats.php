<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui fluid container">
    <h1 class="ui teal icon center aligned header">
        <i class="bar chart icon"></i>
        <div class="content">
            Comparaison Classe
        </div>
    </h1>
    <div class="ui hidden divider"></div>
    <div class="ui center aligned container">
        <div class="column">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>


<?php include(ROOT."/app/view/footer.php"); ?>

<script type="text/javascript" src="plugins/nnnick/chartjs/dist/Chart.bundle.js"></script>

<script>

    var barChartData = {
        options : {
            scaleBeginAtZero: false
        },

        labels: [<?php echo '"'.$this->classe[0][0]." - Promotion ".$this->classe[0][1].'","'.$this->classe[1][0]." - Promotion ".$this->classe[1][1].'"';?>],//Affiche le nom des deux promos sélectionnées dans le graphique
        datasets: [{
            label: 'Realiste',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            data: [
                <?php echo $this->results[0][1].','.$this->results[1][1];?>
            ]
        }, {
            label: 'Investigatif',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: [
                <?php echo $this->results[0][2].','.$this->results[1][2];?>
            ]
        },
            {
                label: 'Artistique',
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1,
                data: [
                    <?php echo $this->results[0][3].','.$this->results[1][3];?>
                ]
            },
            {
                label: 'Social',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [
                    <?php echo $this->results[0][4].','.$this->results[1][4];?>
                ]
            },
            {
                label: 'Entrepreneur',
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1,
                data: [
                    <?php echo $this->results[0][5].','.$this->results[1][5];?>
                ]
            },
            {
                label: 'Conventionnel',
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1,
                data: [
                    <?php echo $this->results[0][6].','.$this->results[1][6];?>
                ]
            }]

    };

    var ctx = document.getElementById("myChart");
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        min: 0,
                        max: 100
                    }
                }]
            },
            responsive: true,
            legend: {
                position: 'right'
            }
        }
    });
</script>
