<?php

interface WorkInterface {
    public function work();
    public function sleep();
}

class HumanWorker implements WorkInterface {

    public function work()
    {
        return 'human working';
    }

    public function sleep()
    {
        return 'human sleeping';
    }
}


class AndroidWorker implements WorkInterface{

    public function work()
    {
        return 'android working';
    }

    public function sleep()
    {
        return null; // is forced to implement a method which is not applicable to the class
    }
}

class Captain {

    public function manage(Worker $worker)
    {
        $worker->work();
        $worker->sleep();
    }

}