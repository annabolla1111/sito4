<?php
// Se il form non è stato inviato via POST, reindirizza alla pagina contatti
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contatti.php");
    exit();
}

$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$subject = htmlspecialchars($_POST['subject'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

// Controllo validità email lato server
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contatti.php?errore=email_non_valida");
    exit();
}
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
                <h2>Controlla le informazioni inserite</h2>
                <p>Prima di inviare il messaggio, controlla che i dati riportati di seguito siano corretti:</p>
                
                <div class="summary-box">
                    <div>
                        <strong class="summary-field-label">Nome:</strong>
                        <span class="summary-field-value"><?php echo $name; ?></span>
                    </div>

                    <div>
                        <strong class="summary-field-label">Email:</strong>
                        <span class="summary-field-value"><?php echo $email; ?></span>
                    </div>

                    <div>
                        <strong class="summary-field-label">Oggetto:</strong>
                        <span class="summary-field-value"><?php echo $subject; ?></span>
                    </div>

                    <div>
                        <strong class="summary-message-label">Messaggio:</strong>
                        <span class="summary-message-value"><?php echo $message; ?></span>
                    </div>
                </div>

                <div class="summary-buttons-container">
                   <a href="contatti.php?name=<?php echo urlencode($name); ?>&email=<?php echo urlencode($email); ?>&subject=<?php echo urlencode($subject); ?>&message=<?php echo urlencode($message); ?>" class="hero-btn red-btn">MODIFICA DATI</a>

                   <form action="form_handler.php" method="post" style="margin: 0;">
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
                        <input type="hidden" name="message" value="<?php echo $message; ?>">
                        <button type="submit" class="hero-btn red-btn">CONFERMA E INVIA</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>

<?php include 'footer.php'; ?>
</body>
</html>