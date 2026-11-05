<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
$subject = isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : '';
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
?>
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
<section class="header_2">
<?php include 'nav.php'; ?>
    <h1>Contattaci</h1>
</section>
<!------contact us------>
<section class="contattaci">


<section class="contact-us">

    <div class="row"> 
        <div class="contact-col">
            <h2>Hai bisogno di supporto immediato?</h2>
            <p>I nostri contatti rapidi:</p><div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+39 0125 538037</h5>
                    <p>Numero telefono</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span>
                    <h5>info@accordo.to.it</h5>
                    <p>e-mail</p>
                </span>
            </div>   
        </div>   
    <div class="contact-col">
        <form action="conferma.php" method="post">
            <h2>Vuoi saperne di più?</h2>
            <p>Compila il seguente form, potrai ricontrollare i tuoi dati prima dell'invio definitivo.</p>
            <input type="text" name = "name" value = "<?php echo $name; ?>" placeholder="Inserisci il tuo nome" required>
            <input type="email" name = "email" value = "<?php echo $email; ?>" placeholder="Inserisci il tuo indirizzo email" required oninvalid="this.setCustomValidity('Perfavore, inserisci un indirizzo email valido, ad esempio nome@dominio.com' )"
            oninput="this.setCustomValidity('')">
            <input type="text" name = "subject" value = "<?php echo $subject; ?>" placeholder="Inserisci l'oggetto" required>
            <textarea rows="8" name = "message" value = "<?php echo $message; ?>" placeholder="Messaggio" required></textarea>
            <button type="submit" class="hero-btn red-btn">CONTINUA</button>
        </form>
    </div>
    </div>
<section class="location">
    <h2>Dove puoi trovarci</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2390.8941231623194!2d7.808014530408471!3d45.44423225868949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47888583bc399ae1%3A0x44c605c50389f642!2sVia%20Ceresa%2C%2029%2C%2010010%20Loranz%C3%A8%20TO!5e0!3m2!1sit!2sit!4v1792962794615!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2816.7109708027306!2d7.696396100000001!3d45.0916539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d8e8250878f%3A0x23d8b382592098ea!2sVia%20Brandizzo%2C%2024%2C%2010154%20Torino%20TO!5e0!3m2!1sit!2sit!4v1792962863727!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
</section>
</section>
</section>
<?php include 'footer.php'; ?>
</body>
</html>