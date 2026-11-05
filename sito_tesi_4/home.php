<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sito web Accordo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="./img/logo.png">
</head>
<body>
<header>
<?php include 'nav.php'; ?>
<div class="text-box">
    <h1>Accordo</h1>
    <h2>Associazione Scientifico Culturale Coterapia</h2>
</div>
</header>

<!------mission------->

<section class="mission">
    <div class="blocco_testo">
        <h2>Di cosa ci occupiamo</h2>
        <p>Siamo un associazione nata con lo scopo di aiutare chi si trova in una situazione di disagio fisico o psicologico a trovare
        un percorso personalizzato, basato sull'ascolto e sulla cooperazione tra professionisti, famiglie e comunit&agrave.</p>
    </div>
    <figure class="immagine_intro">
        <img src="./img/psicoterapeuta.jpg" alt="psicoterapeuta">
    </figure>

</section>

<!------services------->

<section class="services">
    <h2>Cosa puoi fare sul nostro sito</h2>

    <div class="row">
        <a href="contatti.php" class="services-col">
            <i class="fa fa-handshake"></i>
            <h3>Ricevere aiuto</h3>
</a>
        <a href="cosa_facciamo.php" class="services-col">
            <i class="fa fa-book"></i>
            <h3>Informarti</h3>
</a>
        <a href="donazioni.php" class="services-col">
            <i class="fa fa-money-bill"></i>
            <h3>Donare</h3>
</a>
    </div>

</section>

<!------windhorse------>
<section class="windhorse">
<figure class="equilibrio">
    <img src="./img/equilibrio1.jpg">
</figure>
<div class="blocco_testo_equilibrio">
     <h2>Il nostro approccio</h2>
    <p> Uno “stare accanto” che cura. Windhorse, il “cavallo del vento” è un’allegoria per l’anima umana. Nella tradizione sciamanica dell’Asia orientale e Centrale e nel buddismo tibetano è un simbolo dell’idea di benessere e buona fortuna. Questo rivoluzionario approccio, nato nel 1981 in Colorado aseguito dell’incontro tra Edward Podvoll e Chogyam Trungpa Rimpoche, si pone di fronte alle situazioni anche più gravi di squilibrio mentale in un’ottica di totale apertura, proponendo progetti individualizzati ed integrati “fatti su misura” in un’ottica di accoglienza e attenzione profonda, utilizzando la relazione e l’attenzione al “qui ed ora” come strumenti per ritrovare un possibile equilibrio. </p>  
    <a href="https://www.youtube.com/playlist?list=PL_3MT068W6Kx9YZk4aLPTrSXqaisTF0ht" class="hero-btn black-btn">VIDEO WINDHORSE</a>
</div>
   
</section>
<section class="img_windhorse"></section>



<!------reviews------>

<section class="reviews">
    <h2>Cosa dicono su di noi</h2>

    <div class="row">
        <div class="reviews-col">
            <img src="img/icon-blue.png">
            <div>
                <p>Partecipare ai laboratori di formazione mi ha aperto un mondo. Ho imparato l'importanza dell'ascolto profondo e della presenza, competenze utili nella vita di tutti i giorni.</p>
                <h3>Francesca L.</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="reviews-col">
            <img src="img/icon-blue.png">
            <div>
                <p>Il supporto a domicilio è stato fondamentale in un momento di grande vulnerabilità per la nostra famiglia. Abbiamo ritrovato l'equilibrio che sembrava perduto.</p>
                <h3>Luca B.</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                
            </div>
        </div>
    </div>

</section>

<!------contact us------>

<section class="contact_us">
    <a href="contatti.php" class="hero-btn">CONTATTACI</a>
</section>

<?php include 'footer.php'; ?>

</body>
</html>