<?php

class Controller
{
    protected $template = null;

    public function __construct()
    {
        $twig = new Twig_Loader_Filesystem(TEMPLATE_DIR);

        $this->template = new Twig_Environment
        (
            $twig, [ 'auto_reload' => true, 'autoescape' => 'html' ]
        );

        $this->template->addGlobal
        (
            'server', $_SERVER
        );

        $this->template->addGlobal
        (
            'app', Config::$appdata
        );

        $this->template->addGlobal('session', $_SESSION);
    }

    public function model($model)
    {
        require_once MODEL_DIR . $model . '.php'; return new $model();
    }

    public function view($view, $data = [])
    {
        $this->template->addGlobal('action', $view);
        $this->template->display($view . '.twig', $data);
    }
}

?>
