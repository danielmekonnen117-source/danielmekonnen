<?php
// jokes.php

// List of 10 jokes
$jokes = [
    "Why don’t scientists trust atoms? Because they make up everything!",
    "I told my computer I needed a break, and it said 'No problem — I’ll go to sleep.'",
    "Why did the scarecrow win an award? Because he was outstanding in his field!",
    "I only know 25 letters of the alphabet. I don’t know y.",
    "Why don’t skeletons fight each other? They don’t have the guts.",
    "Parallel lines have so much in common. It’s a shame they’ll never meet.",
    "Why can’t you trust stairs? They’re always up to something.",
    "I used to play piano by ear, but now I use my hands.",
    "What did the ocean say to the beach? Nothing, it just waved.",
    "Why did the math book look sad? Because it had too many problems."
];

// Pick a random joke
$randomJoke = $jokes[array_rand($jokes)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Joke</title>
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
    .joke-box {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      text-align: center;
      max-width: 500px;
    }
    h1 {
      font-size: 1.5em;
      margin-bottom: 20px;
      color: #333;
    }
    button {
      background-color: #10b981;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
      transition: background 0.2s ease;
    }
    button:hover {
      background-color: #059669;
    }
  </style>
</head>
<body>
  <div class="joke-box">
    <h1><?php echo htmlspecialchars($randomJoke); ?></h1>
    <form method="POST">
      <button type="submit">Get New Joke</button>
    </form>
  </div>
</body>
</html>