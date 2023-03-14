<?php 
namespace App\AmkOnlineShop\Databases;

use PDO;
use PDOException;

class OrderModel {

    private $db = null;  // property

  public function __construct($db)
 {
  $this->db = $db->connect();
 }

    public function OrderCreate(array $data): int {
        try {
            $query = "INSERT INTO orders (payment_method, card_name, card_no, exp_date, cvv_no, product_id, quantity, price, total_price, user_id, order_date, order_status, order_number) VALUES (:payment_method,:card_name,:card_no,:exp_date,:cvv_no,:product_id,:quantity,:price,:total_price,:user_id,NOW(),:order_status,:order_number)";

            $statement = $this->db->prepare($query);
            $statement->bindValue(':payment_method', $data['payment_method']);
            $statement->bindValue(':card_name', $data['card_name']);
            $statement->bindValue(':card_no', $data['card_no']);
            $statement->bindValue(':exp_date', $data['exp_date']);
            $statement->bindValue(':cvv_no', $data['cvv_no']);
            $statement->bindValue(':product_id', $data['product_id']);
            $statement->bindValue(':quantity', $data['quantity']);
            $statement->bindValue(':price', $data['price']);
            $statement->bindValue(':total_price', $data['total_price']);
            $statement->bindValue(':user_id', $data['user_id']);
            $statement->bindValue(':order_status', $data['order_status']);
            $statement->bindValue(':order_number', $data['order_number']);

            if ($statement->execute()) {
                return (int)$this->db->lastInsertId();
            }

            return -1;

        } catch (PDOException $e) {
            return -1;
        }
    }
}