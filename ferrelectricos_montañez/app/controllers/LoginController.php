<?php
class LoginController extends BaseController
{
    public function index()
    {
        $usuarioModel = $this->loadModel('Usuario');
        $this->render('login/login_index.php', [
            'usuarioModel' => $usuarioModel,
        ]);
    }
}
