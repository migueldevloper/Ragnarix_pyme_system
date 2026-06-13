<?php
require_once __DIR__ . '/BaseController.php';

class ComprasController extends BaseController
{
    public function index()
    {
        $this->render('compras/compras_index.php');
    }
}
