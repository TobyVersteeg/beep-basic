<div class="layer">
    <?php if (isset($error)) : ?>
        <?php require_once $error . '.view.php' ?>
    <?php else : ?>
        Onbekende fout
    <?php endif ?>
</div>