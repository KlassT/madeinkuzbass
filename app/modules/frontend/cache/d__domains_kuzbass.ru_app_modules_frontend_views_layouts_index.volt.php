<?= $this->getContent() ?>
<section class="slider">
    <div class="shadow"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 no-padding">
                <h4>Скоро в эфире</h4>
                <ul class="slides">
                    <?php $v5324088351iterated = false; ?><?php foreach ($previews as $preview) { ?><?php $v5324088351iterated = true; ?>
                        <li>
                            <?= $this->tag->image(['files/previews/' . $preview->image, 'title' => $preview->title]) ?>
                        </li>
                    <?php } if (!$v5324088351iterated) { ?>
                        <li class="dafault">
                            <?= $this->tag->image(['files/previews/4039e060-7907-4d7f-8fbc-3f4baf7d2b9f.jpg']) ?>
                            <h1>Телеканал «Сделано в Кузбассе»</h1>
                            <h2>Рабочии профессии нашего региона</h2>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php if ($previews->count() > 0) { ?>
                <script>
                    $(".slides").bxSlider({
                        mode : 'fade',
                        nextText : '<i class="fa fa-angle-right"></i>',
                        prevText : '<i class="fa fa-angle-left"></i>',
                        captions : true,
                        onSliderLoad : function () {
                            borderRadiusSlider();
                        },
                        onSlideBefore : function () {
                            borderRadiusSlider();
                        },
                        onSlideAfter : function () {
                            borderRadiusSlider();
                        },
                        onSlideNext : function () {
                            borderRadiusSlider();
                        },
                        onSlidePrev : function () {
                            borderRadiusSlider();
                        }
                    });

                    function borderRadiusSlider()
                    {
                        if($(window).width() >= 768) {
                            var sliderHeight = $('.bx-wrapper').height();
                            var radius = (sliderHeight / 2);
                            $('.slider .slides img').css({'border-top-right-radius' : radius, 'border-bottom-right-radius' : radius});
                        }
                        else {
                            $('.slider .slides img').css({'border-radius' : 0});
                        }
                    }
                </script>
            <?php } else { ?>
                <script>
                    function borderRadiusSlider()
                    {
                        if($(window).width() >= 768) {
                            var sliderHeight = $('.slides').height();
                            var radius = (sliderHeight / 2);
                            $('.slider .dafault').css({'overflow' : 'hidden', 'border-top-right-radius' : radius, 'border-bottom-right-radius' : radius});
                        }
                        else {
                            $('.slider .dafault').css({'border-radius' : 0});
                        }
                    }

                    borderRadiusSlider()
                </script>
                <style>
                    .slider h4 {
                        display: none;
                    }

                    .slider h1 {
                        position: absolute;
                        z-index: 5;
                        color: #fff;
                        top: 40%;
                        left: 40px;
                        font-size: 40px;
                        text-transform: uppercase;
                        font-weight: 500;
                    }

                    .slider h2 {
                        position: absolute;
                        z-index: 5;
                        color: #f89503;
                        top: 60%;
                        left: 40px;
                        font-size: 22px;
                        text-transform: uppercase;
                        font-weight: 500;
                    }

                    @media screen and (max-width: 768px) {
                        .slider h1 {
                            position: static;
                            margin: 20px 0;
                        }

                        .slider h2 {
                            position: static;
                            margin-bottom: 20px;
                        }
                    }
                </style>
            <?php } ?>
            <script>
                $(window).resize(function() {
                    borderRadiusSlider();
                });
            </script>
        </div>
    </div>
</section>
<section class="plots shadowed" data-parallax="scroll" data-image-src="/img/metal.jpg">
    <div class="section-content">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Сюжеты</h2>
            </div>
            <div class="section-body">
                <div class="plots-content">
                    <?php foreach ($plots as $plot) { ?>
                        <?= $this->partial('parts/plot') ?>
                    <?php } ?>
                </div>
                <script>
                    $('.plots .plots-content').owlCarousel({
                        items : 4,
                        pagination : true,
                        navigation : true,
                        navigationText : ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
                        itemsDesktop : [1200, 4],
                        itemsTablet : [960, 3],
                        itemsMobile : [768, 1],
                        autoPlay    : true
                    });
                </script>
            </div>
        </div>
    </div>
</section>
<section class="about shadowed">
    <div class="container">
        <div class="section-content">
            <div class="section-header left reverse">
                <h2 class="section-title">О канале</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="about-text col-md-8">
                        <p>«Сделано в Кузбассе» показывает кузбасского рабочего за его обычным делом так, как это происходит в реальной жизни. Крупнейшие предприятия Кузбасса показывают изнутри процесс своего производства: в эфире можно увидеть, как добывается уголь на разрезе, производится цемент, изготавливаются плиты для крупнопанельного домостроения и горно-шахтное оборудование, скульптуры из угля и декоративная керамика, охотничьи лыжи и театральные куклы, бутерброды и сувениры из дерева и многое другое.</p>
                        <p>Ролики снабжаются информацией о показываемом производстве, его особенностях или истории ремесла.</p>
                        <p>Как известно, бесконечно можно смотреть на три вещи: как горит огонь, как течёт вода и как другие работают. С помощью наших телеканалов можно составить идеальную телепрограмму, ведь текущую в естественной среде воду показывает «Наша Сибирь», а огонь и труд - «Сделано в Кузбассе». Созерцайте и узнавайте больше о родном крае вместе с Good Line!</p>
                    </div>
                    <div class="images col-md-4">
                        <?= $this->tag->image(['img/goodline.jpg', 'class' => 'col-md-6 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2']) ?>
                        <?= $this->tag->image(['img/big-tv.jpg', 'class' => 'col-md-6 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shadowed" data-parallax="scroll" data-image-src="/img/metal.jpg">
    <div class="container">
        <div class="row">
            <div class="section-content col-md-6">
                <div class="section-header left col-sm-12">
                    <h2 class="section-title">Обратная связь</h2>
                </div>
                <div class="section-body">
                    <?= $this->tag->form(['order/send', 'class' => 'orderForm col-md-10']) ?>
                        <?php foreach ($orderForm as $element) { ?>
                            <?= $element ?>
                        <?php } ?>
                        <button type="submit" class="btn orange">Отправить</button>
                    <?= $this->tag->endform() ?>
                </div>
            </div>
            <div class="section-content col-md-6 contacts">
                <div class="section-header left col-sm-12">
                    <h2 class="section-title">Контакты</h2>
                </div>
                <div class="section-body">
                    <div class="col-md-10">
                        <div class="item">
                            <i class="fa fa-phone-square"></i>
                            +79130721330
                        </div>
                        <div class="item">
                            <i class="fa fa-envelope-square"></i>
                            kuzbass@kuzbass.ru
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>