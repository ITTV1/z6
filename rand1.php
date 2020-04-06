<?php

# Извлечение строки методом  языка пхп со случайным номером в файле
  $files = fopen("t.txt", "r");
  // Прочитываем  функцией пхп каждую строку в файле
  for ($i = 0; $s = fgets($files, 100); $i++) {
    if (mt_rand(0, $i) == 0) $lines = $s;
  }
  echo $lines;

//
// int  mt_getrandmax()
//RAND_MAX
//
//void mt_srand(int $s)
?>
