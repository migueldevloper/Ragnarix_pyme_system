<?php
class PerfilController extends BaseController
{
    public function index()
    {
        $perfilModel = $this->loadModel('Perfil');
        $this->render('perfil/perfil_index.php', [
            'perfilModel' => $perfilModel,
        ]);
    }
}
