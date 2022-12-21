<?php
$formations=yaml_parse_file("experiences.yaml");
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>PORTFOLIO Kylian</title>
            <link href="styles.css" rel="stylesheet">
        </head>
        <body>
            <div class="experiences">
                <h3>Expériences</h3>
                <ul class="formation">
                    <?php 
                        foreach($formations ['formation1'] AS $formation=>$tbFormations){
                            foreach($tbFormations AS $description=>$réponse){
                                echo'<p>'.$réponse.'</p>';
                            }
                        }
                    ?>
                </ul>
                <ul class="formation">
                    <?php 
                        foreach($formations ['formation2'] AS $formation=>$tbFormations){
                            foreach($tbFormations AS $description=>$réponse){
                                echo'<p>'.$réponse.'</p>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </body>
    </html>