<?php
class Home extends Controller
{

    public function index($param1 = '', $param2 = '', $param3 = '', $param4 = '', $param5 = '')
    {
        $this->view('home/index');
    }
    public function form()
    {
        echo "Esse e seu formulario";
    }
    public function cadastro()
    {
        echo "voce foi cadastrado";
    }
}