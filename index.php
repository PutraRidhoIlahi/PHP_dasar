<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loping</title>
</head>
<body>
  <h1>Berlatih Looping</h1>

<?php
for ($i = 1; $i <= 20; $i++)
{
  echo "I Love PHP $i \n";
}
// looping kedua

for ($i = 20; $i >= 2; $i-=2)
{
    echo "$i I LOVE PHP \n";
}
?>

<!-- looping array module -->
<h3> soal nomor </h3>
<?php
// Array angka
$numbers = array(18, 45, 29, 61, 47, 34);
$rest = array();
foreach ($numbers as $nilai) {
    $rest[] = $nilai % 5;
}
echo "Array Rest: ";
foreach ($rest as $hasil) {
    echo $hasil . " ";
}
?>

<h3>loop associative array</h3>
<?php
$items = array(
    array(
        "id" => 001,
        "name" => "Keyboard Logistik",
        "price" => 60000,
        "description" => "Keyboard Yang Mantab Untuk Kantoran",
        "source" => "logitek.jpeg"
    ),
    array(
        "id" => 002,
        "name" => "Keyboard MSI",
        "price" => 3000000,
        "description" => "Keyboard Gaming MSI mekanik",
        "source" => "msi.jpeg"
    ),
    array(
        "id" => 003,
        "name" => "Mouse Genius",
        "price" => 50000,
        "description" => "Mouse Genius Biar lebih pintar",
        "source" => "genius.jpeg"
    ),  
    array(
      "id" => 004,
      "name" => "Mouse jerry",
      "price" => 30000,
      "description" => "Mouse yang disukai kucing",
      "source" => "jerry.jpeg"
  )
);
foreach ($items as $item) {
    echo "ID: " . $item["id"] . "";
    echo "Name: " . $item["name"] . "";
    echo "Price: $" . $item["price"] . "";
    echo "Description: " . $item["description"] . "";
    echo "Source: " . $item["source"] . "";
    echo "\n";
}
?>

<!-- soal membuat asterix -->
<h3>asterix</h3>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "\n";
}
?>


</body>
</html>

