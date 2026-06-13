<?php
class ClientesController extends BaseController
{
    public function index()
    {
        $clienteModel = $this->loadModel('Cliente');
        $this->render('clientes/clientes_index.php', [
            'clienteModel' => $clienteModel,
        ]);
    }
}
