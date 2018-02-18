<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-pink">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong><center>Tambah Data Kerusakan </center></strong></h4><br>
            </div>
            <div class="modal-body ">
                <form class="form-group" action="<?= site_url('Kerusakan/tambah') ?>" method="POST" >
                    <div class="input-group">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Masukan Nama Kerusakan" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Pilih Solusi" required autofocus>
                        </div>
                    </div>

                    <div class='form-group'>
                        <button class="btn bg-pink">Simpan</button> &nbsp;&nbsp;
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header body bg-black">
                <h2>
                    <center> Data-Data Kerusakan Laptop</center></h2>
            </div><br> &nbsp;&nbsp;
            <a href="#" data-toggle="modal" data-target="#add-new-event" >
                <button class="btn bg-pink glyphicon glyphicon-plus "> Tambah</button></a>
            <div class="body table-responsive">
             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Kerusakan</th>
                            <th>Nama Kerusakan</th>
                            <th>Solusi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <?php
                        $i = 0;
                        foreach ($database->result() as $row) {
                            $i++;
                            echo ' <tr> <th scope="row">' . $i . '</th>
                            <td>' . $row->id_kerusakan . '</td>
                            <td>' . $row->nama_kerusakan . '</td>
                            <td>' . $row->id_solusi . '</td>
                            <td>
					<a class="glyphicon glyphicon-pencil" 
					href="' . site_url("user/ubah/$row->id_kerusakan") . '" >	</a>
					
					<a class="glyphicon glyphicon-trash" 
                                        onclick="return confirm(\'Data Akan Di Hapus ??\')"
					href="' . site_url("user/hapus/$row->id_kerusakan") . '" >	</a>
					
</td> </tr>';
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>