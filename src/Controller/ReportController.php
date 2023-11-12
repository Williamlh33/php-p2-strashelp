<?php

namespace App\Controller;

use App\Model\ReportManager;

class ReportController extends AbstractController
{
    public function showReports()
    {
        $reportManager = new ReportManager();
        $reports = $reportManager->selectAll();

        return $this->twig->render('Home/index.html.twig', ['reports' => $reports]);
    }
}
