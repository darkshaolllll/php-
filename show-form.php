<form action='<?=htmlentities($_SERVER['SCRIPT_NAME'])?>' method="post">
<dl>
    <dt>your name:</dt>
    <?php if(isset($errors['name'])){?>
        <dd class="error"><?= htmlentities($errors['name']) ?></dd>
    <?php } ?>
    <dd><input type="text" name='name' value='<?= htmlentities($defaults['name']) ?>'></dd>

</dl>