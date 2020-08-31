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

    $item = array(
        $nama = array("will" => "Will Byer", "mike" => "Mike Weller", "jim" => "Jim Hopper", "el" => "Eleven"),
        $age = array("will" => 12, "mike" => 12, "jim" => 43, "el" => 12),
        $aliases = array("will" => "Will the Wise", "mike" => "Dungeon Master", "jim" => "Chief Hopper", "el" => "El"),
        $status = array("will" => "Alive", "mike" => "Alive", "jim" => "Deceased", "el" => "Alive")
    );


    echo "name : " . $nama['will'] . "<br>";
    echo "age : " . $age['will'] . "<br>";
    echo "Aliases : " . $aliases['will'] . "<br>";
    echo "Status : " . $status['will'] . "<br>";


    // echo "Name : " . $items[0][0] . "<br>";
    // echo "Age : " . $items[1][0] . "<br>";
    // echo "Aliases : " . $items[2][0] . "<br>";
    // echo "Status : " . $items[3][0] . "<br>";
    // echo "<br>";

    ?>
</body>

</html>