<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<?php   session_start();
        if(!isset($_SESSION['email'])){
            header('location:login.php');
        }
?>
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Place Prep</header>
      <a>
        <i class="far fa-user-circle"></i>
        <span><?php echo $_SESSION["email"] ?></span></a>
      </a>
      <a href="todolist.php">
        <i class="far fa-list-alt"></i>
        <span>Todo list</span>
      </a>
      <a href="quiz.php">
        <i class="far fa-clock"></i>
        <span>Quiz</span>
      </a>
      <a href="swdevgame.html">
         <i class="fas fa-puzzle-piece"></i>
        <span>S/w Dev Game</span>
      </a>
      <a href="mlgame.html">
        <i class="fas fa-puzzle-piece"></i>
        <span>ML Game</span>
      </a>
      <a href="dsagame.html">
        <i class="fas fa-puzzle-piece"></i>
        <span>DSA Game</span>
      </a>
      <a href="#">
        <i class="far fa-sticky-note"></i>
        <span>Alumni reviews</span>
      </a>
      <a href="resources.html">
        <i class="far fa-calendar"></i>
        <span>Resources</span>
      </a>
      <a href="tech.html">
        <i class="fas fa-chart-bar"></i>
        <span>Technologies</span>
      </a>
      <a href="#">
        <i class="far fa-comment-dots"></i>
        <span>ChatBot</span>
      </a>
      <a href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        <span>LogOut</span>
      </a>
    </div>
</body>
</html>