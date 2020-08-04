<?php $this->extend('layout.html.php'); ?>

<p>Date</p>
<?= $this->date("date", [
    "format" => "d m Y",
    'outputFormat' => "%d.%m.%Y"
]); ?>

<p>Headline</p>
<h1><?php echo $this->input("headline", ["width" => 500]); ?></h1>

<p>Intro</p>
<?php echo $this->wysiwyg("content", ['width'=>500]); ?> 

<p>Featured Image</p>
<?= $this->image("featured_image"); ?>

<p>Questions / Solution / Result / Visit</p>
<?php while ($this->block("contentblock")->loop()): ?>
    <h2><?php echo $this->input("subline", ['width'=>500]); ?></h2>
    <?php echo $this->wysiwyg("content", ['width'=>500]); ?> 
<?php endwhile; ?>

<p>Excerpt</p>
<?php echo $this->wysiwyg("excerpt", ['width'=>500] ); ?> 