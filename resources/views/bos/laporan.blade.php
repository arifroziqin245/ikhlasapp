
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
    <h3 class='tengah'>Laporan Transaksi Order</h3>
    <br/>
    <table>
        <tr>
            <th align="left" width="5%">No</th>
            <th align="left" width="20%">Tanggal</th>
            <th align="left" width="25%">Nama Customer</th>
            <th align="left" width="15%">Total Item</th>
            <th align="left" width="25%">Total Transaksi</th>
            {{-- <th align="left" width="15%">Biaya</th> --}}
        </tr>
        <?php  $grand_total = 0; ?>
        @foreach ($order as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                <td>{{ $item->nama_custs }}</td>
                <td>{{ $item->jumlah_item }} Item</td>
                <td>Rp. {{ number_format($item->total, 0, ',', '.') }}</td>
                <?php 
               
                $grand_total += $item->total; 
                ?>
            </tr>
        @endforeach
        <tr>
            <td colspan="4" style="text-align: right"><strong>Total</strong></td>
            <td><strong>Rp. {{ number_format($grand_total, 0, ',', '.') }}</strong></td>
        </tr>
    </table>
</body>
<script>
    print()
</script>
</html>

