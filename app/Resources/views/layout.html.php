<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example</title>
    <link rel="stylesheet" type="text/css" href="/static/css/global.css" />
    <?php $styles = ""; ?>
    <?php $this->headStyle()->appendStyle($styles); ?>
    <?= $this->headStyle() ?>
    <?php $this->headLink()->appendStylesheet('static/css/style.css'); ?>
    <?php $this->headLink(['rel' => 'icon', 'href' => 'static/img/favicon.ico'], 'PREPEND')
    ->prependStylesheet('/styles/moz.css', 'screen', true,  ['id' => 'my_stylesheet']);
    ?>
    <?= $this->headLink() ?>

</head>
<body class="light-theme">
    <header id="header" class="header">	
		<div class="page-wrap crumbs-wrap">	

			<div class="header-inner center-content crumbs">
				<a href="/" class=""><img class="website-logo" src="http://paweldebik.com/paweldebik/wp-content/themes/pawel/images/pawel-website-logo.png" alt="Pawel Debik Logo"></a>
				<h1><a class="blog-name active" href="http://paweldebik.com/">Pawel Debik</a></h1>
				
					<a class="responsive-menu-toggle" href="#"><span></span><span></span><span></span><span></span></a>
					<div class="header-theme-toggle">
						<span class="toggle-label">Dark theme: </span>
						<label class="switch">
							<input id="theme-selector-header" class="theme-selector" type="checkbox" checked="">
							<span class="slider round"></span>
						</label>
					</div>
							</div>
		</div>
		<div class="page-wrap nav-wrap">	
			<nav class="header-inner center-content nav">
								<div class="extra-nav">
					<a class="menu-back hidden" href="#" onclick="history.go(-1);">Back</a>
					 
				</div>
				<ul>
					<li class="menu-item menu-portfolio">
						<a href="/portfolio/"><span>Portfolio</span></a>
					</li>
					<li class="menu-item menu-blog">
						<a href="/blog/" class="active"><span>Blog</span></a>
					</li>
					<li class="menu-item menu-photography">
						<a href="/photography/" class="active"><span>Photography</span></a>
					</li>
					<li class="menu-item menu-about last">
						<a href="/about/" class="active"><span>About</span></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
    <div class="content page-wrap">
        <?php $this->slots()->output('_content') ?>
    </div>
    <?php echo $this->inc('/page_parts/footer'); ?>
</body>
</html>