<?php

$title = 'PHP ToDo List JSON';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div id="app">
    <main>
      <section>
        <div class="container">
          <h1> {{ title }}</h1>
        </div>
      </section>

      <section>
        <div class="container">
          <ul>
            <li>Ciao</li>
            <li>Prova</li>
            <li>Lista</li>
            <li>uno</li>
          </ul>
        </div>
      </section>
    </main>
  </div>

<script src="./app.js"></script>
</body>
</html>