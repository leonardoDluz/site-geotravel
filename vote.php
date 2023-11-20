<?php

session_start();

require './header.php';
?>
<main class="flex flex-col items-center py-10 px-5 gap-y-10">
    <button class="p-7 max-w-fit flex flex-col items-center rounded shadow-md bg-blue-500" type="button" id="caprichoso">
        <img class="h-60 rounded" src="./imgs/boi-caprichoso.jpg" alt="votar boi caprichoso">
        <span class="mt-2 text-white text-3xl font-bold">Caprichoso</span>
    </button>
    <button class="p-7 max-w-fit flex flex-col items-center rounded shadow-md bg-red-500" type="button" id="garantido">
        <img class="h-60 rounded" src="./imgs/boi-garantido.jpg" alt="votar boi garantido">
        <span class="mt-2 text-white text-3xl font-bold">Garantido</span>
    </button>

    <div class="hidden absolute inset-y-48 inset-x-4 flex flex-col gap-y-3 bg-white justify-center rounded p-8 shadow-lg" id="pop-up">
        <button class="px-2 py-1 text-white text-lg font-bold rounded shadow-md bg-red-500 max-w-fit" type="button" id="fechar">X</button>
        <form class="flex flex-col" action="./voting.php" method="post">
            <input name="voto" id="voto" hidden>
            <h2 class="font-semibold self-center text-lg">Votar em:</h2>
            <img class="h-60 w-60 self-center mb-3 rounded" id="popUpImg">
            <label class="font-semibold" for="usuario">Seu Nome: </label>
            <input class="border border-gray-300 rounded" name="usuario" type="text" required>
            <button class="block mt-3 px-2 py-1 text-white text-lg font-bold rounded shadow-md bg-blue-500" type="submit">Votar</button>
        </form>
    </div>
    <script src="./index.js"></script>

</main>    
</body>
</html>