<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            height: 3px;
            width: 3px;
            padding: 0px;
        }
        .cz{
            background-color:black;
        }
         .b{
            background-color:black;
        }
    </style>
</head>
<body>
    <?php
    echo '<table>';
    for($i=0;$i<30;$i++){
        echo '<tr>';

        for($i2=0;$i2<30;$i2++){
            $losowanie= rand(0,1);

            if($losowanie==0){
                echo '<td class="b"></td>';
            }

            if($losowanie==1){
                echo '<td class="cz"></td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>'

    ?>
</body>
</html>