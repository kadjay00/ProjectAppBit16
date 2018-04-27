<?php foreach($keuzemogelijkheden as $activiteit) {

    echo '<div class="shiften card"><div class="card-header bg-primary text-white">'.$activiteit->naam.'</div><div class="card-body"><ul class="list-group">';
    foreach ($activiteit->taken as $taak) {
        echo '<li class="list-group-item justify-content-between align-items-center"><p><b>'.$taak->functie.':</b></p><ul class="list-group">';
        foreach ($taak->shiften as $shift ) {
            echo '<li class="list-group-item justify-content-between align-items-center">'.$shift->naam;
            echo '<button class="btn btn-success float-right inschrijven" value="'.$shift->id.'">Inschrijven</button>';
        }
        echo "</li></ul></li>";
    };
    echo "</ul></div></div>";
};
?>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({url: "shiften/vrijwilligerInShiftToevoegen", success: function(result){
            $(".card").html(result);
        }});
    });
});
</script>