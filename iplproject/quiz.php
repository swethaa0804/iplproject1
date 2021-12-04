    <?php 
    session_start();
    $db = mysqli_connect('localhost','root','','sampledb');
    $sql = "select * from questions";
    $que = array();
    $res = $db -> query($sql);
    if($res->num_rows>0)
    {
        while($row=$res->fetch_assoc())
        {
            $que[] = $row;
        }
    }
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="quiz.css">
    <title>Document</title>
</head>
<body>
    <h1>Quiz</h1>
    <h2 id="status"></h2>
    <div id="board">

    </div>
    <script>
    <?php 
        echo 'var questions='.json_encode($que).';';
    ?>
    </script>
    <script src="quiz.js"></script>
    <script>
        DisplayQuestions();
    </script>
</body>
</html>