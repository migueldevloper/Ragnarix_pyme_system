<?php
class ProductosController extends BaseController
{
    public function index()
    {
        $productoModel = $this->loadModel('Producto');
        $this->render('productos/productos_index.php', [
            'productoModel' => $productoModel,
        ]);
    }
}
