<div class="container">
    <div class="row">
        <h1><?= $title ?></h1>
    </div>
    <div class="row alert alert-success" role="alert">
        <h2>Merci aux clients fidèles.</h2>
    </div>
    <div class="row text-center">
        <?= anchor("accueil", "Fermer", ['class' => "btn btn-primary"]); ?>
    </div>
</div>