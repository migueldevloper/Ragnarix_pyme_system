<?php
class NotificacionesController extends BaseController
{
    public function index()
    {
        $notificacionModel = $this->loadModel('Notificacion');
        $this->render('notificaciones/notificaciones_index.php', [
            'notificacionModel' => $notificacionModel,
        ]);
    }
}
