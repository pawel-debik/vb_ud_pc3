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
	<main>
class="portfolio-image-wide interactive-image active"
		<?php // echo 'MYOWNVAR' . $this->foo;?>

		<div class="just-portfolio-items">
			<?php forEach ( $this->projects as $project ) : ?>
				<div class="portfolio-item portfolio-image-wide-wrapper">
					<a href="" class="portfolio-image-wide interactive-image active">
						<?php $portfolio_image = $project->getfeatured_image(); ?>
						<img src="<?php echo $portfolio_image; ?>" class="portfolio-image wp-post-image" alt="">
					</a>
					<div>
						<h2><?php echo $project->getTitle(); ?></h2>
						<?php echo $project->getExcerpt(); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>


		

		<img src="<?php echo $header_image_src; ?> " />

		<?php echo $this->image('header-image', array(
				'width'=>300
			)); 
		?>
	
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