<?php

function saveToFile($filename, $data)
{
    file_put_contents($filename, implode(';', $data) . '|', FILE_APPEND);
}

function getAllFromFile($filename)
{
    $games = explode('|', file_get_contents($filename));

    $gamesArray = [];
    foreach ($games as $key => $game) {
        $gamesArray[] = explode(';', $game);
    }

    array_pop($gamesArray);

    return $gamesArray;
}
