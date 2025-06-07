@extends('layouts.app')

@section('content')
<nav class="dashboard">
    <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
    <div class="content konten1"><h2>Farm'In</h2></div>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button class="content konten4" type="submit" name="btnLogout2">Logout</button>
    </form>
</nav>
<div style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 0px">
    <a href="{{ url('/item/create') }}" class="btnTambah" style="text-decoration: none; color: white; background-color: #37a46d; border-radius: 10px; padding: 5px; width: 80%; text-align: center;">Tambah Item</a>
</div>
<div class="tabelData">
    <table class="tabelItem2">
        <thead class="theadItem">
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga per Kilo (Kg)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="tbodyItem">
            @foreach($items as $item)
            <tr>
                <td>{{ $item->nama_item }}</td>
                <td>{{ $item->jenis_item }}</td>
                <td>Rp.{{ number_format($item->harga_item, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ url('/item/'.$item->id_item.'/edit') }}" class="btnAksi aksiUbah" style="text-decoration: none; background-color: #37a46d; border-radius: 10px; display: inline-block; padding: 5px; width: 70px; color: white;">Edit</a>
                    <form action="{{ url('/item/'.$item->id_item) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btnAksi aksiDelete" style="background-color: #37a46d; border-radius: 10px; display: inline-block; padding: 5px; width: 70px; color: white;" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Data Penjualan Pupuk --}}
    <div class="dataPenjualan">
        <h2 style="text-align: center; margin-bottom: 50px; font-size: 35px;">Data Penjualan Pupuk</h2>
        <div class="chartBox">
            <canvas id="myChart"></canvas>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            fetch("{{ url('data_transaksi.php') }}?timestamp=" + new Date().getTime())
            .then((response) => response.json())
            .then((data) => {
                createChart(data, 'bar');
            });

            function createChart(chartData, type){
                const ctx = document.getElementById('myChart').getContext('2d');
                new Chart(ctx, {
                    type: type,
                    data: {
                        labels: chartData.map(row => row.nama_pupuk),
                        datasets: [{
                            label: 'Jumlah Pembelian',
                            data: chartData.map(row => row.jumlah),
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        </script>
    </div>
</div>
@endsection