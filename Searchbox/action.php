<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT Name FROM `items` WHERE Name LIKE :Name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['Name' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['Name'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>