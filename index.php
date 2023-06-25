<?php
    
    //definir a pagina atual pela url
    $pagina = 'home';

    if(isset($_GET['i'])){
        $pagina = addslashes($_GET['i']);
    }

    //carrega header
    include 'app/views/header.php';

    //carrega a pagina escolhida pelo usuario
    switch($pagina) {
        case 'home':
            include 'app/views/home.php';
            break;

        case 'dados':
            include 'app/views/dados.php';
            break;
    }

    include 'app/views/footer.php'
?>

