<?php





   $lists = false;



   if ( isset($_POST['lists']))
   $lists= $_POST['lists'];
?>

<html>
  <head>
  </head>

   <body style="background-color:orange">
      <form name="ToDoListForm" method="POST" action="ToDoListController.php" >
         <br>
         <br>

        <label for='task'> task to be added:</label>
         <input type="text" id='task' name="task" required  />
         <br>
         <br>
         <input type="submit" value="add" />
         <br>
         <br>
         <?php
           if ( $lists )
           {

         ?>
            <table border = "1">
            <tr><th>slno</th><th>task</th><th>date</th><th>time</th><tr>
           <?php foreach ($lists as $list)
           {
           ?>

            <tr>
                            <td> <?php echo $list->getSlno(); ?></td>

              <td> <?php echo $list->gettask(); ?></td>
  <td> <?php  $day=strtotime($list->getDate() ) ;echo date('d/m/y',$day);  ?></td>
              <td> <?php  $ti=strtotime($list->getTime()); echo  date("h:i:sa",$ti);?></td>
                </tr>


        <?php
        }
    }

        ?>
         </table>

            </form>
   </body>
</html>
