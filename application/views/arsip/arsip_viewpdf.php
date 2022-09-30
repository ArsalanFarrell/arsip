<section class="content-header">
    <h1>
        Data Arsip
        <small>Arsip</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file_archive"></i></a></li>
        <li class="active">Arsip</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Arsip</h3>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <?php foreach ($arsip->result() as $key => $data) : ?>
                    <tr>
                        <th width="100px">Nomer</th>
                        <th width="10px">:</th>
                        <td><?= $data->no_arsip ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <th>:</th>
                        <td><?= $data->nama_kategori ?></td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <th>:</th>
                        <td><?= $data->nama_arsip ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Unggah</th>
                        <th>:</th>
                        <td><?= $data->tgl_upload ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="class col-sm-12">
                <iframe src="<?= base_url('assets/file_arsip/' . $data->file_arsip) ?>" frameborder="0" width="1000px" height="1000px"></iframe>
            </div>
            <a href="<?= site_url('arsip'); ?>" class="btn btn-warning btn-xs">
                <i class="fa fa-undo"></i> Back
            </a>
            <a href="<?= site_url('assets/file_arsip/' . $data->file_arsip); ?>" class="btn btn-warning btn-xs" download="">
                <i class="fa fa-download"></i> Unduh</a>
            <a href="<?= site_url('arsip/edit/' . $data->id_arsip); ?>" class="btn btn-warning btn-xs">
                <i class="fa fa-pencil"></i> Update</a>

        </div>


    </div>

</section>