<?php
/** @var \app\models\User $model */
?>

<h1>Create an account</h1>

<?php $form = \app\core\form\Form::begin('', 'post'); ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstName'); ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastName'); ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end(); ?>

<!-- <form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="firstName" value="<? echo $model->firstName; ?>"
                    class="form-control <? echo $model->hasError('firstName') ? 'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <? echo $model->getFirstError('firstName'); ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Last name</label>
                <input type="text" name="lastName" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label>Password Repeat</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->