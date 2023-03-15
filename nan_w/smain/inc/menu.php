<?php
$search_word = ifilter("search_word", "", "string");
?>

<nav class="grow-0 skew-menu flex flex-col gap-4 justify-center p-[10px]">
    <div class="flex flex-row gap-2 items-center">
        <img class="w-12 h-12 "  src="./img/na_anna3.png" style="width:45px;height:45px;" onclick="location.href='/'" />
        <div class="relative flex flex-row items-center w-12/12" style="width:100%">
            <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] left-2"  src="./img/magnifying-glass-solid.svg"  />
            <input type="text" class="border rounded-full w-full py-2 bg-white  px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search_word" name="search_word" value="<?=$search_word?>" onkeypress="if( event.keyCode == 13 ){search();}" placeholder="Search" />
            <img class="w-4 h-4 absolute top-[50%] translate-y-[-50%] right-2 hidden"  src="./img/mic.png"  />
        </div>
    </div>
</nav>

 