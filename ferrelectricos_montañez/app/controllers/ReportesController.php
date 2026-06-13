<?php
class ReportesController extends BaseController
{
    public function index()
    {
        $reporteModel = $this->loadModel('Reporte');
        $this->render('reportes/reportes_index.php', [
            'reporteModel' => $reporteModel,
        ]);
    }
}
