<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified','auth.usertype']);
    }

    public function saleReportCurrent()
    {
        $todaySales = Transaction::where([['created_at', Carbon::today()],['status',2]])->get();
        $todaySum=0;
        foreach ($todaySales as $todaySale){
            $todaySum += $todaySale->paid;
        }
        $weekSales = Transaction::where([['created_at','>=', Carbon::now()->startOfWeek()],['status',2]])->get();
        $weekSum=0;
        foreach ($weekSales as $weekSale){
            $weekSum += $weekSale->paid;
        }
        $monthSales = Transaction::where([['created_at','>=', Carbon::now()->startOfMonth()],['status',2]])->get();
        $monthSum=0;
        foreach ($monthSales as $monthSale){
            $monthSum += $monthSale->paid;
        }
        $yearSales = Transaction::where([['created_at','>=', Carbon::now()->startOfYear()],['status',2]])->get();
        $yearSum=0;
        foreach ($yearSales as $yearSale){
            $yearSum += $yearSale->paid;
        }
        return [
            'todaySum'      =>      $todaySum,
            'weekSum'       =>      $weekSum,
            'monthSum'      =>      $monthSum,
            'yearSum'       =>      $yearSum,
            ];
    }
    public function index()
    {
        return view('dashboard.home')->with([
            'current'       =>      $this->saleReportCurrent(),
        ]);
    }
}
