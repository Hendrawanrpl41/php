<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>LIST DATA TYPE</h1>
    </div>
    <div>
        <table border=1>
            <tr>
                <td>No</td>
                <td>name</td>
                <td>information</td>
                <td>created</td>
                <td>updated</td>
                <td>deleted</td>
            </tr>
            <?PHP
            //import 
            include "../controllers/listUser.php";
            
            //variabel number
            $i=0;
            //loopup data
            foreach($TbType as $value){
                $i+=2;
                echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$value["name"]."</td>";
                    echo "<td>".$value["information"]."</td>";
                    echo "<td>".$value["created"]."</td>";
                    echo "<td>".$value["updated"]."</td>";
                    echo "<td>".$value["deleted"]."</td>";
                echo"</tr>";
            }
            
            ?>
        </table>
    </div>
    
</body>
</html>