// Define canvas element and context
const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

// Define snake object
let snake = {
  x: 20,
  y:20,
  dx: 10,
  dy: 0,
  cells: [],
  maxCells: 4
};

// Handle keyboard input
document.addEventListener("keydown", function(event) {
  if (event.keyCode === 37 && snake.dx === 0) {
    snake.dx = -10;
    snake.dy = 0;
  } else if (event.keyCode === 38 && snake.dy === 0) {
    snake.dy = -10;
    snake.dx = 0;
  } else if (event.keyCode === 39 && snake.dx === 0) {
    snake.dx = 10;
    snake.dy = 0;
  } else if (event.keyCode === 40 && snake.dy === 0) {
    snake.dy = 10;
    snake.dx = 0;
  }
});

// Update game state
function update() {
  // Move snake
  snake.x += snake.dx;
  snake.y += snake.dy;

  // Add new cell to snake
  snake.cells.unshift({ x: snake.x, y: snake.y });

  // Remove extra cells
  if (snake.cells.length > snake.maxCells) {
    snake.cells.pop();
  }
}

// Draw game on canvas
function draw() {
  // Clear canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Draw snake
  ctx.fillStyle = "green";
  snake.cells.forEach(function(cell, index) {
    ctx.fillRect(cell.x, cell.y, 10, 10);
  });
}

// Main game loop
function loop() {
  // Update game state
  update();

  // Draw game on canvas
  draw();

  // Request next frame
  requestAnimationFrame(loop);
}

// Start game loop
requestAnimationFrame(loop);
