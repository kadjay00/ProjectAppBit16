<?php foreach($keuzemogelijkheden as $activiteit) {

    echo "<h2>".$activiteit->naam."</h2>";
    foreach ($activiteit->taken as $taak) {
        echo "<p>".$taak->naam."</p>"
    }

};
?>