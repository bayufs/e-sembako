<?php
namespace App\Exports;

use App\Report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class PartisipanReport implements FromView
{
    use Exportable;

    private $rw;

    public function __construct(string $rw)
    {
        $this->rw = $rw;
    }
    
    public function view(): View
    {
        return view('reports.get_partisipan_by_rw', [
            'partisipan' => Report::where('id_rw', $this->rw)->get()
        ]);
    }
}