<?php
/** @var \app\models\User $model */
?>

<h1>Login</h1>

<?php $form = \Ismaxim\ScratchFrameworkCore\form\Form::begin('', 'post'); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \Ismaxim\ScratchFrameworkCore\form\Form::end(); ?>