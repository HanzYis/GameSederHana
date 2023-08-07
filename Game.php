<?php
echo "wellcome HanzYiz\n";
while (true){
echo "=====Game Tebak Angka====\n";
echo "Tebak sebuah angka antaara 1 dan 9!\n";
$komputer = rand(1,9);
echo "Masukan Tebakan mu :";
$player = trim(fgets(STDIN));
if ($player == $komputer) {
    echo "Kamu Win\n";
    echo "Kamu benar karna tebakan nya ialah $komputer";
    exit;
} else {
    echo "Kamu Kalah\n";
    echo "Tebakan nya ialah $komputer\n\n\n\n";
}

}