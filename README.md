Back-End Development
 BNCC Pretorian Recruitement Bootcamp

PT Meksiko telah merekrut kamu untuk bekerja di perusahaannya! Setelah melihat proyek kamu sebelumnya, Pak Raja senang dengan hasil kerjamu. Karena hal tersebut Pak Raja mempercayakan sebuah proyek kepada kamu. Proyek ini berupa aplikasi pendataan barang berbasis web yang digunakan sebagai website penjualan barang-barang. Berikut merupakan penjelasan spesifik mengenai fitur yang diinginkan oleh Pak Raja:

Proyek website yang harus dikerjakan oleh kamu adalah sebuah website aplikasi pendataan barang. Perpustakaan tersebut ingin website dengan fitur-fitur sebagai berikut:
Pak Raja menginginkan adanya dua role di dalam aplikasi tersebut. Role pertama adalah admin. Admin dapat melakukan operasi Create, Read, Update, dan Delete terhadap barang-barang yang terdapat di website tersebut. Operasi tersebut sudah termasuk memasukkan gambar / foto barang. Berikut adalah data-data yang perlu dimasukkan ke dalam database:
Kategori Barang, required string
Nama Barang (minimal 5 huruf, maksimal 80 huruf), required string
Harga Barang (harus dimulai dengan Rp. dari display-nya (HTML)), required integer
Jumlah Barang (harus menggunakan angka), required integer
Foto Barang 
Untuk relationship-nya, buatlah minimal satu kategori barang dengan barang yang diinput.
Role kedua adalah user. User bisa melihat semua barang, cetak faktur seperti struk barang. Pak Raja ingin tampilan aplikasi tersebut dapat menampilkan semua barang yang ada di database (sejenis katalog):
Kategori Barang, required string
Nama Barang (minimal 5 huruf, maksimal 80 huruf), required string
Harga Barang (harus dimulai dengan Rp. dari displaynya (HTML)), required integer
Jumlah Barang, (harus angka), required integer
Foto Barang
Button untuk memasukkan barang ke faktur (keranjang)
Pada bagian faktur, Pak Raja ingin kalian membuat spesifikasi sesuai dengan yang di bawah ini:
Buat page khusus untuk cetak faktur
Generate Nomor Invoice (otomatis)
Kategori Barang
Nama barang dan kuantitas (contoh, Bakmi x12 dan jumlah dapat diatur sendiri)
Alamat Pengiriman,(minimal 10 huruf, maksimal 100 huruf) (input sendiri), required string
Kode Pos (harus 5 digit angka, pake string aja) (input sendiri), required integer
Display subtotal harga setiap barang
Display total harga semua barang (menggunakan rumus matematika)
Simpan data faktur
Selain itu, Pak Raja menginginkan adanya halaman Login dan Register untuk user biasa. Sedangkan untuk admin hanya dapat di registrasi secara manual (lewat database). Data-data yang terdapat di dalam database (user dan admin) akan memiliki bentuk seperti berikut ini:
Data User Biasa:
Nama Lengkap (Minimal  3 huruf, Maksimal 40 huruf), required string
Email (harus mempunyai @gmail.com), required string
Password (minimal 6 huruf, maksimal 12 huruf), required string
Nomor Handphone (harus diawali dengan 08), required string
Submit Button
Data Admin:
Nama Lengkap, required string
ID Admin (1 admin saja dengan nama bebas), required string
Email (format @gmail.com), required string
Password (minimal 6 huruf, maksimal 12 huruf), required string
Nomor HP (harus diawali dengan 08), required string
Submit Button
Pak Raja juga ingin menginginkan adanya validasi agar tidak diserang oleh perusahaan kompetitornya. Oleh karena itu, Pak Raja memberikan bagian-bagian yang perlu kalian perhatikan dalam pembuatan proyek ini.
Kalau user biasa (role User) mencoba masuk ke page CRUD (Admin), maka ia akan di redirect ke halaman view barang user. (Middleware)
Jika barang sudah habis, muncul validasi “Barang sudah habis, silakan tunggu hingga barang di-restock ulang” atau semacamnya.
	
Demikian kriteria dari website tersebut yang diberikan oleh Pak Raja.
Pengumpulan Final Project paling lambat tanggal 2 September 2024
pukul 23.59. Format pengumpulan project tersebut adalah sebagai
berikut:
- Dikirim ke Email pengajar [vincent88tjong@gmail.com] & Google
Form [https://bit.ly/PengumpulanFinalProjectBootcamp2024]
- Bentuk: link github dan link video demo website
- Subject email: [Nama Lengkap]_Back-End

Contoh: Vannessa Lim_Back-End

Komponen Penilaian:
● Pengumpulan 10
● Tampilan 5
● CRUD
○ Create 15
○ Read 5
○ Update 15
○ Delete 5
● Middleware 10
● Auth 20
● Relationship 5
● Validasi 10

fixes and improvement from the lnt_final

