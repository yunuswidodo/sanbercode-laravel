<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");  // Lengkapi di sini
    $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids:" . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults:" . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";

    // Lanjutkan

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
    $items = [
        ["Will Byers", "Mike Weller", "Jim Hopper", "Eleven"],
        [12, 12, 43, 12],
        ["Will the Wise", "Dungeon Master", "Chief Hopper", "El"],
        ["Alive", "Alive", "Deceased", "Alive"]
    ];

    echo "Name : " . $items[0][0] . "<br>";
    echo "Age : " . $items[1][0] . "<br>";
    echo "Aliases : " . $items[2][0] . "<br>";
    echo "Status : " . $items[3][0] . "<br>";
    echo "<br>";

    echo "Name : " . $items[0][1] . "<br>";
    echo "Age : " . $items[1][1] . "<br>";
    echo "Aliases : " . $items[2][1] . "<br>";
    echo "Status : " . $items[3][1] . "<br>";
    echo "<br>";

    echo "Name : " . $items[0][2] . "<br>";
    echo "Age : " . $items[1][2] . "<br>";
    echo "Aliases : " . $items[2][2] . "<br>";
    echo "Status : " . $items[3][2] . "<br>";
    echo "<br>";

    echo "Name : " . $items[0][3] . "<br>";
    echo "Age : " . $items[1][3] . "<br>";
    echo "Aliases : " . $items[2][3] . "<br>";
    echo "Status : " . $items[3][3] . "<br>";
    echo "<br>";
    ?>
</body>

</html>