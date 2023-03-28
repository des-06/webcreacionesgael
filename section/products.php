<?php
    include("dbconnection.php");

    $queryStatement = "SELECT * FROM Product";
    $resultSet = getResult($mysqli,$queryStatement);
    list($products,$eventProducts,$schoolProducts,$decorationProducts) = createProducts($resultSet);
    mysqli_close($mysqli);

    function getResult($connection,$queryStatement){
        return mysqli_query($connection,$queryStatement);
    }

    function createProducts($queryResult){
        $products = [];
        $eventProducts = [];
        $schoolProducts = [];
        $decorationProducts = [];
        while($row = mysqli_fetch_array($queryResult)){
            $imageSrc = 'data:' . $row['p_imageType'] .';base64,' . base64_encode($row['p_image']) . " ' " ;
            $product = array(
                "p_id" => $row['p_id'],
                "p_name" => $row['p_name'],
                "p_category" => $row['p_category'],
                "p_price" => $row['p_price'],
                "p_description" =>  $row ['p_description'],
                "p_imageType" => $row['p_imageType'],
                "p_image" => $imageSrc
            );

            $products[] = $product;
            switch($row['p_category']){
                case 'EVENTO':
                    $eventProducts[] = $product;
                    break;
                case 'ESCOLAR':
                    $schoolProducts[] = $product;
                    break;
                case 'DECORACION':
                    $decorationProducts[] = $product;
                    break;
            } 

            
        }
        return [$products,$eventProducts,$schoolProducts,$decorationProducts];
    }


?>