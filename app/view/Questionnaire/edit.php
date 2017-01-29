<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

    <div class="ui main text container">
        <h1 class="ui center aligned teal segment header">Edition du questionnaire
            <div class="sub header">Double cliquer pour modifier l'intitulé d'un groupe.</div>
        </h1>
        <?php
            for ($j=1;$j<=12;$j++){
                echo '<h3 class="ui header center aligned ">Groupe '.$j.'</h3>';
                echo '<form class="ui form" method="post" action="?query=questionnaire/edit/'.$j.'">';
                echo <<<EOT
                    <table class="ui celled table">
                    <thead class="center aligned"> <!-- En-tête du tableau -->
                    <tr>
                        <th>Intitulé</th>
                    </tr>
                    </thead>
                    <tbody> <!-- Corps du tableau -->
EOT;
                for ($i=0;$i<6;$i++){
                    echo "<tr><td name=".$this->propositions[$j][$i]['proposition_id'].">".$this->propositions[$j][$i]['intitule']."</td>";
                }
                echo<<<EOT
                    </tbody>
                      <tfoot class="full-width">
                        <tr>
                          <th>
                            <button class="ui right floated small primary labeled icon button" type="submit">
                              <i class="save icon"></i> Valider
                            </button>
                          </th>
                        </tr>
                      </tfoot>
                </table>
                </form>
EOT;
            }
        ?>
    </div>

<script>
    $('h3').click(function(){
        if($(this).next().find('table').css('display') == 'none'){
            $(this).next().find('table').show();
        }else{
            $(this).next().find('table').hide();
        }

    });
    $('.ui.celled.table tr').dblclick(function(){
        var current = $(this).text();
        var idProposition = $(this).find('td[name]').attr("name");
        $(this).html('<textarea name='+idProposition+'>'+current+'</textarea>');
        $(this).focus();
        $('tfoot').show();
    });
</script>
<style>
    .ui.celled.table{
        display: none;
    }
    tfoot{
        display: none;
    }
</style>
<?php include(ROOT."/app/view/footer.php"); ?>