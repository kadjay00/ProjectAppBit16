<?php
/* 
TIM SWERTS
LAST UPDATED: 18 03 30
DASH ADMIN KEUZEMOGELIJKHEID ADD/UPDATE
*/

    $arrayparameters = array();
    $arrayparameters['id'] = 'send';
    $arrayparameters['class'] = 'btn btn-primary';
    $arrayparameters['value'] = '0';
    $arrayparameters['type'] = 'submit';
    $arrayparameters['content'] = "Bevestig";
?>
    <?php echo form_open('keuzemogelijkheid/update', array('name' => 'keuzemogelijkheidFrom', 'id' => 'keuzemogelijkheidForm', 'role' => 'form'));  ?>
    
    <h2>Keuzemogelijkheid toevoegen voor jaar <?php echo $jaargang->naam; ?>:</h2>

<!-- =================================================================================================== GREIF MATTHIAS -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd'});

            $('.dropdown-toggle').dropdown();

            $('.dropdown-item.plaats').click(function(event) {
                $('#btnPlaats').text($(event.target).data('naam'));
                $('#inpPlaats').val($(event.target).data('id'));
            });
        });
    </script>

    <div class="md-form">
        <label for="keuzemogelijkheid" class="labelKeuze">Naam:</label>
        <input type="text" name="naam" id="keuzemogelijkheid" class="form-control">
    </div>

    <div class="btn-group">
        <button id="btnPlaats" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plaats</button>

        <div class="dropdown-menu">
            <?php foreach($plaatsen as $p){ ?>
            <a class="dropdown-item plaats" href="#" data-naam="<?php echo $p->naam; ?>" data-id="<?php echo $p->id; ?>"><?php echo $p->naam; ?></a>
            <?php } ?>
        </div>
    </div>

    <div class="md-form">
        <label for="begin" class="labelKeuze">Begin datum en tijdstip:</label></br>
        <input id="begin" type="date" name="beginTijdstip" value="<?php echo date('Y-m-d'); ?>">
    </div>

    <div class="md-form">
        <label for="einde" class="labelKeuze">Eind datum en tijdstip:</label>
        <input id="einde" type="date" name="eindTijdstip" value="<?php echo date('Y-m-d'); ?>">
    </div>

    <div class="md-form">
        <label for="deadline" class="labelKeuze">Deadline datum en tijdstip:</label>
        <input type="date" name="deadlineTijdstip" value="<?php echo date('Y-m-d'); ?>">
    </div>

    <input id="inpPlaats" type="hidden" name="plaats" value="<?php echo $plaatsen[0]->id; ?>">
<!-- =================================================================================================== /GREIF MATTHIAS -->
    <?php
        echo form_hidden('jaar', $jaargang->id);
        echo form_button($arrayparameters);
        echo form_close();
    ?>

    <?php echo anchor('admin/dash/keuzemogelijkheidbeheer/'.$jaargang->id,'Annuleer','class="btn btn-warning"');?>    