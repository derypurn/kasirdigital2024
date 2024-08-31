<label for="id">ID Penjualan:</label>
<input type="number" name="id" class="form-control" value="2001">
<label for="tgl_penjualan">Tanggal Penjualan:</label>
<input type="date" name="tgl_penjualan" class="form-control">
<label for="harga">Harga:</label>
<input type="text" id="harga" class="form-control" name="total_harga" onchange="hitungTotal()" required>
<label for="pelanggan_id">ID Pelanggan:</label>
<input type="number" name="pelanggan_id" class="form-control" value="3001">
<label for="jumlah">Jumlah:</label>
<input type="number" class="form-control" id="jumlah" name="jumlah" min="1" value="1" onchange="hitungTotal()" required>
<label for="total">Total:</label>
<span id="total">0.00</span> <br>
<label for="uangBayar">Uang Bayar:</label>
<input type="text" class="form-control" id="uangBayar" name="uangBayar" onchange="hitungKembalian()" required>
<label for="kembalian">Kembalian:</label>
<span id="kembalian">0.00</span><br>
<input type="button" value="Proses" class="btn btn-info">