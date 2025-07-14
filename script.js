const button = document.querySelector("button");
const form = document.querySelector("form");

function showTask(title) {
    const todos_container = document.querySelector(".todos-container");
    const todo_item = document.createElement("div");
    todo_item.classList.add("todo-item");
    todo_item.classList.add("d-flex");
    todo_item.innerHTML = `
    <div class="title-body">
        <input type="checkbox" id="">
        <span>${title}</span>
    </div>
    <div class="todo-btn">
        <button id="" class="btn btn-del"><i class="fa-solid fa-trash"></i></button>
        <button id="" class="btn btn-up"><i class="fa-solid fa-pen-to-square"></i></button>
    </div>`
    todos_container.appendChild(todo_item);
}

function getData() {
    fetch('tasks_api.php')
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          data.tasks.forEach(task => {
            showTask(task.title);
          });
        } else {
          console.error('API error:', data.error);
        }
      })
      .catch(error => console.error('Fetch error:', error));
}
getData();

button.addEventListener("click", ()=>{
    if(form.classList.contains !== "row"){
        form.classList.add("row");
    }
});

form.addEventListener('submit', (e) => {
    e.preventDefault();
    form.classList.remove("row");
    const inputId = document.getElementById("title");
    showTask(inputId.value);
    inputId.value = '';
});