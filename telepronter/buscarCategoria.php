<?php
    include('database.php');

    $Search = $_POST['Search'];
    
    if(!empty($Search)){
        $query = "SELECT * FROM datos1 WHERE motivos='$Search' ";
        $result = mysqli_query($connection,$query);

        if(!$result){
            die('Query Error'. mysqli_error($connection));
        }


        $json = array();
        while($row = mysqli_fetch_array($result)){
         

            $json[] = array(
                'sondeo1' => $row['sondeo1'],
                'sondeo2' => $row['sondeo2'],
                'reventa' => $row['reventa'],
                'spc1' => $row['spc1'],
                'spc2' => $row['spc2'],
                'tipo' => $row['tipo'],
                'sub_tipo' => $row['sub_tipo'],
                'motivo' => $row['motivo'],
                'observacion' => $row['observacion'],
                'url1' => $row['url1'],
                'url2' => $row['url2'],
                
                
            );
        }
        
        $jsonString = json_encode($json);
        echo ($jsonString);
    }    
?>