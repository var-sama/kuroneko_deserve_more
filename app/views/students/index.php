<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <title>Daftar Siswa</title>
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
<style>
body{
    animation: rgbBg 1s infinite;
}

@keyframes rgbBg{
    0%{background-color: rgb(255,0,0);}
    20%{background-color: rgb(0,255,0);}
    40%{background-color: rgb(0,0,255);}
    80%{background-color: rgb(191, 0, 255);}
    100%{background-color: rgb(246, 255, 0);}
}
</style>
    <header class="bg-cyan-500 text-black px-4">
        <div class="flex items-center justify-between container mx-auto p-4 px-16">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="container mx-auto grow p-16 space-y-10">
        <div class="mt-8 space-y-2">
        <!-- card start start -->
        <div class="p-4 shadow rounded-lg bg-white">
            <h1 class="text-2xl font-bold">Daftar Siswa</h1>
            <p>Menampilkan Daftar Siswa yang Terdaftar</p>
        </div>
        <!-- card start end -->

        <!-- card body start -->
         <div class="bg-white shadow rounded-lg">
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">NIS</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                        <th class="px-4 py-2 text-left">No Telepon</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-left">1</td>
                        <td class="px-4 py-2 text-left">Andi</td>
                        <td class="px-4 py-2 text-left">1234</td>
                        <td class="px-4 py-2 text-left">11 TKJ 2</td>
                        <td class="px-4 py-2 text-left">08123456789</td>
                        <td class="px-4 py-2">
                            <div class="flex justify-center items-center gap-4">
                                <a href="" class="text-green-500">Detail</a>
                                <a href="" class="text-yellow-500">Edit</a>
                                <a href="" class="text-red-500">Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
         </div>
        <!-- card body end -->
        </div>
    </main>

    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y') ?> Sistem Sekolah - SMK Kristen Immanuel Pontianak.
        </div>
    </footer>
    <!-- <style>
        .formulir{
            display: flex;
            gap: 20px;
            
            
        }
    </style>
    <h1 class="text-red-900">Daftar Siswa</h1>
    <p>Menampilkan Daftar SIswa</p>

    <form action="" class="formulir">
        <label for="">Isi pendaftaran</label>
        <input type="Isi bang">
        <label for="">Password</label>
        <input type = "isi bang">

        <button>Submit</button>
    </form> -->

</body>
</html>