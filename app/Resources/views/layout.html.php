<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example</title>
    <link rel="stylesheet" type="text/css" href="/static/css/global.css" />
    <?php $styles = ""; ?>
    <?php $this->headStyle()->appendStyle($styles); ?>
    <?= $this->headStyle() ?>



    <?php // setting links in a view script:
    $this->headLink()->appendStylesheet('static/css/style.css'); 
    $this->headLink(['rel' => 'icon', 'href' => 'static/img/favicon.ico'], 'PREPEND')
    ->prependStylesheet('/styles/moz.css', 'screen', true,  ['id' => 'my_stylesheet']);
    ?>
    <?php // rendering the links: ?>
    <?= $this->headLink() ?>



</head>
<body>
    <div id="site">
        <div class="info">
            <?php $this->slots()->output('_content') ?>
        </div>
        <?php echo $this->inc('/page_parts/footer'); ?>
    </div>
</body>
</html>