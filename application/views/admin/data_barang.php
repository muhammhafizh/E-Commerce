<div class="container-fluid">
    <?php echo $this->session->flashdata('message');  ?>
    <button class="btn btn-sm btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus fa-sm mr-2"></i>Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php $no=1; foreach ($barang as $brg) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $brg->nama_brg; ?></td>
                <td><?php echo $brg->keterangan; ?></td>
                <td><?php echo $brg->kategori; ?></td>
                <td><?php echo $brg->harga; ?></td>
                <td><?php echo $brg->stok; ?></td>
                <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
                <td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" />
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" />
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option>Elektronik</option>
                    <option>Pakaian Pria</option>
                    <option>Pakaian Wanita</option>
                    <option>Pakaian Anak</option>
                    <option>Peralatan Olahraga</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga Barang</label>
                <input type="text" name="harga" class="form-control" />
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" />
            </div>
            <div class="form-group">
                <label>Gambar Produk</label>
                <input type="file" name="gambar" class="form-control" />
            </div>

            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>