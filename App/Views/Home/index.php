<div class="m-auto sm:w-11/12 md:w-4/6 relative bg-purple02 py-4 -top-[12rem] rounded-md shadow-md">

    <?= $this->component->render('sectionSeparator', '<i class="fa-solid fa-book"></i> Últimos lançamentos') ?>
    <section class="slider flex whitespace-nowrap gap-x-4">
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
    </section>

    <?= $this->component->render('sectionSeparator', '<i class="fa-solid fa-angles-up"></i> Mais Acessados') ?>
    <section class="flex slider-animated whitespace-nowrap gap-x-4">
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
    </section>

    <?= $this->component->render('sectionSeparator', '<i class="fa-solid fa-book-open"></i> Ultimos Capítulos adicionados') ?>
    <section class="grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 px-2">
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
        
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
    </section>
</div>

<script>
$(document).ready(function(){
    $(".slider").slick({
        speed: 400,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: true,
        prevArrow: '<button class="slide-arrow prev-arrow rounded-full opacity-50 hover:opacity-100 w-12 h-12 bg-white absolute z-10 top-[40%] -left-5"><i class="fa-solid fa-angle-left"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow rounded-full opacity-50 hover:opacity-100 w-12 h-12 bg-white absolute z-10 top-[40%] -right-5"><i class="fa-solid fa-angle-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $(".slider-animated").slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
</script>

<!-- <div class="absolute -left-3 z-10 opacity-20 hover:opacity-50">
    <i class="fa-solid fa-angle-left relative -top-10 text-3xl text-purple03 bg-white rounded-full w-12 h-12 flex items-center justify-center"></i>
</div> -->