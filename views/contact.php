<?php
/** @var \app\core\View $this */

/** @var \app\models\ContactForm $model */

$this->title = 'Contact';
?>

<h1>Contact us</h1>

<?php $form = \Ismaxim\ScratchFrameworkCore\form\Form::begin('', 'post'); ?>
    <?php echo $form->field($model, 'subject'); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo new \Ismaxim\ScratchFrameworkCore\form\TextareaField($model, 'body'); ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php \Ismaxim\ScratchFrameworkCore\form\Form::end(); ?>