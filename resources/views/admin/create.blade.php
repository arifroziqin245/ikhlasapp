@extends('layout.main')

@section('container')
<div class="card">
    <div class="card-body">
        <h5 class="mt-0">Default Repeater</h5>
        <p class="text-muted font-13 mb-4">An interface to add and remove a repeatable group of input elements.</p>
        <form method="POST" action="/inventory">
            @csrf
            <div class="row">

                <div class="col-sm-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama_barang[]">
                </div>
                <div class="col-sm-2">
                    <label for="">Category</label>
                    <select name="category[]" id="" class="form-control">
                        <option disabled selected>Pilih category</option>
                        @foreach ($category as $item)
                        <option class="text-dark" value="{{ $item->nama_category }}">{{ $item->nama_category }}</option>
                        @endforeach
                    </select>  
                    <button type="button" class="mt-1 btn btn-outline-info btn-sm waves-effect waves-light-" data-toggle="modal" data-target="#modalSaya">
                        Tambah Category
                    </button>
                </div>
                <div class="col-sm-2">
                    <label for="">Satuan</label>
                    <select name="satuan[]" id="" class="form-control">
                        <option disabled selected>Pilih Satuan</option>
                        @foreach ($satuan as $satu)
                        <option class="text-dark" value="{{ $satu->nama_satuan }}">{{ $satu->nama_satuan }}</option>
                        @endforeach
                    </select>
                    <button type="button" class="mt-1 btn btn-outline-info btn-sm waves-effect waves-light-" data-toggle="modal" data-target="#modalSatuan">
                        Tambah Satuan
                    </button>
                </div>
                <div class="col-sm-2">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga[]" >
                </div>
                <div class="col-sm-2">
                    <label for="">Isi</label>
                    <input type="number" class="form-control" name="isi[]">
                </div>

                <div class="col-sm-1">
                    <a href="" class="btn btn-danger btn-sm hapuslist">
                        <span class="far fa-trash-alt mr-1"></span> Delete
                    </a>
                </div><!--end col-->
            </div>
            <div class="new"></div>
            <div class="form-group mb-0 row">
                <div class="col-sm-12">
                    <a href="#" id="tambah" class="btn btn-light">
                        <span class="fas fa-plus"></span> Add
                    </a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div><!--end col-->
            </div><!--end row-->   
        </form>
    </div><!--end card-body-->
</div>

{{-- Modal Category Baru --}}
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Tambahkan Category Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-inline" role="form" method="POST" action="/category">
                @csrf
                <div class="form-group">
                    <label for="nama_category" class="sr-only"></label>
                    <input type="nama_category" class="form-control" name="nama_category" id="nama_category" placeholder="Nama category">
                </div>                                                    
                <button type="submit" class="btn btn-primary ml-2">Tambah</button>
            </form> 
        </div>
      </div>
    </div>
</div>
  {{-- akhir modal Catgory --}}

  {{-- awal modal satuan --}}
  <div class="modal fade" id="modalSatuan" tabindex="-1" role="dialog" aria-labelledby="modalSatuan" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Tambahkan Satuan Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-inline" role="form" method="POST" action="/satuan">
                @csrf
                <div class="form-group">
                    <label for="nama_satuan" class="sr-only"></label>
                    <input type="nama_satuan" class="form-control" name="nama_satuan" id="nama_satuan" placeholder="Nama Satuan Baru">
                </div>                                                    
                <button type="submit" class="btn btn-primary ml-2">Tambah</button>
            </form> 
        </div>
      </div>
    </div>
  </div>
  {{-- akhir modal satuan --}}

@endsection

@push('js')
    {{-- <script src="{{ asset('assets/plugins/repeater/jquery.repeater.min.js') }}"></script> --}}
    {{-- <script src="/assets/pages/jquery.form-repeater.js"></script>   --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
    <script>
        $(document).on('click', '#tambah', function(e){
            e.preventDefault();
            let form = `
            <div class="row">
                <div class="col-sm-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama_barang[]">
                </div>
                <div class="col-sm-2">
                    <label for="">Category</label>
                    <select name="category[]" id="" class="form-control">
                        <option disabled selected>Pilih category</option>
                        @foreach ($category as $item)
                        <option class="text-dark" value="{{ $item->nama_category }}">{{ $item->nama_category }}</option>
                        @endforeach
                    </select>  
                    <button type="button" class="mt-1 btn btn-outline-info btn-sm waves-effect waves-light-" data-toggle="modal" data-target="#modalSaya">
                        Tambah Category
                    </button>
                </div>
                <div class="col-sm-2">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga[]">
                </div>
                <div class="col-sm-2">
                    <label for="">Satuan</label>
                    <select name="satuan[]" id="" class="form-control">
                        <option disabled selected>Pilih Satuan</option>
                        @foreach ($satuan as $satu)
                            <option class="text-dark" value="{{ $satu->nama_satuan }}">{{ $satu->nama_satuan }}</option>
                        @endforeach
                    </select>
                    <button type="button" class="mt-1 btn btn-outline-info btn-sm waves-effect waves-light-" data-toggle="modal" data-target="#modalSatuan">
                        Tambah Satuan
                    </button>
                </div>
                <div class="col-sm-2">
                    <label for="">Isi</label>
                    <input type="number" class="form-control" name="isi[]">
                </div>

                <div class="col-sm-1">
                    <a href="" class="btn btn-danger btn-sm hapuslist">
                        <span class="far fa-trash-alt mr-1"></span> Delete
                    </a>
                </div><!--end col-->
                </div>`;
            $('.new').append(form);
        });

        $(document).on('click', '.deleted', function(e){
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
        })

        $(document).on('click', '.hapuslist', function(e){
            e.preventDefault();
            $(this).parent().parent().remove()
        });
    </script>
@endpush