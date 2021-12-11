<?php

    // вывод блоков на главной странице

    require_once "mainHeader.php";
?>
    
    <section class="wrapper">
        <?php 
        
            require_once "grafs.php";
            
        ?>

        <section class="section__cards">
            
            <ul class="section__list-card">

                <?php
                    // пропиcаны два цикла и два li потому что не стал заморачиваться
                    // но лучше сделать без дублирования кода
                
                    // если был поисковой запрос на search.php
                    if( is_array($search_result)  ){   
                        foreach($search_result as $cardFilm){
                ?>
                        <li class="list__item">
                            <img class="item__img" src="<?= $cardFilm[4] ?>" title="<?= $cardFilm[1] ?>" alt="<?= $cardFilm[1] ?>">
                            <div class="item__text text-title">
                                <a href="article.php?simbol_code=<?= $cardFilm[8] ?>"><h3><?= $cardFilm[1] ?></h3></a>
                                <p class="text-desc">
                                    <?= $cardFilm[3] ?>
                                </p>
                                <p class="text-raiting-and-age">
                                    <span><b>Смертей</b>: <?= $cardFilm[6] ?>
                                    <br></span>
                                    <span><b>Рейтинг</b>: <?= $cardFilm[10] ?>
                                    <br></span>
                                    <span><b>Возраст</b>: <?= $cardFilm[11] ?>
                                    <br></span>
                                    <span><b>Жанр</b>: <?= $cardFilm[9] ?></span>
                                </p>

                            </div>
                        </li>
                <?php
                        }

                    } else if( is_string($search_result) ){
                        echo $search_result;
                    }
                    else{
                        // код для вывода всех карточек на главной странице + пагинация + поиск
                        foreach($films as $cardFilm){
                            if($countCard < $maxCountFilms){
                ?>
                            <li class="list__item">
                                <img class="item__img" src="<?= $cardFilm[4] ?>" title="<?= $cardFilm[1] ?>" alt="<?= $cardFilm[1] ?>">
                                <div class="item__text text-title">
                                    <a href="article.php?simbol_code=<?= $cardFilm[8] ?>"><h3><?= $cardFilm[1] ?></h3></a>
                                    <p class="text-desc">
                                        <?= $cardFilm[3] ?>
                                    </p>
                                    <p class="text-raiting-and-age">
                                        <span><b>Смертей</b>: <?= $cardFilm[6] ?>
                                        <br></span>
                                        <span><b>Рейтинг</b>: <?= $cardFilm[10] ?>
                                        <br></span>
                                        <span><b>Возраст</b>: <?= $cardFilm[11] ?>
                                        <br></span>
                                        <span><b>Жанр</b>: <?= $cardFilm[9] ?></span>
                                    </p>
    
                                </div>
                            </li>
                            
                <?php   
                            }

                        $countCard++;
                        } 
                    
                ?>

            </ul>

                    <!-- Пагинация -->
                    <div class="section__pagination">
                        <ul class="pagination__list">
                            <?php 
                                if($page != 1){
                            ?>

                                <li class="pagination__item"><a class="pagination__link-pre" href="/?page=<?= $previous_page ?>"></a></li>

                            <?php
                                }
                            ?>

                        
                            <?php  
                                //  Ссылки для пагинации 
                                for ($i = 1; $i <= $str_pag; $i++){
                            ?>
                            
                                <li class="pagination__item"><p><a href="/?page=<?= $i ?>"><?= $i ?></a></p></li>

                            <?php 
                                }
                            ?>
            
                            <?php 
                                if($page != $str_pag && $str_pag <= $maxCountFilms){
                            ?>

                                <li class="pagination__item"><a class="pagination__link-next" href="/?page=<?= $next_page ?>"></a></li>

                            <?php
                                }
                            
                            ?>

                        </ul>
                    </div>
                <?php
                        
                    }
                ?>
            

        </section>

       

    </section>
