<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        define('DB_NAME', 'bananef317');

        /** MySQL database username */
        define('DB_USER', 'bananef317');

        /** MySQL database password */
        define('DB_PASSWORD', 'bananecK71bo194');

        /** MySQL hostname */
        define('DB_HOST', 'bananef317.mysql.db:3306');

        $mysql = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql= "SELECT * FROM  ban_famille";
        $res = $mysql->query($sql);
        while (NULL !== ($row = $res->fetch_array())) {
            for($i=0;$i<sizeof($row);$i++){
                echo $row[$i];
                echo '<br/>';
                echo 'Separateur'.$i;
                echo '<br/>';
            }
        }
        $mysql->close();
    ?>

    Test Concluant
</body>

</html>