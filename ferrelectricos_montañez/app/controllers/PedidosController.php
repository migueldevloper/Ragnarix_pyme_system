<?php
class PedidosController extends BaseController
{
    public function index()
    {
        $pedidoModel = $this->loadModel('Pedido');
        $this->render('pedidos/pedidos_index.php', [
            'pedidoModel' => $pedidoModel,
        ]);
    }
}
