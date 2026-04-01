
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $title }} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <div class="row">
          <div class="col-6">
            Tanggal Surat
          </div>
          <div class="col-6">
          : {{ $item->tanggal_surat }}
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Nomor Surat
          </div>
          <div class="col-6">
          :
          <span class="badge badge-secondary">
            {{ $item->nomor_surat }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Diterima Dari
          </div>
          <div class="col-6">
          :
          <span class="badge badge-secondary">
            {{ $item->diterima_dari }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Perihal
          </div>
          <div class="col-6">
          :
          <span class="badge badge-secondary">
            {{ $item->perihal }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Sifat 
          </div>
          <div class="col-6">
          : 
           @if ($item->sifat == 'Sangat Segera')
           <span class="badge badge-secondary">
             {{ $item->sifat }}
           </span>
           @else 
           <span class="badge badge-light">
             {{ $item->sifat }}
           </span>
          @endif
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Dengan Hormat Harap
          </div>
          <div class="col-6">
          :
          <span class="badge badge-secondary">
            {{ $item->dengan_hormat_harap }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Diteruskan Kepada
          </div>
          <div class="col-6">
          :
          <span class="badge badge-secondary">
            {{ $item->diteruskan }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Status
          </div>
          <div class="col-6">
          : 
          @if ($item->is_tugas == false )
          <span class="badge badge-danger">
           Belum Didisposisikan
          </span>
          @else 
          <span class="badge badge-success">
            Sudah Didisposisikan
          </span>
          @endif
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i>
          Tutup
        </button>
        <form action="{{ route('userDestroy', $item->id) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger btn-sm">
            <i class="fas fa-trash"></i>
            Hapus
        </button>
        </form>
      </div>
    </div>
  </div>
</div>