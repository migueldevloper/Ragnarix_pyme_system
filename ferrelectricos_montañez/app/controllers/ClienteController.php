<?php
require_once __DIR__ . '/BaseController.php';

class ClienteController extends BaseController
{
    public function index()
    {
        $this->render('cliente/cliente_index.php');
    }
}
