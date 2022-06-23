<article class="manga-card flex flex-col items-center justify-center">
    <img class="w-42 h-64 object-contain" src=<?=$data['manga']->getThumbnail()?>>
    <div class="text-center">
        <label class="manga-title text-xl text-white mb-2"><?= $data['manga']->getTitle() ?></label>
    </div>
</article>
