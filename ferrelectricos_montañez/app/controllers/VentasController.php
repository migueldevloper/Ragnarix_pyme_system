<?php
class VentasController extends BaseController
{
    public function index()
    {
        $ventaModel = $this->loadModel('Venta');
        $this->render('ventas/ventas_index.php', [
            'ventaModel' => $ventaModel,
        ]);
    }
}
