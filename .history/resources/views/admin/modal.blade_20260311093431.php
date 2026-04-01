
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $title }} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <div class="row">
          <div class="col-6">
            Nama
          </div>
          <div class="col-6">
          : {{ $item->nama }}
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Email
          </div>
          <div class="col-6">
          :
          <span calss="badge badge-secondary">
            {{ $item->email }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Jabatan
          </div>
          <div class="col-6">
          : 
          <span calss="badge badge-secondary">
            {{ $item->Jabatan }}
          </span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            Status
          </div>
          <div class="col-6">
          : 
          <span calss="badge badge-dang">
            {{ $item->is_tugas }}
          </span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i>
          Tutup
        </button>
        <button type="button" class="btn btn-danger btn-sm">
          <i class="fas fa-trash"></i>
          Hapus
        </button>
      </div>
    </div>
  </div>
</div>