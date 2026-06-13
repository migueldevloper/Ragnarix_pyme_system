<?php
require_once __DIR__ . '/BaseController.php';

class BodegaController extends BaseController
{
    public function index()
    {
        $this->render('bodega/bodega_index.php');
    }
}
