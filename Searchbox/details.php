<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $Name = $_POST['search'];

    $sql = 'SELECT * FROM feedback WHERE Name = :Name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['Name' => $Name]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-8 mx-auto">
        <div class="card shadow">
          <div class="card-header">
            <h1><?= $row['Name'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b>Address :</b> <?= $row['Address'] ?></h4>
            <h4><b>Email :</b> <?= $row['Email'] ?></h4>
            <h4><b>Date :</b> <?= $row['Date'] ?></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>