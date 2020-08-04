<?php $this->extend('layout.html.php'); ?>

<div class="wrapper">
    <main>
        <h1>Portfolio</h1>
    </main>

    <aside>
        <?php echo $this->input("subline"); ?>
        <?php echo $this->wysiwyg("content"); ?>
    </aside>
</div>