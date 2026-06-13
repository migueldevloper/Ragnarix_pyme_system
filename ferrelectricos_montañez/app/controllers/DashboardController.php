<?php
class DashboardController extends BaseController
{
    public function index()
    {
        $this->render('dashboard/dashboard_index.php');
    }
}
