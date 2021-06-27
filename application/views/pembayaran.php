<div class="container-fluid">
    <div class="row">
        <div class="col-md2"></div>
        <div class="col-md8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja anda: Rp. " . number_format($grand_total, 0, ',', '.');

                ?>
            </div>
            <br><br>

            <h3>Inputt Alamat Pengiriman & Pembayaran</h3>

            <form action="<?php echo base_url() ?> dashboard/proses_pesanan" method="post">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="GOJEK">GOJEK</option>
                        <option value="GRAB">GRAB</option>
                        <option value="JNE">JNE</option>
                        <option value="JNT">JNT</option>
                        <option value="Pos Indonesia">Pos Indonesia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pembayaran</label>
                    <select class="form-control">
                        <option value="COD">COD</option>
                        <option value="OVO">OVO</option>
                        <option value="DANA">DANA</option>
                        <option value="Gopay">Gopay</option>
                        <option value="BRI">BRI</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>

        <?php
                } else {
                    echo "<h4>Keranjang Belaja Anda Masih Kosong";
                }
        ?>
        </div>



        <div class="col-md2"></div>
    </div>
</div>