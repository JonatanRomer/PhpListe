<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 11/6/2017
 * Time: 1:51 PM
 */

$SongList = array();

function AddSongs($s)
{
    array_push($SongList, $s);
}

function display($list)
{
    echo 'I display<br>';
    foreach ($list as $item)
    {
        echo $item->name;
        echo'<br>';
    }
}