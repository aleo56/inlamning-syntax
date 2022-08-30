<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $huvudstader = [
        "Sverige" => "Stockholm",
        "Finland" => "Helsingfors",
        "Danmark" => "Köpenhamn",
        "Norge" => "Oslo",
        "Island" => "Reykjavik",
        "Estland" => "Tallinn",
        "Lettland" => "Riga",
        "Litauen" => "Vilnius"
    ];


    foreach ($huvudstader as $land => $land_huvudstader) {
        echo "$land's huvudstad heter $land_huvudstader. <br>";
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Land</th>
                <th>Huvudstad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $land = array(
                "Sverige" => "Stockholm",
                "Finland" => "Helsingfors",
                "Danmark" => "Köpenhamn",
                "Norge" => "Oslo",
                "Island" => "Reykjavik",
                "Estland" => "Tallinn",
                "Lettland" => "Riga",
                "Litauen" => "Vilnius"
            );
            foreach ($land as $land_huvudstader => $huvudstader) {
                echo ("<tr>");
                echo ("<td>$land_huvudstader</td>");
                echo ("<td>$huvudstader</td>");
                echo ("<tr>");
            }
            ?>
        </tbody>

    </table>

</body>

</html>