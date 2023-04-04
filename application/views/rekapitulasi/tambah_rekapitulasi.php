<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class=" card-header">
                    <h4 class="card-title">Tambah Data Rekapitulasi</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" action="<?php echo base_url('rekapitulasi/tambah_data_aksi')?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Kode</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="kode"
                                            placeholder="Kode" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>ID Komoditas</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select class="choices form-select" name="id_komoditas">
                                                <option value="">--- Pilih Komoditas ---</option>
                                                  <?php
                                                foreach ($komoditas as $ko) { ?>
                                                <option value="<?php echo $ko->id_komoditas ?>"><?php echo $ko->nama ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Hasil Produksi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="hasil_produksi"
                                            placeholder="Hasil Produksi" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Luas Tanaman</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="luas_tanaman"
                                            placeholder="Luas Tanaman" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Luas Panen Habis</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="luas_panen_habis"
                                            placeholder="Luas Panen Habis" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Luas Panen Sisa</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="luas_panen_sisa"
                                            placeholder="Luas Panen Sisa" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Luas Rusak</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="luas_rusak"
                                            placeholder="Luas Rusak" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Luas Tambah Tanam</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="luas_tambah_tanam"
                                            placeholder="Luas Tambah Tanam" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Luas Laporan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="luas_laporan"
                                            placeholder="Luas Laporan" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Produksi Habis</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="produksi_habis"
                                            placeholder="Produksi Habis" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Produksi Sisa</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="produksi_sisa"
                                            placeholder="Produksi Sisa" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Harga Jual</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="harga_jual"
                                            placeholder="Harga Jual" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="keterangan"
                                            placeholder="Keterangan" />
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->