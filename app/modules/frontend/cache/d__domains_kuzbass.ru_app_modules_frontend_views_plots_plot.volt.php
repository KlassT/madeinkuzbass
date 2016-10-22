<?= $this->getContent() ?>
<section class="plot" data-parallax="scroll" data-image-src="img/metal.jpg">
    <div class="section-content">
        <div class="section-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 no-padding">
                        <div class="plot-video">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/<?= $plot->video ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="plot-description col-md-12">
                            <div class="category">
                                <?= $this->tag->linkTo(['#', '<i class="fa fa-thumb-tack"></i> ' . $plot->Category->category]) ?>
                            </div>
                            <h1><?= $plot->title ?></h1>
                            <p><?= $plot->description ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <?php foreach ($plots as $plot) { ?>
                            <a href="plots/plot/<?= $plot->id ?>" class="plot-preview preview">
                                <span class="preview-image">
                                    <?= $this->tag->image(['http://img.youtube.com/vi/' . $plot->video . '/mqdefault.jpg']) ?>
                                </span>
                                <span class="preview-text">
                                    <?= $plot->title ?>
                                </span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>