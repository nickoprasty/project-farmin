@extends('layouts.dashboard')
@section('title', 'Dashboard')

@section('topbar')
    Dashboard
@endsection

@section('content')
    <h2 class="text-center mb-[30px] mt-[20px]">Grafik Penjualan</h2>
    <div class="bg-white rounded-[10px] p-[30px] mb-[30px]">
        <canvas id="myChart"></canvas>
    </div>
    <h2 class="text-center mb-[30px] mt-[20px]">Total Penjualan</h2>
    <div class="bg-white rounded-[10px] p-[30px]">
        <h3>Rp{{ number_format($total_penjualan, 0, ',', '.') }}</h3>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        fetch("{{ url('/data_transaksi') }}")
        .then(res => res.json())
        .then(data => {
            const ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.map(row => row.nama_pupuk),
                    datasets: [{
                        label: 'Jumlah Pembelian',
                        data: data.map(row => row.jumlah),
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: { scales: { y: { beginAtZero: true } } }
            });
        });
    </script>
@endsection