<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once './database/config.php';
require_once './database/database.php';
require_once './Model/card.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();


$cardRepository = new CardRepository($databaseManager);
$card = $cardRepository->get();


$action = $_GET['action'] ?? null;   // ASK ?? 

switch ($action) {
    case 'create':
        create($cardRepository);
        break;
    case 'update':
        update($cardRepository);

        break;
    case 'delete':
        delete($cardRepository);
        break;    
    default:
        read($card);
        break;
}

function read($card)
{
    require './view/read.php';
}

function create($cardRepository)
{
    if(!empty($_POST)){
        header("Location: index.php");
        $cardRepository->create();
    }
    require_once "./view/create.php";
    
}

function update($cardRepository){
    if(!empty($_POST)){
        $cardRepository->update($_GET['id']);
        header("Location: index.php"); 
    }
    require_once "./view/update.php";
}

function delete($cardRepository){
    $cardRepository->delete();
    header("Location: index.php");
}