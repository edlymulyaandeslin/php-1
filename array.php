<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlatih array</title>
</head>

<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3> Soal 1 </h3>";
    /* SOAL NO 1
    Kelompokkan nama-nama di bawah ini ke dalam Array. 
    Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
    Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
    $kids = ['Mike', 'Dustin', 'Will', 'Lucas', 'Max', 'Eleven'];
    $adults = ['Hopper', 'Nancy', 'joyce', 'Jonathan', 'Murray'];

    var_dump($kids);
    echo '<br/>';
    var_dump($adults);

    echo "<h3> Soal 2</h3>";
    /* SOAL NO 2
    Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
    echo "Cast Stranger Things: ";
    echo "<br/>";
    echo "Total Kids: "; // Berapa panjang array kids echo "<br>";
    echo count($kids);
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    // Lanjutkan
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";

    echo "</ol>";
    echo "Total Adults: "; // Berapa panjang array adults echo "<br>";
    echo count($adults);
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    // Lanjutkan
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    echo "</ol>";

    /* SOAL No 3
    Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
    Name: "Will Byers" Age: 12, Aliases: "Will the Wise" Status: "Alive" 
    Name: "Mike Wheeler" Age: 12, Aliases: "Dungeon Master" Status: "Alive" 
    Name: "Jim Hopper" Age: 43, Aliases: "Chief Hopper" Status: "Deceased"
    Name: "Eleven" Age: 12, Aliases: "El" Status: "Alive" Output: Array
    (
    [0] => Array
    (
    [Name] => Will Byers [Age] => 12
    [Aliases] => Will the Wise
    [Status] => Alive
    )
    [1] => Array
    (
    [Name] => Mike Wheeler [Age] => 12
    [Aliases] => Dugeon Master [Status] => Alive
    )
    [2] => Array
    (
    [Name] => Jim Hooper [Age] => 43
    [Aliases] => Chief Hopper [Status] => Deceased
    )
    [3] => Array
    (
    [Name] => Eleven
    [Age] => 12
    [Aliases] => El
    [Status] => Alive
    )
    ) */
    echo '<h3>Soal 3</h3>';
    $array = [
        [
            'name' => 'Will Byers',
            'age' => 12,
            'aliases' => 'Will the Wise',
            'status' => 'Alive'
        ],
        [
            'name' => 'Mike Wheeler',
            'age' => 12,
            'aliases' => 'Dugeon Master',
            'status' => 'Alive'
        ],
        [
            'name' => 'Jim Hooper',
            'age' => 43,
            'aliases' => 'Chief Hopper',
            'status' => 'Deceased'
        ],
        [
            'name' => 'Eleven',
            'age' => 12,
            'aliases' => 'El',
            'status' => 'Alive'
        ]
    ];
    print_r($array[0]);
    echo '<br/>';
    print_r($array[1]);
    echo '<br/>';
    print_r($array[2]);
    echo '<br/>';
    print_r($array[3]);
    ?>
</body>

</html>