<?php
// !Pengulangan : For, While, do....while, Foreach (khusus array)

// ?For
for ($i = 0; $i < 5; $i++) {
  echo "Hello World";
}

// ?While
$i = 0;
while ($i < 5) {
  echo "Hello World";
  $i++;
}

// ?Do ...while
// !Do while minimal di kerjakan sekali kalau false, sedangkan while tidak akan pernah dijalankan
$i = 0;
do {
  echo "Hello World";
  $i++;
} while ($i < 5);
