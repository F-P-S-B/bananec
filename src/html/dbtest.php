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
        $ssFamille=1;
        $mysql = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql= "SELECT inv_nom, inv_unite, inv_prix, inv_qte, inv_description, inv_photo FROM  ban_inventaire WHERE inv_idSousFamille=".$ssFamille;
        $res = $mysql->query($sql);
        $j=1;
        while (NULL !== ($row = $res->fetch_array())) {
            echo "Element ".$j;
            echo "<br/>";
            echo "Nom : ".$row[0];
            echo "<br/>";
            echo "Unité : ".$row[1];
            echo "<br/>";
            echo "Prix : ".$row[2];
            echo "<br/>";
            echo "Quantité : ".$row[3];
            echo "<br/>";
            echo "Description : ".$row[4];
            echo "<br/>";
            echo "Photo : <br/><img src='".$row[5]."' alt='".$row[4]."'/>";
            echo "<br/>";

            $j++;
        }
        $mysql->close();
    ?>

    Test Concluant
</body>

</html>