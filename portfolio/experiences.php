<?php
$experiences=yaml_parse_file("experiences.yaml");
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>PORTFOLIO Kylian</title>
            <link href="styles.css" rel="stylesheet">
        </head>
        <body>
            <div>
                <?php 
                    foreach($experiences['experiences'] AS $entreprises=>$tbEntreprises){
                        foreach($tbEntreprises AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                    echo'<p>'.$experiences['cv'].'</p>';
                ?>
                
            </div>
        </body>
    </html>