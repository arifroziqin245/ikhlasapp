
<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <style type="text/css">
        body{
        font-family: sans-serif;
        }
        table{
        margin: 20px auto;
        border-collapse: collapse;
        }
        table th,
        table td{
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

        }

        .tengah{
            text-align: center;
        }
    </style>
    <h2 class='tengah'>IKHLAS STATIONARY KAJEN</h2>
    <h3 class='tengah'>Laporan Transaksi Order Priode bulan {{ date('F Y', strtotime($bulan)) }}</h3>
    <br/>
    <table>
        <tr>
            <th align="left" width="5%">No</th>
            <th align="left" width="25%">Produk</th>
            <th align="left" width="10%">Jumlah</th>
            <th align="left" width="20%">Customer</th>
            <th align="left" width="20%">Total Transaksi</th>
            <th align="left" width="15%">Tanggal Transaksi</th>
            {{-- <th align="left" width="15%">Biaya</th> --}}
        </tr>
        <?php  $grand_total = 0; ?>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->jumlah }} {{ $item->satuan }}</td>
                <td>{{ $item->order->nama_custs }}</td>
                <td>Rp. {{ number_format($item->total,0,',','.') }}</td>
                <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
              
            </tr>
        @endforeach
    </table>
    <p>source at Ikhlasapp</p>
</body>
<script>
    print()
</script>
</html>

