<?php

session_start();

require './header.php';
?>
<main class="flex flex-col py-10 px-5 gap-y-10">
    <button class="h-56 text-white text-3xl font-bold rounded shadow-md bg-blue-500" type="button" id="caprichoso">Caprichoso</button>
    <button class="h-56 text-white text-3xl font-bold rounded shadow-md bg-red-500" type="button" id="garantido">Garantido</button>

    <div class="hidden flex flex-col gap-y-3 bg-white rounded p-8 shadow-md" id="pop-up">
        <button class="px-2 py-1 text-white text-lg font-bold rounded shadow-md bg-red-500 max-w-fit" type="button" id="fechar">X</button>
        <form class="flex flex-col" action="./voting.php" method="post">
            <input name="voto" id="voto" hidden>
            <label class="font-semibold" for="usuario">Nome: </label>
            <input class="border border-gray-300 rounded" name="usuario" type="text" required>
            <button class="block mt-3 px-2 py-1 text-white text-lg font-bold rounded shadow-md bg-blue-500" type="submit">Votar</button>
        </form>
    </div>
    <script src="./index.js"></script>

</main>    
</body>
</html>