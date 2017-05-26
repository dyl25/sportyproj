<section class="row">
    <div class="col m12">
        <h2>Liste des Clubs</h2>
        <a href="<?= site_url('backoffice/club_admin/add'); ?>" class="btn btn-primary waves-effect">Ajouter un club</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom du club</th>
                    <th>Initiales</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Localité</th>
                    <th>Coordonnée Google Maps</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clubs as $club): ?>
                    <tr>
                        <td><?= $club->id; ?></td>
                        <td><a href="<?= site_url('backoffice/club_admin/view/') . $club->id; ?>"><?= $club->name; ?></a></td>
                        <td><?= $club->shortname; ?></td>
                        <td><?= $club->address; ?></td>
                        <td><?= $club->postcode; ?></td>
                        <td><?= $club->city; ?></td>
                        <td><?= $club->coord; ?></td>
                        <td>
                            <a href="<?= site_url('backoffice/club_admin/edit/') . $club->id; ?>"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="<?= site_url('backoffice/club_admin/delete/') . $club->id; ?>"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
