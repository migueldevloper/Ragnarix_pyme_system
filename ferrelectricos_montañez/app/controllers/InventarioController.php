<?php
class InventarioController extends BaseController
{
    public function index()
    {
        $inventarioModel = $this->loadModel('Inventario');
        $this->render('inventario/inventario_index.php', [
            'inventarioModel' => $inventarioModel,
        ]);
    }
}
