<?php include_once 'header.php'; ?>   
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="panel panel-warning">
                <div class="panel-heading"><h3>Export Data Veteran</h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="dataTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><input type="checkbox" id="idAll"></th>
                                                <th>Nama</th>
                                                <th>Tempat/Tanggal lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No. Pendaftaran</th>
                                                <th>NPV</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <?php 
                                                include_once 'koneksi.php';
                                                $sql = mysql_query("SELECT * FROM tveteran1");
                                                while ($val = mysql_fetch_assoc($sql)) {
                                                    
                                            ?>
                                            <tr>
                                                <input type="hidden" name="array_id[]" value="<?php echo $val['mslink']; ?>" class="check">
                                                <td class="text-center"><input type="checkbox" name="id[<?php echo $val['mslink']; ?>]" class="check"></td>
                                                <td><?php echo $val['nama']; ?></td>
                                                <td><?php echo $val['tempat_lahir'].'/'.$val['tgl_lahir']; ?></td>
                                                <td><?php echo $val['jenis_kelamin']; ?></td>
                                                <td><?php echo $val['no_pendaftaran']; ?></td>
                                                <td><?php echo $val['npv']; ?></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-info btn-sm" data-placement="top" data-toggle="tooltip" data-original-title="Ubah"><i class="glyphicon glyphicon-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script type="text/javascript">
    $(function () {
        $('#idAll').click(function() {
            if(this.checked) {
                $('.check').each(function() {
                    this.checked = true;
                });
            }else{
                $('.check').each(function() {
                    this.checked = false;
                });
            }
        });
    });
</script>

    <!-- /.container -->
<?php include_once 'footer.php'; ?>