<?php 
namespace App\AmkOnlineShop\Databases;
use PDO;
use PDOException;

class ProductModel 

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // product create function
 public function ProductCreate($data)
 {
  $sql = "INSERT INTO products (product_name, category_id, price, old_price, qty, description, file_name, product_status) VALUES (:product_name, :category_id, :price, :old_price, :qty, :description, :file_name, :product_status)";
  $stmt = $this->db->prepare($sql);
  $stmt->bindParam(':product_name', $data['product_name']);
  $stmt->bindParam(':category_id', $data['category_id']);
  $stmt->bindParam(':price', $data['price']);
  $stmt->bindParam(':old_price', $data['old_price']);
  $stmt->bindParam(':qty', $data['qty']);
  $stmt->bindParam(':description', $data['description']);
  $stmt->bindParam(':file_name', $data['file_name']);
  $stmt->bindParam(':product_status', $data['product_status']);
  $stmt->execute();
  return $stmt->rowCount();
 }

 // get all product with category name
 public function GetAllProduct()
 {
  $sql = "SELECT products.*, categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_OBJ);
 }

 // get product by id with category name
 public function GetProductById($id)
 {
  $sql = "SELECT products.*, categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id WHERE products.id = :id";
  $stmt = $this->db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_OBJ);
 }


 // product update method no use bindParam
 public function ProductUpdate($id, $data)
{
    $sql = "UPDATE products SET product_name = :product_name, category_id = :category_id, price = :price, old_price = :old_price, qty = :qty, description = :description WHERE id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':product_name', $data['product_name']);
    $stmt->bindParam(':category_id', $data['category_id']);
    $stmt->bindParam(':price', $data['price']);
    $stmt->bindParam(':old_price', $data['old_price']);
    $stmt->bindParam(':qty', $data['qty']);
    $stmt->bindParam(':description', $data['description']);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->rowCount();
}

 // product delete method
 public function ProductDelete($id)
 {
  $sql = "DELETE FROM products WHERE id = :id";
  $stmt = $this->db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->rowCount();
 }

 // product status update method 
public function ProductStatusUpdate($id, $product_status)
    {
        $statement = $this->db->prepare(
            "UPDATE products SET product_status=:product_status WHERE id = :id"
        );
        $statement->execute([':product_status' => $product_status, ':id' => $id]);

        return $statement->rowCount();
    }

    // get all products with pagination
 public function ProductPagination($start, $limit)
 {
  try {
   $query = "SELECT products.*, categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id LIMIT $start, $limit";
   $statement = $this->db->prepare($query);
   $statement->execute();
   return $statement->fetchAll(PDO::FETCH_OBJ);
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // search product
 public function ProductSearch($search)
 {
  try {
   $query = "SELECT products.*, categories.category_name FROM products INNER JOIN categories ON products.category_id = categories.id WHERE products.product_name LIKE '%$search%' OR categories.category_name LIKE '%$search%'";
   $statement = $this->db->prepare($query);
   $statement->execute();
   return $statement->fetchAll(PDO::FETCH_OBJ);
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }
}