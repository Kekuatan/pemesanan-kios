<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PeriodicReport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public $data;
    public $groupBy;
    public $title;

    public function __construct($title ='', $data = [], $groupBy = [])
    {
        $this->title = $title;
        $this->data = $data;
        $this->groupBy = $groupBy;
    }

    public function view(): View
    {
        return view('excel.periodic-report', ["title" => $this->title, "groupBy" => $this->groupBy, "data" => $this->data]);
    }
}
