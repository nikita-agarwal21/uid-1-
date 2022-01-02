<?php

require_once 'TodoList.php';
require_once 'ToDolistDao.php';
require_once 'DatabaseUtilities.php';


class ToDoListDaoImpl implements ToDoListDao
{
    public function add($task)
    {
        $connection=DatabaseUtilities::getConnection('notes');
        $sql= "insert into todolist (task,date,timestamp) values (?,now(),now())";
        $statement=$connection->prepare($sql);
        $statement->bind_param("s",$task);
        if($statement->execute())
        echo "";
        else
        echo $statement->error;

        $statement->close();
        $connection->close();
    }
    public function update()
    {
        $todos=array();
        $connection=DatabaseUtilities::getConnection('notes');
        $sql="select * from todolist";
        $resultSet=$connection->query($sql);
        if($resultSet->num_rows > 0)

            while($row=$resultSet->fetch_assoc())
            {
                $todo=new ToDo($row['slno'],$row['task'],$row['date'],$row['time']);
                $todos[]=$todo;
        }
        $resultSet->close();
        $connection->close();

        return $todos;
    }
}


?>
