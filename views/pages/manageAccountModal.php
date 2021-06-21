<div id="tambahPangkat" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="id_pangkat" class="form-control" placeholder="ID Pangkat" type="text">
                <br/>
                <input id="nama_pangkat" class="form-control" placeholder="Nama Pangkat" type="text">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="savePangkatAjax()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="editPangkat" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Pangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input disabled id="id_pangkatEdit" class="form-control" placeholder="ID Pangkat" type="text">
                <br/>
                <input id="nama_pangkatEdit" class="form-control" placeholder="Nama Pangkat" type="text">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="editPangkatAjax()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>