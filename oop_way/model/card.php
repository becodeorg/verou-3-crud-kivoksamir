<?php

class CardRepository
{
    private DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
    
    // Create
    public function create(): void // void make the function return nothing 
    {
        if(!empty($_POST["username"]) && (!empty($_POST["email"]))){
                $username = $_POST["username"];
                $email = $_POST["email"];
                if(isset($_POST["submit"])){
                $sql = "INSERT INTO `users`(username, email)
                VALUES('$username', '$email')";
                $statement = $this->databaseManager->connection->prepare($sql);
                $statement->execute();
            }
        }
    }

    // Get one
    public function find()//: array
    {

    }

    // Get all
    public function get(): array
    {
        $sql = "SELECT * FROM users";
        $statement = $this->databaseManager->connection->prepare($sql);
        $statement->execute();
        $elements = $statement->fetchAll();
        return $elements;    
    }
    
    // Update
    public function update($id): void
    {
        if(isset($_POST['update'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $sql = "UPDATE `users` SET `id` = '$id', username = '$username', email = '$email' WHERE `users`.`id` = '$id' ";
            $statement = $this->databaseManager->connection->prepare($sql);
            $statement->execute();
        }
    }
    
    // Delete
    public function delete(): void
    {
        $sql ="DELETE FROM `users` WHERE (`id` = '{$_GET['id']}')";
        $statement =$this->databaseManager->connection->prepare($sql);
        $statement->execute();
    }
}