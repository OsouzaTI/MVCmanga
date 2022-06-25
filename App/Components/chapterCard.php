<article class="chapter-card flex flex-col items-center justify-center">
    <a href="/reader/<?=$data['chapter']->getUrl()?>">
        <img class="w-42 h-64 object-contain m-auto" src=<?=$data['chapter']->getThumbnail()?>>
    </a>
    <div class="text-center">
        <a href="">
            <label class="manga-title text-xl text-white mb-2"><?= $data['chapter']->getTitle() ?></label>
        </a>
    </div>
</article>
