<?php
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Greeting</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .box {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      text-align: center;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 15px;
      background: #2563eb;
      color: white;
      text-decoration: none;
      border-radius: 6px;
    }
    a:hover {
      background: #1d4ed8;
    }
  </style>
</head>
<body>
  <div class="box">
    <?php if (!empty($name)): ?>
      <h1>Hello, <?= htmlspecialchars($name) ?>! What's up?</h1>
    <?php else: ?>
      <h1>Please enter your name.</h1>
    <?php endif; ?>
    <a href="form.html">Go Back</a>
  </div>
</body>
</html>