<?php
//connect to the database
session_start();
$db = mysqli_connect('localhost','root','','sampledb');
$tableID = $_SESSION['userID'];
if(!isset($_SESSION['num'])){
    $_SESSION['num']=1;
}
if($_SESSION['num']==0){
    unset($_SESSION['num']);
}
if(isset($_POST['submit'])){
    $task = $_POST['task'];
    if(empty($task)){
        $errors = "You must fill in the tasks";
    }else{
        $num = $_SESSION['num'];
        $tableID = $_SESSION['userID'];
        $_SESSION['num']++;
        mysqli_query($db,"INSERT INTO tasks(task,num,ID) VALUES ('$task','$num','$tableID')");
        header('location: todolist.php');
    }
}

//delete task
if(isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    $temp1 = mysqli_query($db,"SELECT * FROM tasks WHERE tableID=$id");
    $temp2 = mysqli_fetch_array($temp1);
    $temp3 = $temp2['num']+1;
    mysqli_query($db,"DELETE FROM tasks WHERE tableID=$id");
    $result = mysqli_query($db,"SELECT * from tasks WHERE num>=$temp3");
    $array = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    $_SESSION['temp3'] = $temp3;
    $_SESSION['count'] = $count;    
    while($count!=0){
        $temp4 = mysqli_query($db,"SELECT * FROM tasks WHERE num=$temp3");
        $temp5 = mysqli_fetch_array($temp4);
        $temp6 = $temp5['num']-1;
        $temp7 = $temp5['tableID'];
        mysqli_query($db,"UPDATE tasks SET num=$temp6 WHERE tableID=$temp7");
        $count--;
        $temp3++;
    }
    $_SESSION['num']--;
    $num = $_SESSION['num'];
    header('location: todolist.php');
}

$tasks = mysqli_query($db,"SELECT * FROM tasks WHERE ID = '$tableID'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="todolist.css">
</head>
<body>
    <div class="heading">
        <h2>TODO List</h2>
    </div>
    <form method="POST" action="todolist.php">
    <?php if(isset($errors)) { ?>
        <p><?php echo $errors; ?></p>
    <?php }?>
        <input type="text" name="task" class="task_input">
        <button type="submit" class="add_btn" name="submit">Add Task</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($tasks)){
        ?>
            <tr>
                <td><?php echo $row['num']; ?></td>
                <td class="task"><?php echo $row['task']; ?></td>
                <td class="delete">
                    <a href="todolist.php?del_task=<?php echo $row['tableID']; ?>">x</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>