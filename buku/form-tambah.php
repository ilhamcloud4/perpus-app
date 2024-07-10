<?php 

include '../config/layout.php';
include '../config/database.php';
include '../object/kategori.php';
include '../object/penerbit.php';

$database = new Database();
$db = $database->getConnection();

$kategori = new Kategori($db);
$Penerbit = new Penerbit($db);

$dataKategori = $kategori->readAll();
$dataPenerbit = $Penerbit->readAll();

?>

<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
    <h2 class="mb-4 text-xl font-bold text-black-900 dark:text-white">Tambah Anggota Baru</h2>
      <form action="proses-tambah.php" method="POST">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="isbn" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">ISBN</label>
                  <input type="text" name="isbn" id="isbn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan ISBN" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="judul" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">Judul</label>
                  <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Judul" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="pengarang" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">Pengarang</label>
                  <input type="text" name="pengarang" id="pengarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Pengarang" required="">
              </div>
              <div class="w-full">
                  <label for="kategori_id" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">Kategori</label>
                    <select id="kategori_id" name="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Nama Lengkap" required="">
                        <?php
                            while ($row = $dataKategori->fetch(PDO::FETCH_ASSOC)) {
                                extract($row);
                        ?>
                            <option value="<?= $ID ?>"><?=$NamaKategori ?></option>
                        <?php
                            }
                        ?>
                    </select>
              </div>
              <div class="w-full">
                  <label for="penerbit_id" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">Penerbit</label>
                    <select id="penerbit_id" name="penerbit_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Nama Lengkap" required="">
                        <?php
                            while ($row = $dataPenerbit->fetch(PDO::FETCH_ASSOC)) {
                                extract($row);
                        ?>
                            <option value="<?= $ID ?>"><?= $NamaPenerbit ?></option>
                        <?php
                            }
                        ?>
                    </select>
              </div>
              <div class="sm:col-span-2">
                  <label for="deskripsi" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan deskripsi"></textarea>
              </div>
              <div class="sm:col-span-2">
                  <label for="stok" class="block mb-2 text-sm font-medium text-black-900 dark:text-white">Stok</label>
                  <input type="number" name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Stok" required="">
              </div>
              <div class="sm:col-span-2">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    <button type="button" onclick="history.back()" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Batal</button>
              </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
          </button>
      </form>
    </div>
</div>

</body>
</html>