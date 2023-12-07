@extends('layout.main')

@section('container')
    <div class="table-responsive">
        <table class="table table-bordered mb-0 table-centered">
            <thead>
            <tr>
                <th>Nama Barang</th>
                {{-- <th>Category</th> --}}
                <th>Harga Lama</th>
                <th>Harga Baru</th>
                <th>Status</th>
                <th>Tgl Perubahan</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($history as $his )
            <tr>     
                <td>{{ $his->nama_barang }}</td>
                <td>Rp. {{ number_format($his->harga_lama,0,',','.') }}</td>
                <td>{{ number_format($his->harga_baru,0,',','.') }}</td>
                <td class="text-center">
                    @if($his->status == "1")
                        <span class="badge badge-success">Baru</span></td>
                    @elseif($his->status == "2")
                        <span class="badge badge-warning">Berubah</span></td>
                    @else
                        <span class="badge badge-danger">Hapus</span></td>
                    @endif
                {{-- <td>
                    <div class="dropdown d-inline-block float-right">
                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel8">
                            <a class="dropdown-item" href="#">Creat Project</a>
                            <a class="dropdown-item" href="#">Open Project</a>
                            <a class="dropdown-item" href="#">Tasks Details</a>
                        </div>
                    </div>
                </td> --}}
                <td>{{ $his->updated_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table><!--end /table-->
    </div><!--end /tableresponsive-->
@endsection