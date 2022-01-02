<?php

class ToDo{
  private $slno;

    private $time;
    private $task;
private $date;

    public function __construct($slno,$task,$date,$time)
    {
      $this->slno=$slno;

        $this->time=$time;
        $this->task=$task;
        $this->date=$date;


    }

    public function getSlno()
    {
       return $this->slno;
    }

    public function setSlno($slno)
    {
       $this->slno= $slno;
    }


    public function getTime()
    {
       return $this->time;
    }

    public function setTime($time)
    {
       $this->time= $time;
    }

        public function getDate()
        {
           return $this->date;
        }

        public function setDate($date)
        {
           $this->date= $date;
        }

    public function getTask()
    {
       return $this->task;
    }

    public function setTask($task)
    {
       $this->task= $task;
    }




}







?>
