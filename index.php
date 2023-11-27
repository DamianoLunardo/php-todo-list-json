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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
  
<div id="app">
    <main>
      <section>
        <div class="container">
          <h1> {{ title }}</h1>
          <input type="text" v-model="newTodo" @keyup.enter="storeTodo">
        </div>
      </section>

      <section>
        <div class="container mt-5 text-center ">
          <table class="table">
            <thead>
              <tr>
                <th>Task</th>
                <th>Done</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(todo, i) in todos" :key="i">
                <td>{{ todo }}</td>
                <td><input type="checkbox" ></td>
                <td><button class="btn btn-danger" @click="deleteTodo(i)">remove</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

<script src="./app.js"></script>
</body>
</html>