<?php
/* 
TIM SWERTS
LAST UPDATED: 18 03 30
DASH ADMIN KEUZEMOGELIJKHEID ADD/UPDATE
*/

    $arrayparameters = array();
    $arrayparameters['id'] = 'send';
    $arrayparameters['value'] = '0';
    $arrayparameters['type'] = 'submit';
    $arrayparameters['content'] = "Bevestig";
    
    $jaren = array('');
    $toevoegen = array('');
    $plaats = array('');

    foreach ($plaatsen as $plek) {
        array_push($plaats, $plek->naam);
    }
?>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});

            $('.dropdown-toggle').dropdown();

            $('.dropdown-item.plaats').click(function(event) {
                var checkboxID = $(event.target).data('item');
            });
        });
    </script>

    <?php echo form_open('keuzemogelijkheid/update', array('name' => 'keuzemogelijkheidFrom', 'id' => 'keuzemogelijkheidForm', 'role' => 'form'));  ?>
    
    <h2>Keuzemogelijkheid toevoegen voor jaar <?php echo $jaargang->naam; ?>:</h2>

<!-- =================================================================================================== GREIF MATTHIAS -->
    <div class="md-form">
        <input type="text" name="naam" id="keuzemogelijkheid" class="form-control">
        <label for="keuzemogelijkheid">Naam:</label>
    </div>

    <!-- <div class="md-form">
        <?php echo form_dropdown("plaats", $plaats) ?>
        <label for="plaats">Plaats:</label>
    </div> -->

    <div class="btn-group">
        <button id="plaats" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $plaats[0]; ?></button>

        <div class="dropdown-menu">
            <?php foreach($plaats as $p){ ?>
            <a class="dropdown-item plaats" href="#" data-item="<?php echo $p; ?>"><?php echo $p; ?></a>
            <?php } ?>
        </div>
    </div>

    <div class="md-form">
        <input id="begin" name="beginTijdstip" size="16" type="text" value="<?php echo date('Y-m-d'); ?>" readonly class="form_datetime">
        <label for="begin">Begin datum en tijdstip:</label>
    </div>

    <div class="md-form">
        <input id="einde" name="eindTijdstip" size="16" type="text" value="<?php echo date('Y-m-d'); ?>" readonly class="form_datetime">
        <label for="einde">Eind datum en tijdstip:</label>
    </div>

    <div class="md-form">
        <input id="deadline" name="deadlineTijdstip" size="16" type="text" value="<?php echo date('Y-m-d'); ?>" readonly class="form_datetime">
        <label for="deadline">Deadline datum en tijdstip:</label>
    </div>

    <input type="hidden" name="jaar" value="<?php echo $plaats[0]; ?>">
<!-- =================================================================================================== /GREIF MATTHIAS -->
    <?php
        echo form_hidden('jaar', $jaargang->id);
        echo form_button($arrayparameters);
        echo form_close();
    ?>

    <?php echo anchor('admin/dash/keuzemogelijkheidbeheer/'.$jaargang->id,'Annuleer','class="btn btn-primary"');?>    