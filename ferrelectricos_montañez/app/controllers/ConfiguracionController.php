<?php
class ConfiguracionController extends BaseController
{
    public function index()
    {
        $configuracionModel = $this->loadModel('Configuracion');
        $this->render('configuracion/configuracion_index.php', [
            'configuracionModel' => $configuracionModel,
        ]);
    }
}
