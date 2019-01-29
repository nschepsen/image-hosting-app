<?php

class About extends Controller
{
    public function index()
    {
        try
        {
            $this->view('about/index');
        }
        catch(Exception $e)
        {
            $this->view('notifications/exception', array('message' => $e->getMessage()));
        }
    }
}
