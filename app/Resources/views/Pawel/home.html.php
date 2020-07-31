<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

 // Preparing image vars
if ( !$this->image('header-image')->isEmpty() ) {
    $header_image_src = $this->image('header-image')->getSrc(); 
}


$this->extend('layout.html.php');

?>

<div id="logo">
    <a href="http://www.pimcore.org/"><img src="/bundles/pimcoreadmin/img/logo-gray.svg" style="width: 200px;" /></a>
    <hr />
    <?= $this->headTitle() ?>
</div>

<div class="wrapper">
    <header>

        <?php echo 'MYOWNVAR' . $this->foo; ?>

        <?php 
            forEach ( $this->projects as $project ) {
                echo $project->getTitle();
            }
        ?>

        <img src="<?php echo $header_image_src; ?> " />

        <?php echo $this->image('header-image', array(
                'width'=>300
            )); 
        ?>
    </header>
    <main>
        <h1><?php echo $this->input("headline", ["width" => 540]); ?></h1>

        <?php while ($this->block("contentblock")->loop()): ?>
            <h2><?php echo $this->input("subline"); ?></h2>
            <?php echo $this->wysiwyg("content"); ?> 
        <?php endwhile; ?>

        <p>
            - 99% of pimcore documentation is a reference, so you can look up how stuff works, but now how or when to use it.
            - Pimcore 5 switched from Zend to Symphony, and the docs have a lot of outdated (functional, but outdated) information, and while some examples are in plain php, others are in twig (which symphony uses).
            - The documentation is clearly written by developers who are clearly not great copy writers, and more specifically, it's written by Germans, which results in curious sentence structures that will give goose bumps to any English native speaker.
        </p>
    </main>

    <aside>
        <?php echo $this->input("subline"); ?>
        <?php echo $this->wysiwyg("content"); ?>
    </aside>
</div>