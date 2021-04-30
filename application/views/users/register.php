<div class="container">
    <div class="row">
        <h1><?= $title ?></h1>
    </div>
    <?= validation_errors() ?>
    <div class="row">
        <?= form_open('register', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <?= form_label("Votre nom :", "lastname", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-12">
                <?= form_input(['name' => "lastname", 'id' => "lastname", 'class' => empty(form_error('lastname')) ? 'form-control' : 'form-control is-invalid'], set_value('lastname')) ?>
                <span class="help-block text-danger"><?= form_error('lastname'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Votre prénom :", "firstname", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-12">
                <?= form_input(['name' => "firstname", 'id' => "firstname", 'class' => empty(form_error('firstname')) ? 'form-control' : 'form-control is-invalid'], set_value('firstname')) ?>
                <span class="help-block text-danger"><?= form_error('firstname'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Votre e-mail :", "mail", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-12">
                <?= form_input(['name' => "mail", 'id' => "mail", 'type' => 'email', 'class' => empty(form_error('mail')) ? 'form-control' : 'form-control is-invalid'], set_value('mail')) ?>
                <span class="help-block text-danger"><?= form_error('mail'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Votre mot de passe :", "password", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-12">
                <?= form_input(['name' => "password", 'id' => "password", 'type' => 'password', 'class' => empty(form_error('password')) ? 'form-control' : 'form-control is-invalid'], set_value('password')) ?>
                <span class="help-block text-danger"><?= form_error('password'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Confirmer votre mot de passe :", "passwordConfirm", ['class' => "col-md-3 control-label "]) ?>
            <div class="col-md-12">
                <?= form_input(['name' => "passwordConfirm", 'type' => 'password', 'id' => "passwordConfirm", 'class' => empty(form_error('passwordConfirm')) ? 'form-control' : 'form-control is-invalid'], set_value('passwordConfirm')) ?>
                <span class="help-block text-danger"><?= form_error('passwordConfirm'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <?= form_submit("send", "Envoyer", ['class' => "btn btn-success mt-3"]); ?>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>