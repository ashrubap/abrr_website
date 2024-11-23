<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report_list()
    {
        return view('website.reports');
    }
    public function single_report($report_url)
    {
        if (empty($report_url)) {
           redirect('/');
        }
        // redirect("reports/$report_url");

        return view('website.single_report');
    }
}
