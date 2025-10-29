<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $dob = htmlspecialchars($_POST['dob']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
} else {
    echo "<h2>No data submitted!</h2>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .container { text-align: left; }
    h1 { text-align: center; color: #2575fc; }
    p { color: #555; line-height: 1.6; }
  </style>
</head>
<body>
  <div class="container">
    <h1>🎉 Registration Successful</h1>
    <p><strong>Full Name:</strong> <?= $fullname ?></p>
    <p><strong>Date of Birth:</strong> <?= $dob ?></p>
    <p><strong>Nationality:</strong> <?= $nationality ?></p>
    <p><strong>Address:</strong> <?= nl2br($address) ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>

    <a href="index.html"><button>← Register Another</button></a>
  </div>
</body>
</html>

