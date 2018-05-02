<!--
    GREIF MATTHIAS
    LAST UPDATED: 18 04 27
    DASH ADMIN JAARGANGBEHEER
-->
<div class="items">
    <?php
        if($data['jaargang']->actief){
    ?>
    <div class="item">
        <a href="/index.php/admin/dash/jaargangupdate/<?php echo $data['jaargang']->id; ?>" class="btn btn-primary">
            <i class="fa fa-edit"></i> Edit
        </a>
    </div>
    <?php
        }
    ?>

    <div class="item">
        <a href="/index.php/admin/dash/keuzemogelijkheidbeheer/<?php echo $data['jaargang']->id; ?>" class="btn btn-primary">
            <i class="fa fa-folder"></i> Keuzemogelijkheden
        </a>
    </div>

    <div class="item">
        <a href="/index.php/admin/dash/vrijwilligersoverzicht/<?php echo $data['jaargang']->id; ?>" class="btn btn-primary">
            <i class="fa fa-edit"></i> Vrijwilligers
        </a>
    </div>

    <div class="item">
        <a href="/index.php/admin/dash/deelnemersoverzicht/<?php echo $data['jaargang']->id; ?>" class="btn btn-primary">
            <i class="fa fa-edit"></i> Deelnemers
        </a>
    </div>

    <div class="item">
        <a href="/index.php/admin/dash/personeelimporteren/<?php echo $data['jaargang']->id; ?>" class="btn btn-primary">
            <i class="fa fa-edit"></i> Importeren
        </a>
    </div>
</div>

<div id="dHeader" class="row justify-content-md-center">
    <div class="col-10">
        <h1>
            <?php
                echo $data['jaargang']->naam;
            ?>
        </h1>
        <br/>
        <p>
            <?php
                echo $data['jaargang']->info;
            ?>
        </p>
        <br/>
        <p>
            <?php
                echo $data['jaargang']->beginTijdstip . ' > ' . $data['jaargang']->eindTijdstip;
            ?>
        </p>
    </div>
</div>