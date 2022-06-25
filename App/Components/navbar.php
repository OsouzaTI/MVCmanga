<!-- styles -->
<style>
#navbar {
  position: fixed;
  top: 0;
  width: 100%;
  transition: top 0.3s;
}
</style>

<!-- content -->
<nav id="navbar" class="fixed top-0 flex justify-between bg-dark-purple shadow-md border-b-2 border-light-purple w-full h-24 z-20">
    <div class="flex items-center p-4 w-0 sm:w-auto">
        <img class="h-16" src="https://marcas-logos.net/wp-content/uploads/2020/03/Pornhub-Logo.png"/>
    </div>
    <div class="flex gap-x-4 items-center justify-center w-1/2 h-full">
        <div class="text-white"><a href="/" class="text-xl">Inicio</a></div>
        <div class="text-white"><a href="#" class="text-xl">Mangás</a></div>
        <div class="text-white"><a href="#" class="text-xl">Categorias</a></div>
        <div class="text-white"><a href="#" class="text-xl">Sobre</a></div>
    </div>
    <div class="p-4">
        <div class="w-16 h-16 rounded-full bg-purple01">
            <img class="rounded-full" src="https://i1.sndcdn.com/avatars-kRObeDhVEn3FB9xm-KJYBtQ-t240x240.jpg"/>
        </div>    
    </div>
</nav>

<!-- scripts -->
<script>
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      let currentScrollPos = window.pageYOffset;
      if ((prevScrollpos > currentScrollPos) && currentScrollPos < 100) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-6rem";
      }
      prevScrollpos = currentScrollPos;
    }
  </script> 