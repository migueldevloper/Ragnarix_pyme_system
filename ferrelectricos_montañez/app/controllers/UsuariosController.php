<?php
class UsuariosController extends BaseController
{
    public function index()
    {
        $usuarioModel = $this->loadModel('Usuario');
        $this->render('usuarios/usuarios_index.php', [
            'usuarioModel' => $usuarioModel,
        ]);
    }
}
