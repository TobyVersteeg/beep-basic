<div class="error-page">
    <div class="flex flex-col items-center justify-center h-screen">
        <h1>500 | Exception error</h1>

        <div class="flex items-center justify-center">
            <div class="error-message">
                <?php if (trim($message) > '') : ?>
                    <?php echo $message ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>