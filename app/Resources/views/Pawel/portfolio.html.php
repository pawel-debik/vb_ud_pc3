<?php $this->extend('layout.html.php'); ?>

<div class="wrapper">
    <main>
        <div class="just-portfolio-items">
                <?php forEach ( $this->portfolioItems as $portfolioItem ) : ?>
                    <div class="portfolio-item portfolio-image-wide-wrapper">
                        <?php
                            if($portfolioItem) {
                                $wysiwygElement = $portfolioItem->getElement('excerpt');
                                var_dump($wysiwygElement->getData());
                            }
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
    </main>
</div>

<?php /* ?>
<div class="wrapper">
    <main>
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
    </main>
</div>

<?php */?>