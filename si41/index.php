<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP Pertama <h1>
    <?php 
        echo "You and I" ;
        echo "<br>" ;
        echo "<h1>Variabel</h1>" ;
        $data1="data pertama" ;
        $data2="data kedua" ;
        $data3=100 ;
        $data4=20.5 ;

        // Komentar 1 baris
            
        //     Komentar lebih dari 1 baris
        //     shortcut comment dan unccoment 
        //     (blok kemudian tekan CTRL)
            
        
        echo $data1." dan ".$data2  ;
        echo "Operator aritmatika <br> " ;
        echo "#data3 * $data4 = ".($data3*$data4) ;
        echo "Operator pembanding <br> " ;
        echo "$data3 == $data4 = ? <br>" ;
        if($data3==$data4) {
            echo "$data3=$data4 (sama)" ;
        }else {
            echo "$data3!=$data4 (beda)" ;
        }

    ?> 
    
</body>
</html>