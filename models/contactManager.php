<?php

class ContactManager {
    private $db;

    public function __construct($host, $dbName, $username) {
        try {
            // Connect to the database
            $this->db = new PDO("mysql:host=$host;dbname=$dbName", $username);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
        }
    }

    public function getContacts() {
        $stmt = $this->db->query('SELECT * FROM contacts');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContact($id) {
        $stmt = $this->db->prepare('SELECT * FROM contacts WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createContact($name, $email, $phone) {
        $stmt = $this->db->prepare('INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        echo "intenta fechar ";
        $stmt->execute();
        echo "intenta enviar ";
    }

    public function updateContact($id, $name, $email, $phone) {
        $stmt = $this->db->prepare('UPDATE contacts SET name = :name, email = :email, phone = :phone WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function deleteContact($id) {
        $stmt = $this->db->prepare('DELETE FROM contacts WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

