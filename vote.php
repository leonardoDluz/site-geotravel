<?php

session_start();

require './header.php';
?>
<main class="flex flex-col items-center py-10 px-5 gap-y-10">
    <a href="./voting.php?voto=caprichoso" class="p-7 max-w-fit flex flex-col items-center rounded-2xl shadow-md bg-blue-500">
        <img class="h-60 rounded-2xl" src="./imgs/boi-caprichoso.jpg" alt="votar boi caprichoso">
        <span class="mt-2 text-white text-3xl font-bold">Caprichoso</span>
    </a>
    <a href="./voting.php?voto=garantido" class="p-7 max-w-fit flex flex-col items-center rounded-2xl shadow-md bg-red-500">
        <img class="h-60 rounded-2xl" src="./imgs/boi-garantido.jpg" alt="votar boi garantido">
        <span class="mt-2 text-white text-3xl font-bold">Garantido</span>
    </a>
    <script src="./index.js"></script>
</main>    
<?php
require './footer.php';