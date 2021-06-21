<div id="jenisLaporan" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="id_jenis" class="form-control" placeholder="ID Jenis" type="text">
                <br/>
                <input id="nama_laporan" class="form-control" placeholder="Nama Laporan" type="text">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="saveJenisLaporanAjax()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div id="tambahField" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="hiddenField">
                Field Name (ex: [name]) <br/>
                <input class="form-control" type="text" name="" id="fieldSatuan">
             <button onclick="fieldAdd()" class="btn btn-info">Add</button>

                <br/>
                Code Generated:
                <textarea class="form-control" style="background-color: yellow; color: #0c0c0c;" id="genCode" rows="4" disabled></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="saveFieldAjax()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>