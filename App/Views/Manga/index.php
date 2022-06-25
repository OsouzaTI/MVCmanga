<div class="m-auto sm:w-11/12 md:w-4/6 relative bg-purple02 py-4 -top-[12rem] rounded-md shadow-md">
    <?= $this->component->render('sectionSeparator', '<i class="fa-solid fa-book"></i> Capítulos de <b>'.$data['mangaTitle'].'</b>.') ?>    
    <section class="grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 px-2">
        <?php foreach($data['chapters'] as $chapter): ?>
            <?= $this->component->render('chapterCard', ['chapter' => $chapter]) ?>
        <?php endforeach; ?>
    </section>
</div>