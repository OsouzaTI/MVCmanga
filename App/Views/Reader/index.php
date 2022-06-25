<style>

/* .page-wrapper {
    width: 75% !important;
    margin: 0 auto !important;
    display: flex !important;
} */

</style>

<div class="m-auto sm:w-11/12 md:w-1/2 relative bg-purple02 py-4 -top-[12rem] rounded-md shadow-md">
    <?= $this->component->render('sectionSeparator', '<i class="fa-solid fa-book"></i> Capítulo ['.$data['chapter'].'] de <b>'.$data['mangaTitle'].'</b>.') ?>    
    <div class="flex justify-end px-4">
        <?= $this->component->render('buttonLink', [
            'link' => '/manga/'.$data['mangaTitle'],
            'text' => 'Todos os Capítulos'
        ]) ?>
    </div>
    <section class="manga-reader mt-10">
        <?php foreach($data['pages'] as $page): ?>
            <div class="page-wrapper">
                <img class="w-full h-full object-fill m-auto" src=<?= $page ?>>
            </div>
        <?php endforeach; ?>
    </section>    
</div>

<script>
$('.manga-reader').slick({ arrows: false, });
$(document).on('keydown', function(e) { 
    let $mangaReader = $('.manga-reader');
    if(e.keyCode == 37) {
        $mangaReader.slick('slickPrev');
    } else if(e.keyCode == 39) {
        $mangaReader.slick('slickNext');
    }
});
</script>