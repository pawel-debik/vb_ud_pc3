<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>

<div id="logo">
    <a href="http://www.pimcore.org/"><img src="/bundles/pimcoreadmin/img/logo-gray.svg" style="width: 200px;" /></a>
    <hr />
    <?= $this->headTitle() ?>
</div>

<h1><?php echo $this->input("headline", ["width" => 540]); ?></h1>

<?php while ($this->block("contentblock")->loop()) { ?>
    <h2><?php echo $this->input("subline"); ?></h2>
    <?php echo $this->wysiwyg("content"); ?>
<?php } ?>