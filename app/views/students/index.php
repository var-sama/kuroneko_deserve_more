
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
                    <?php foreach ($students as $index => $student): ?>
                        <tr>
                        <td class="px-4 py-2 text-left"><?= $index + 1 ?></td>
                        <td class="px-4 py-2 text-left"><?= $student['name'] ?></td>
                        <td class="px-4 py-2 text-left"><?= $student['nis'] ?></td>
                        <td class="px-4 py-2 text-left"><?= $student['class'] ?></td>
                        <td class="px-4 py-2 text-left"><?= $student['phone_number'] ?></td>
                        <td class="px-4 py-2">
                            <div class="flex justify-center items-center gap-4">
                                <a href="/students/<?= $student['id'] ?>" class="text-green-500">Detail</a>
                                <a href="/students/<?= $student['id'] ?>/edit" class="text-yellow-500">Edit</a>
                                <a href="/students/<?= $student['id'] ?>/delete" class="text-red-500">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
         </div>
        <!-- card body end -->
        </div>
    </main>

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

