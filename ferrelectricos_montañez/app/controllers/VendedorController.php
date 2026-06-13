<?php
require_once __DIR__ . '/BaseController.php';

class VendedorController extends BaseController
{
    public function index()
    {
        $this->render('vendedor/vendedor_index.php');
    }
}
