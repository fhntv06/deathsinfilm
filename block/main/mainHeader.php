
<?php // вывод категорий на главную ?>

<section class="main__header">
    <section class="category">

        <h3>По жанрам:</h3>

        <nav class="category__nav">
            <ul class="category__nav_list">

            <?php 
            
            foreach($rubrics as $cardRubric){

            ?>

                <li class="category__list__item"><p><a href="<?= $cardRubric[1] ?>"><?= $cardRubric[0] ?></a></p></li>

            <?php 
            
            }

            ?>

            </ul>
        </nav>
    </section>

    <section class="search">
    
        <form name="search" method="post" action="search.php">
            <input type="search" name="search_query" placeholder="Название фильма">
            <button type="submit">
                <p>Найти</p>  
                <img class="form__btn-img" src="/file/img/icon.png">
            </button> 
        </form>

    </section>
</section>
