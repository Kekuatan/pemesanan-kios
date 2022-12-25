<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DetailReport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $title;
    public $search;

    public function __construct($title, $data = [])
    {
        $this->searchs = $data;
        $this->title = $title;
    }

    public function view(): View
    {
        return view('excel.detail-report', ["title" => $this->title, "searchs" => $this->searchs]);
    }
}
