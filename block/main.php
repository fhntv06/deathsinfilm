
<main class="main">

    <?php 

        // вывод для главной страницы 
        if( !$simbol_code && !$rubric && !$error404 ){
            
            require_once "main/listCardFilm.php";

        }

        if( !$simbol_code && !$rubric && $error404 ){
           
            // вывод контента для 404
            require_once "error.php";

        }

        // вывод для article.php
        if( $simbol_code ){ 

            require_once "main/articleCardFilm.php";

        }

        // вывод карточек по выбранной категории 
        if( $rubric ){ 

            require_once "main/rubric.php";

        }

        
    ?>

</main>