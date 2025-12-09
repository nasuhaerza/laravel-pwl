@extends('backend.dashboard.index')

@section('title', 'Dashboard')

@section('content')

<h3 class="fw-bold mb-4">Dashboard</h3>

<style>
    .dash-card {
        transition: transform 0.15s ease, box-shadow 0.15s ease;
        cursor: pointer;
    }

    .dash-card:hover {
        transform: translateY(-4px);
        box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="row g-3">

    {{-- CARD TOTAL KARYAWAN --}}
    <div class="col-md-4">
        <a href="{{ route('emp') }}" class="text-decoration-none">
            <div class="card dash-card border-0 shadow-sm rounded-3">
                <div class="card-body bg-primary text-white rounded-3 p-4">
                    <h6 class="fw-semibold mb-1">Total Karyawan</h6>
                    <h2 class="fw-bold mb-1">{{ $totalKaryawan }}</h2>
                    <small>Jumlah seluruh karyawan aktif</small>
                </div>
            </div>
        </a>
    </div>

    {{-- CARD TOTAL PAYROLL BULAN INI --}}
    <div class="col-md-4">
        <a href="/payroll" class="text-decoration-none">
            <div class="card dash-card border-0 shadow-sm rounded-3">
                <div class="card-body bg-success text-white rounded-3 p-4">
                    <h6 class="fw-semibold mb-1">Payroll Bulan Ini</h6>
                    <h2 class="fw-bold mb-1">
                        Rp {{ number_format($totalPayrollBulanIni, 0, ',', '.') }}
                    </h2>
                    <small>Total gaji dibayarkan bulan ini</small>
                </div>
            </div>
        </a>
    </div>

    {{-- CARD TOTAL JABATAN --}}
    <div class="col-md-4">
        <a href="{{ route('position') }}" class="text-decoration-none">
            <div class="card dash-card border-0 shadow-sm rounded-3">
                <div class="card-body bg-secondary text-white rounded-3 p-4">
                    <h6 class="fw-semibold mb-1">Total Jabatan</h6>
                    <h2 class="fw-bold mb-1">{{ $totalJabatan }}</h2>
                    <small>Jumlah jabatan yang tersedia</small>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection
