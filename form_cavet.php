<?php include_once 'header.php'; ?>   
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="panel panel-warning">
                <div class="panel-heading"><strong><h2 class="text-center">INPUT DATA CALON VETERAN</h2></strong></div>
                <div class="panel-body">
                <br><br>
                    <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
                        <div class="form-group form-group-sm" >
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Nama</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="nama">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">NRP</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="nrp">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <label class="col-sm-2 control-label " for="formGroupInputSmall" style="text-align:left;">NIP</label>
                                <div class="col-sm-3">
                                    <input class="form-control" id="formGroupInputSmall" name="nip">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Tempat Lahir</label>
                                <div class="col-sm-3">
                                    <input class="form-control" id="formGroupInputSmall" name="tmpt_lhr">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="tgl_lhr" id="tgl_lhr">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Jenis Kelamin</label>
                                <div class="col-sm-1">
                                    <select class="form-control" id="formGroupInputSmall" name="jns_kel">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <label class="col-sm-4 control-label" for="formGroupInputSmall" style="text-align:left;font-size:12px;">L = Laki - laki , P = Perempuan</label>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">No. Pendaftaran</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="no_pen">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Tanggal Pendaftaran</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="tgl_pen" id="tgl_pen">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Grup NPV/Wilayah</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="formGroupInputSmall" name="grup_npv">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Predikat</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="formGroupInputSmall" name="predikat">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Golongan</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="formGroupInputSmall" name="gol">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <label class="col-sm-1 control-label" for="formGroupInputSmall" style="text-align:left;">Tahun Bhakti</label>
                                <div class="col-sm-1">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="thn_bkt">
                                </div>
                                <label class="col-sm-1 control-label" for="formGroupInputSmall" style="text-align:left;">Bulan Bhakti</label>
                                <div class="col-sm-1">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="bln_bkt">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Alamat</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="almt">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Kecamatan</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="kec">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Kabupaten</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="almt">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Provinsi</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="formGroupInputSmall" name="prov">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Keterangan</label>
                                <div class="col-sm-1">
                                    <select class="form-control" id="formGroupInputSmall" name="ktrg">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;font-size:12px;">H = Hidup, M = Meninggal</label>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Wilayah Kodam</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="formGroupInputSmall" name="wil_kod">
                                        <option>--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Ahli Waris 1</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="waris1">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Tanggal lahir</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="tgl_waris1">
                                </div>
                                <br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Ahli Waris 2</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="waris2">
                                </div>
                                <label class="col-sm-2 control-label" for="formGroupInputSmall" style="text-align:left;">Tanggal lahir</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" id="formGroupInputSmall" name="tgl_waris2">
                                </div>
                                
                            </div>
                            <br><br>
                            <div class="row text-center">
                                <button class="btn btn-primary" style="width:100px;background-color:#FCF8E3;color:#8A6D3B;border:1px solid #8A6D3B;">Simpan</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- /.container -->
<?php include_once 'footer.php'; ?>