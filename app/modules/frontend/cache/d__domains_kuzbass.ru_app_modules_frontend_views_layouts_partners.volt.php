<?= $this->getContent() ?>
<section class="plots plots-list" data-parallax="scroll" data-image-src="img/metal.jpg">
    <div class="section-content">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Партнеры</h2>
            </div>
            <div class="section-body">
                <div class="plots-content">
                    <?php foreach ($plots as $plot) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <?= $this->partial('parts/plot') ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>