<div class="m-auto sm:w-11/12 md:w-4/6 relative bg-purple02 p-4 -top-[12rem] rounded-md shadow-md">
    <?= $this->component->render('section_separator', '<i class="fa-solid fa-book text-purple04"></i> Últimos lançamentos') ?>
    
    <section class="flex overflow-x-scroll overflow-y-hidden whitespace-nowrap w-auto gap-x-4">
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
    </section>

    <?= $this->component->render('section_separator', '<i class="fa-solid fa-angles-up"></i> Mais Acessados') ?>
    <section class="flex overflow-x-scroll overflow-y-hidden whitespace-nowrap w-auto gap-x-4">
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
    </section>

    <?= $this->component->render('section_separator', '<i class="fa-solid fa-book-open"></i> Ultimos Capítulos adicionados') ?>
    <section class="grid grid-cols-4 gap-y-4">
        <?php foreach($data['mangas'] as $manga): ?>
            <?= $this->component->render('mangaCard', ['manga' => $manga]) ?>
        <?php endforeach; ?>
    </section>
</div>