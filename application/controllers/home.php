<?php

class Home extends Controller
{
    public function index()
    {
        try
        {
            $this->view('home/index');
        }
        catch(Exception $e)
        {
            $this->view('notifications/exception', array('message' => $e->getMessage()));
        }
    }
}

?>
