<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
    $paragrafo = 'Questa concessionaria è autorizzata a vendere  i marchi di: Bmw, Ferrari,  Fiat, Lamborghini';
    $lenParagrafo = strlen($paragrafo);
    $marca_auto = $_GET['marca'];
    $censura = str_ireplace($marca_auto, "***",$paragrafo);
    $censura2 = str_ireplace('bmw' ,"***", $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> <?php echo $paragrafo ?></h3>
<p> La lunghezza del paragrafo è di: <?php echo $lenParagrafo ?> caratteri</p>

<!-- php con GET -->

<h3> <?php echo $censura ?> </h3>

<!-- php con scelta variabile da cancellare -->
<h3> <?php echo $censura2 ?> </h3>

<p> La lunghezza del paragrafo è di: <?php echo strlen($censura); ?> caratteri </p>
</body>
</html>

