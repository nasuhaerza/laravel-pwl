<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Position;
use App\Models\PayrollDetail;

class DashboardController extends Controller
{
    public function index(){
    // Total karyawan
    $totalKaryawan = Employee::count();

    // Ambil bulan sekarang (format YYYY-MM)
    $bulanIni = date('Y-m');

    // Total payroll bulan ini
    $totalPayrollBulanIni = Payroll::where('bulan', $bulanIni)
                        ->sum('total_gaji');

    // Total jumlah jabatan
    $totalJabatan = Position::count();

    return view('backend.dashboard.dashboard', compact(
        'totalKaryawan',
        'totalPayrollBulanIni',
        'totalJabatan'
    ));
    }
}
