<?php 
    require_once "common/database/database.php"; /* подключение базы данных */

    // код поиска
    function search ($search_query) 
    { 
        // делается подключение к базе потому что видимости для $connect не было
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "deadinfilm";

        $connectSearch  = mysqli_connect($servername, $username, $password, $database);

        // запрос
        $querySearch = " SELECT * FROM `film` WHERE `title` LIKE '$search_query' ";
        $search_result = mysqli_query($connectSearch, $querySearch);
        $search_result = mysqli_fetch_all($search_result);
       
        // проверка нашел ли что то
        // $result[0][1] - title
        if( $search_result[0][1] != $search_query ){
            $search_result = "По запросу ничего не найдено";

        }

        return $search_result;


    }

    // проверка пустой ли запрос
    if (!empty($_POST['search_query'])) { 
        $search_result = search ($_POST['search_query']); 

    }else{
        $search_result = "Запрос пустой";
    }


    require_once "default.php";
?>