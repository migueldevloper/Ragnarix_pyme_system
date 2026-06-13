<?php
class AnalyticsController extends BaseController
{
    public function index()
    {
        $analyticsModel = $this->loadModel('Analytics');
        $this->render('analytics/analytics_index.php', [
            'analyticsModel' => $analyticsModel,
        ]);
    }
}
