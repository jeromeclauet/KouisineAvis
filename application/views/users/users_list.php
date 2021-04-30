<h1 class="mb-2 text-center"><?= $title ?></h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse mail</th>
            <th scope="col">Modifier</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($userList->result() as $row) {?>
        <tr>
            <th scope="row"><?= $row->id ?></th>
            <td><?= $row->lastname ?></td>
            <td><?= $row->firstname ?></td>
            <td><?= $row->mail ?></td>
            <td><?= anchor("updateView/" . $row->id, "Modifier"); ?></td>
        </tr><?php
    }?>
    </tbody>
</table>