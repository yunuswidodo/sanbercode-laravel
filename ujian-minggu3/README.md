# Quiz 3 

(**SETELAH CLONE** => buat branch dengan nama sendiri atau nama username Gitlab. Cara buat branch dapat dilihat di video tutorial yang dishare di grup)

## 0. Setup (5 poin)
Repositori ini dibangun dengan Laravel versi 6.0 ke atas. Setelah melakukan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project. 

* masuk ke direktori quiz-3-im-laravel-juli-2020
```bash
$ cd quiz-3-sabtu
```
* jalankan perintah composer install untuk mendownload direktori vendor
```bash
$ composer install
```
* buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

* jalankan perintah php artisan key generate
```bash
$ php artisan key:generate
```
* Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. 

Setelah itu kalian sudah bisa lanjut mengerjakan soal berikutnya. jangan lupa untuk menjalankan server laravel
```bash
$ php artisan serve
```
## 1. Membuat ERD (20 poin)
Seorang klien ingin dibuatkan sebuah aplikasi web untuk menyajikan resep-resep masakan. Harapannya aplikasi web ini dapat digunakan oleh penggunanya untuk mencari dan saling berbagi resep masakan.     

berikut deskripsi singkat mengenai requirement web tersebut: 
* tabel "resep" terdapat data : nama_masakan (VARCHAR), bahan(TEXT), langkah(TEXT).
* tabel "users" terdapat data : nama(VARCHAR), email(VARCHAR UNIQUE), password(VARCHAR) (5 poin)
* seorang user dapat membuat banyak resep masakan. satu resep masakan dimiliki oleh seorang user (5 poin)
* seorang user dapat mengikuti (follow) ke banyak user lain dan dapat diikuti oleh banyak user lain (5 poin)
* seorang user dapat menyimpan banyak resep masakan ke dalam daftar resep favorit. sebuah resep dapat dimasukkan oleh banyak user ke daftar resep favorit masing-masing. (5 poin) 


Buatlah ERD untuk keperluan web  tersebut lalu export ke dalam format gambar (PNG). Kamu bisa gunakan mysql workbench atau aplikasi online https://app.diagrams.net/. 

Simpan file PNG tersebut di dalam folder images dan simpan folder images tersebut di folder public di project  ini.

## 2. Membuat Migrations (15 poin)
Buatlah Migration yang diimplementasi dari ERD yang dibuat di soal sebelumnya. 


## 3. Membuat Controller (10 poin)
Buatlah controller untuk mengatur fitur CRUD "resep". 


## 4. Memasangkan Template & Routing(25 poin)
* Pada project ini kamu diminta untuk memasangkan template dari SB-Admin-2 https://startbootstrap.com/themes/sb-admin-2/. Kami sudah memasangkan asset-asset yang sudah didownload dari halaman SB-Admin-2 di folder public. Tugas kamu adalah memperbaiki template master blade yang terdapat di folder resources/views/layouts/master.blade.php dan hubungkan dengan asset-asset yang diperlukan.  (5 poin)
* Web memiliki route sebagai berikut: (10 poin)

| url                         | method | keterangan      |
|----------                   | -------- | -------------- |
| ```'/'```                   |```GET```| menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no. 1  |
| ```'/resep' ```        | ```GET``` | menampilkan tabel berisi data resep-resep yang tersedia |
| ```'/resep/create'```  | ```GET``` | menampilkan form untuk membuat data resep baru, di dalam form tersebut terdapat input pengisian data-data resep |
| ```'/resep'``` | ```POST``` | menyimpan resep baru 
| ```'/resep/{id}/edit'``` | ```GET``` | menampilkan form untuk edit data-data resep
| ```'/resep/{id}'``` | ```PUT``` | menyimpan data resep yang sudah diedit melalui form edit resep
| ```'/resep/{id}'``` | ```DELETE``` | menghapus data resep dengan id tertentu

- pasangkanlah script berikut ini ke HANYA ke halaman blade untuk menampilkan data pada tabel resep (pada url ```'/resep'```). (10 poin)
Keterangan : ```Swal``` merupakan function dari file swal.min.js yang terdapat di folder public/sbadmin2/swal.min.js 
```html
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
```
- Jika pemasangan script pada poin sebelumnya berhasil maka akan menampilkan alert seperti ini di halaman courses tersebut:

![swal-example.gif](swal-example.gif?raw=true)

## 5. Alur CRUD (10 poin)
Pastikan alur CRUD resep berjalan seperti alur CRUD biasanya. Gambarannya adalah seperti berikut:
* halaman index resep (```'/resep'```) menampilkan tabel kumpulan resep lengkap beserta tombol-tombol actionnya. terdapat pula tombol menuju form pembuatan resep.
* halaman create resep menampilkan form untuk membuat resep baru, sesudah submit lalu halaman kembali ke index resep.
* halaman show untuk menampilkan detail resep
* halaman edit untuk menampilkan form edit resep, sesudah submit update lalu kembali ke index resep 
* dan seterusnya. 

## 6. Menampilkan Bahan-bahan di Halaman Show Resep (15 poin)
Tampilkanlah detil resep pada route ```'/resep/{id}'``` seperti berikut : 
![show-resep.PNG](show-resep.PNG?raw=true)

Keterangan:  Gambar tersebut hanya contoh, sesuaikan data pada tabel resep sehingga tampilannya menyerupai tampilan tersebut (Data bahan-bahan dari sebuah resep ditampilkan dengan list).


