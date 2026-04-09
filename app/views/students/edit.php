<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <title>Edit Siswa</title>
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
  .isian{
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 20rem;
            background-color: none !important;
            border-radius: 10px;
            margin: 20px;
            padding: 10px;
            animation: muter 3s linear infinite;
            position: absolute;
            top: 100px;
            left: 100px;
            position: absolute;
            width: 320px;
            box-sizing: border-box;
            animation: zoomAbsurd 1.5s infinite;
 
        }      
 
        @keyframes muter{
            0% {
                transform: translate(0,0) rotate(0deg);
            }
            25% {
                transform: translate(100px,-50px) rotate(90deg);
            }
            50% {
                transform: translate(-100px,50px) rotate(180deg);
            }
            75% {
                transform: translate(50px,100px) rotate(270deg);
            }
            100% {
                transform: translate(0,0) rotate(360deg);
            }
        }
 
        @keyframes zoomAbsurd {
            0% { transform: scale(1) rotate(0deg); }
            25% { transform: scale(1.3) rotate(90deg); }
            50% { transform: scale(0.7) rotate(-90deg); }
            75% { transform: scale(1.5) rotate(180deg); }
            100% { transform: scale(1) rotate(0deg); }
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
            <h1 class="text-2xl font-bold">Edit Seto</h1>
            <p>Mengedit data seto yang ada dalam berkas schale</p>
        </div>
        <!-- card start end -->

        <!-- card body start -->
         <div class="bg-white shadow rounded-lg p-4">
            <form action="" class="grid grid-cols-2 gap-4">
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="name">Nama</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan Nama" name="name">
                </div>
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="NIS">NIS</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="NIS" placeholder="Masukkan NIS" name="NIS">
                </div>
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="class">Kelas</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="Class" placeholder="Masukkan kelas" name="Class">
                </div>
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="phone_number">No Telepon</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="phone_number" placeholder="Masukkan No Telepon" name="phone_number">
                </div>
                <div class="flex justify-end col-span-2">
                    <a href="/students" class="py-2 px-4 bg-color-100 rounded-lg">Kembali</a>
                    <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg text-white">Simpan</button>
                </div>
            </form>
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

    <!-- Kotak dari sini -->
 
    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>
 
 
 
 
<script>
 
const box = document.querySelector(".isian");
 
let x = 100;
let y = 100;
 
let dx = 10;
let dy = 10;
 
function animate(){
 
    const width = box.offsetWidth;
    const height = box.offsetHeight;
 
    const screenW = window.innerWidth;
    const screenH = window.innerHeight;
 
    x += dy;
    y += dx;
 
    if(x + width > screenW || x < 0){
        dy = -dy;
    }
 
    if(y + height > screenH || y < 0){
        dx = -dx;
    }
 
    box.style.left = x + "px";
    box.style.top = y + "px";
 
    requestAnimationFrame(animate);
}
 
animate();
 
</script>
 
<!-- Sampai sini -->
</body>
</html>