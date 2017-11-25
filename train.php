<?php
include 'function.php';



$ann = fann_create_shortcut_array(4, [256, 128, 100, 3]);
for ($i = 0; $i < 1000; $i++) {
    fann_train($ann, generate_frequencies(file_get_contents('./train/ru.txt')), [1, 0, 0]);
    fann_train($ann, generate_frequencies(file_get_contents('./train/en.txt')), [0, 1, 0]);
    fann_train($ann, generate_frequencies(file_get_contents('./train/fr.txt')), [0, 0, 1]);

}

fann_save($ann,'./data/text.net');



