<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Subscribe',// instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'WaoDc0cvoNR1eUiM' // instruction: change this to your database password
    );
}
