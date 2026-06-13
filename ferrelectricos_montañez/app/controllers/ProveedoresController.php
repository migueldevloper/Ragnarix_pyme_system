<?php
class ProveedoresController extends BaseController
{
    public function index()
    {
        $proveedorModel = $this->loadModel('Proveedor');
        $this->render('proveedores/proveedores_index.php', [
            'proveedorModel' => $proveedorModel,
        ]);
    }
}
