<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>To Do List</title>
</head>
<body>
    <div class="container">
        <div class="header d-flex">
            <h1 class="text-center">To Do List</h1>
        </div>

        <div class="todos-container row">
            <button class="btn add-btn text-white">Add Task</button>
            <!-- Add To do using javascript -->
        </div>

        <form>
            <input type="text" id="title" placeholder="Task Title" required>
            <input type="date" name="start_date">
            <input type="date" name="end_date">
            <select name="repeation">
              <option value="">No Repeat</option>
              <option value="Daily">Daily</option>
              <option value="Weekly">Weekly</option>
              <option value="Monthly">Monthly</option>
            </select>
            <button type="submit" name="add" class="btn add-btn">Add Task</button>
        </form>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>