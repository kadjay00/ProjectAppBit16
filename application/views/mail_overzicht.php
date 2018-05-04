<div class="container">
    <div class="card">
        <div class="card-header">
            Mailherinneringen
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr class="table-info">
                    <th>Verzenden op</th>
                    <th>Ontvangers</th>
                    <th>Onderwerp</th>
                    <th>Sjabloon</th>
                    <th>Status</th>
                    <th>Bewerken</th>

                </tr>
                </thead>

                <tbody>
                <?php foreach ($reminders as $reminder) {
                    ?>
                    <tr>
                        <td><?php echo $reminder->timer?></td>
                        <td><?php echo count($reminder->ontvangers)?> ontvangers</td>
                        <td><?php echo $reminder->sjabloon->naam?></td>
                        <td><?php echo $reminder->sjabloon->naam?></td>
                        <td><?php echo $reminder->status?></td>
                        <td></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Mailsjablonen</div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">Onderwerp</div>
                <div class="card-body">
                    Mail text blabla
                </div>
                <div class="card-footer">
                    <div class="row">
                        <a href="#" class="btn btn-success btn-block  col-lg-6">Aanpassen</a>
                        <a href="#" class="btn btn-danger  btn-block  col-lg-6">Verwijderen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ontvangers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="ontvangers_content">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>

</script>