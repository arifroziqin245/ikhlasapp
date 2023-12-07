@extends('layout.main')
@section('container')
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title">Detail Order - {{ $order->nama_custs }}</h4>
            <p class="text-muted mb-4 font-13">Kemas pesanan dengan teliti !!</p>
            {{-- <form id="formceklist"> --}}
            <form action="/admin/aksi_order/{{ $order->id }}" method="post">
                @csrf
                <table class="table mb-0" id="my-table">
                    <thead>
                        <tr>
                            <th>jumlah</th>
                            <th>Nama Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_order as $item)
                            <tr>
                                <td>{{ $item->jumlah }} {{ $item->satuan }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>
                                    <div class="btn-group">
                                        <div class="form-check mt-2">
                                            <input class="form-check-input ceklist" type="checkbox" id="ceklist-{{ $item->id }}" {{ $item->proses == 2 ? 'checked' : '' }}
                                                name="status_order[]" value="{{ $item->id }}" data-status="cek">
                                            <label class="form-check-label" for="ceklist">
                                                Done
                                            </label>
                                        </div>
                                        <a class="btn btn-outline-danger btn-sm mx-2 mHapusdata"
                                            data-id="{{ $item->id }}">
                                            <i class="mdi mdi-window-close"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <!--end table-->
                <div class="d-flex justify-content-end mt-3 mr-5">
                    <button type="submit" class="btn btn-primary">Simpan data</button>
                    {{-- <button class="btn btn-primary simpan">Simpan data</button> --}}
                </div>
            </form>

        </div>
    </div>




    {{-- Modalll --}}
    <div class="card">
        <div class="card-body">


            <div class="modal fader" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="exampleModalLabel">Data Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form-hapus" action="" method="post">
                                @method('delete')
                                @csrf
                                <h5>Apakah anda yakin akan menghapus data ini?</h5>
                                <div class="modal-footer">
                                    <input type="hidden" id="idglobal" name="idglobal" value="{{ $order->id }}">
                                    <button type="submit" class="btn btn-danger waves-effect">delete</button>
                                </div>
                            </form>

                            </p>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <!--end card-body-->
    </div>
    <!--end card-->
@endsection

@push('js')
    <script>
        $(document).on('click', '.mHapusdata', function(e) {
            let id = $(this).data('id');
            $('#ModalHapus').modal('show')
            document.getElementById('form-hapus').action = "/hapusorder/" + id;
        });


        $(document).on('click', '.ceklist', function(e){
          var value = $(this).val();
          var idcek = "ceklist-"+value;
          var cek = document.getElementById(idcek);
          let data = "";
          if (cek.checked) {
            data = { 'status_order': value, 'proses': 2 }
          } else {
            data = { 'status_order': value, 'proses': 0 }
          }
          $.ajax({
              type: "GET",
              url: "{{ url('setceklist') }}",
              data: data,
              dataType: 'json',
              success: function(response) {
                console.log(response)
              }
            });
        });        
    </script>
    {{-- <script>
      $(document).on('click', '.simpan', function(e){
        e.preventDefault()

        var check_box_values = $('[type="checkbox"]:checked').map(function () {
          let isi = {
            'id' : this.getAttribute('data-id'),
            'proses': this.value,
          }
          return isi
        }).get();

        let data = []
        data.push(check_box_values[0])

        let csrf = {'_token': '{{ csrf_token() }}' }
        data.push(csrf)
        console.log(data)
        
        $.ajax({
            type : "POST",
            url  :"{{ url('/admin/detail_order') }}",
            data : check_box_values,
            dataType: "json",
            success : function(response) {
                console.log(response);
            }
        });
      });
    </script> --}}
@endpush
