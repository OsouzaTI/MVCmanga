<article class="manga-card flex flex-col items-center justify-center">
    <a href="manga/<?=$data['manga']->getUrl()?>">
        <img class="w-42 h-64 object-contain m-auto" src=<?=$data['manga']->getThumbnail()?>>
    </a>
    <div class="text-center">
        <a href="">
            <label class="manga-title text-xl text-white mb-2"><?= $data['manga']->getTitle() ?></label>
        </a>
    </div>
</article>
