<?php
require_once __DIR__ . '/BaseController.php';

class MensajesController extends BaseController
{
    public function index()
    {
        $this->render('mensajes/mensajes_index.php');
    }
}
