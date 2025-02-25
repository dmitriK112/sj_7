<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php
        echo "sposob 1";
        echo "<br>";
        echo 'sposob 2';
        echo "<br>";
        echo ('sposob 3');
        echo "<br>";
        $name = "name";
        echo $name;
        echo "<br>";
        var_dump($name);
        //array
        $farby = array("červená", "modrá", "zelená");
        echo $farby[0];
        echo "<br>";
        echo $farby[1];
        echo "<br>";
        //for
        foreach ($farby as $farba){
            echo "Fraba: ". $farba. "<br>";
        }
        //dictionary
        $data = array("Peter" => 25,
            "Jan" => 30,
            "Juraj" => 20);
        foreach ($data as $name => $kluc){
            echo "$name: $kluc"."<br>";
        }
        foreach ($data as $name => $age){
            echo "$name ma $age rokov <br>";
        }

    ?>
</body>
</html>
