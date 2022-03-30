<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\UsersExport;
use App\Exports\LeedsExport;
use App\Exports\TransactionsExport;
use App\Exports\UnPaidLeedsExport;
use App\Exports\PaidLeedsExport;

class ExportController extends Controller
{
    public function users(Excel $excel){
        return $excel->download(new UsersExport,'users.xlsx');
    }

    public function leeds(Excel $excel){
        return $excel->download(new LeedsExport,'leeds.xlsx');
    }

    public function unpaidleeds(Excel $excel){
        return $excel->download(new UnPaidLeedsExport,'unpaidleeds.xlsx');
    }
    public function paidleeds(Excel $excel){
        return $excel->download(new PaidLeedsExport,'paidleeds.xlsx');
    }

    public function transactions(Excel $excel){
        return $excel->download(new TransactionsExport,'transactions.xlsx');
    }
}
