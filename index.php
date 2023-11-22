<?php

require './header.php';

?>
<session class="bg-[url('./imgs/banner_parintins.jpg')] text-justify bg-cover py-12 px-5 text-white">
    <div class="flex flex-col bg-black/50 class p-3 rounded-xl gap-y-3">
        <h1 class="text-3xl text-center m">Know Parintins!</h1>
        <p>Parintins, populary known as “Ilha Tupinambarana” or “Ilha da Magia” is a city located at the east side of the Amazonas state, in the right bank of the Amazon River. The city is the most populated of the state.</p>
    </div>
</session>
<session class="flex flex-col text-justify py-8 px-5">
    <h2 class="text-2xl text-center mb-5">Attractions</h2>
    <div class="flex flex-col gap-y-8">
        <div class="bg-white pb-3 rounded-xl shadow-md">
            <img class="rounded-t-xl" src="./imgs/bumbodromo.jpg" alt="bumbódromo">
            <h3 class="text-center text-xl my-3">Bumbódromo</h3>
            <h4 class="mx-5">The highlight of the visit to Parintins is the iconic Bumbódromo, a space where Caprichoso and Garantido take place during the three nights of the Parintins Folklore Festival, since 1965. Created in 1988, the space also guaranteed the party the title of Cultural Heritage of Brazil. The arena, also known as Amazonino Mendes Cultural and Sports Center, becomes the stage that brings to life the legends, rites and customs of the Amazon caboclo. This scenario is portrayed through toadas (songs), allegories, props, dances and beliefs.</h4>
        </div>
        <div class="bg-white pb-3 rounded-xl shadow-md">
            <img class="rounded-t-xl" src="./imgs/mercado.jpg" alt="mercado municipal">
            <h3 class="text-center text-xl my-3">Mercado Municipal</h3>
            <h4 class="mx-5">With a panoramic view of the Amazon River, the Leopoldo Neves Municipal Market, in Parintins, is a symbol of history, architecture, knowledge and flavors of regional cuisine. More than a center for buying and selling products, it reflects the richness of the popular culture of the people of Parintin, their centuries-old customs and traditions. Opened in 1937, the market was reopened on May 27, 2019, celebrating its 82nd anniversary after extensive renovations.</h4>
        </div>
        <div class="bg-white pb-3 rounded-xl shadow-md">
            <img class="rounded-t-xl" src="./imgs/praca.jpg" alt="praça cristo redentor">
            <h3 class="text-center text-xl my-3">Praça Cristo Redentor</h3>
            <h4 class="mx-5">Praça Cristo Redentor is one of Parintins' beautiful postcards. Bordering the Amazon River, the place has an amphitheater for shows by local artists, a pier, as well as bars and restaurants with typical regional flavors. The attraction was named Praça Digital in 2007, when Parintins offered free broadband internet to visitors and residents.</h4>
        </div>
    </div>
</session>
<session class="bg-[url('./imgs/banner_festival.webp')] h-56 bg-cover pt-2 px-5 ">
    <a class="flex items-center bg-gradient-to-r from-red-500 to-blue-500 rounded-2xl px-2" href="../vote.php">
        <img class="w-16 h-16" src="../../imgs/garantido_icon.png">
        <h2 class="text-white text-center">Chose Wich Oxe Will Be The Winner!</h2>
        <img class="w-16 h-16" src="../../imgs/caprichoso_icon.png">
    </a>
</session>
<?php 
require './footer.php';?>
