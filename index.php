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

</body>
</html>

