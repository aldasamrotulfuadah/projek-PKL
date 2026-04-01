<!-- Modal Kirim WA per baris -->
<div class="modal fade" id="waModal{{ $item->id }}" tabindex="-1" aria-labelledby="waModalLabel{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="waModalLabel{{ $item->id }}">Kirim WA Surat</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <label>Pilih Nomor WA Tujuan:</label>
        <select id="waSelect{{ $item->id }}" class="form-control">
          <option value="" disabled selected>-- Pilih Nomor --</option>
          <option value="628111111111">Kepala</option>
          <option value="628222222222">Admin</option>
          <option value="628333333333">Staff</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success" onclick="kirimWA({{ $item->id }}, '{{ $item->nomor_surat }}', '{{ $item->tanggal_surat }}', '{{ $item->diterima_dari }}', '{{ $item->perihal }}')">Kirim WA</button>
      </div>
    </div>
  </div>
</div>