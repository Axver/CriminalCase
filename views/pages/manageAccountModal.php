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


<div id="tambahAkun" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Akun Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input id="no_polisiT" class="form-control" placeholder="Nomor Polisi" type="text"><br/>
                <input id="namaT" class="form-control" placeholder="Nama" type="text"><br/>
                <input id="usernameT" class="form-control" placeholder="Username" type="text"><br/>
                <input id="passwordT" class="form-control" placeholder="Password" type="text"><br/>

                <select id="pangkatT" class="form-control">
                    <?php
                    include "../../php/connect.php";

                    $sql = "SELECT * FROM pangkat";
                    $data=mysqli_query($conn,$sql);


                    while($d = mysqli_fetch_array($data)){
                        ?>

                      <option value="<?php echo $d['id_pangkat']; ?>"><?php echo $d['pangkat']; ?></option>

                        <?php
                    }
                    ?>

                </select>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="saveAkunAjax()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="editAkun" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Akun Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input id="no_polisiE" class="form-control" placeholder="Nomor Polisi" type="text" disabled><br/>
                <input id="namaE" class="form-control" placeholder="Nama" type="text"><br/>
                <input id="usernameE" class="form-control" placeholder="Username" type="text"><br/>
                <input id="passwordE" class="form-control" placeholder="Password" type="text" disabled><br/>

                <select id="pangkatE" class="form-control">
                    <?php
                    include "../../php/connect.php";

                    $sql = "SELECT * FROM pangkat";
                    $data=mysqli_query($conn,$sql);


                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <option value="<?php echo $d['id_pangkat']; ?>"><?php echo $d['pangkat']; ?></option>

                        <?php
                    }
                    ?>

                </select>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="saveEditAkunAjax()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>