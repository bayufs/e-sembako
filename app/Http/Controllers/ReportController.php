<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\PartisipanReport;
use App\Report;
use Session;

class ReportController extends Controller
{
    private $excel;

    /**
     * constructor for excel.
     *
     * @param    $excel
     */
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    
    /**
     * print report by RW.
     */
    public function getReportPerRw(Request $request)
    {
        $rw  = $request->rw;
        $valid = Report::where('id_rw',$rw)->get();
        if(count($valid) == 0) {
            return redirect()->back();
           
        } else {
           
            return $this->excel->download(new PartisipanReport($rw),'partisipan.xlsx');
        }
        
    }


}
