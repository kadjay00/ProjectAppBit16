<div class="form-group">
    <?php
    $attributes = array('name' => 'plaats');
?>
    <table  class="table table-condensed" >
    <thead><tr><th>Naam</th> <th>Plaats</th> <th>Opgericht op</th><th> </th></tr></thead><tbody>
        <?php
        foreach ($plaatsen as $plaats) {
            echo "<tr><td>" . $plaats->naam . "</td><td>" . $plaats->locatie . "</td></tr>" ;
        }
        ?>
    </tbody>
    <table>
<?php
    echo form_open('plaats/registreer', $attributes);

    echo form_labelpro('Naam', 'naam');
    echo form_input(array('name' => 'naam',
        'id' => 'naam',
        'value' => $plaats->naam,
        'class' => 'form-control',
        'required' => 'required'));

    echo '</br>';
    echo form_labelpro('Locatie', 'locatie');
    echo form_input(array('name' => 'locatie',
        'id' => 'locatie',
        'value' => $plaats->locatie,
        'class' => 'form-control',
        'required' => 'required'));


    echo form_hidden('id', $plaats->id);

    echo form_submit('knop', 'Verzenden');
    echo form_close();
    ?>
</div>

<?php
echo anchor('home', '<button class="btn">Terug</button>');
?>