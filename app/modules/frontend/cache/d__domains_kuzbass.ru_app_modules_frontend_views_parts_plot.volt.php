<a href="plots/plot/<?= $plot->id ?>" class="item">
    <div class="image">
        <?= $this->tag->image(['http://img.youtube.com/vi/' . $plot->video . '/mqdefault.jpg']) ?>
    </div>
    <div class="plot-text">
        <div class="category">
            <i class="fa fa-thumb-tack"></i> <?= $plot->Category->category ?>
        </div>
        <h3 class="title">
            <?= $plot->title ?>
        </h3>
        <?php if ($isPartners == false) { ?>
            <p><?php echo mb_strimwidth($plot->description, 0, 100, '...'); ?></p>
        <?php } ?>
    </div>
    <?php if ($isPartners && $plot->place != '') { ?>
        <div class="plot-place">
            <?= $plot->place ?>
        </div>
    <?php } ?>
</a>