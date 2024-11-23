<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReportDetailsCard extends Component
{
    public $report_title;
    public $img_path;
    public $sort_description;
    public $published_date;
    public $download_sample_path;
    /**
     * Create a new component instance.
     */
    public function __construct($report_title = "", $img_path = "", $sort_description = "", $published_date = "", $download_sample_path = "")
    {
        $this->$report_title = $report_title;
        $this->$img_path = $img_path;
        $this->$sort_description = $sort_description;
        $this->$published_date = $published_date;
        $this->$download_sample_path = $download_sample_path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.report-details-card');
    }
}
