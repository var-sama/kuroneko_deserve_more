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
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 20rem;

    border-radius: 10px;
    padding: 10px;

    width: 320px;
    box-sizing: border-box;

    position: fixed; /* ⬅️ penting */
    
    /* ❌ HAPUS INI */
    /* top: 100px; */
    /* left: 100px; */
    /* margin: 20px; */

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
        <div class="mt-8 space-y-2">
        <!-- card start start -->
        <div class="p-4 shadow rounded-lg bg-white">
            <h1 class="text-2xl font-bold">Detail Seto</h1>
            <p>Menampilkan detail seto yang terdaftar</p>
        </div>
        <!-- card start end -->

        <!-- card body start -->
         <div class="bg-white shadow rounded-lg p-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="name">Nama</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan Nama" name="name" readonly>
                </div>
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="NIS">NIS</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="NIS" placeholder="Masukkan NIS" name="NIS"readonly>
                </div>
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="class">Kelas</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="Class" placeholder="Masukkan kelas" name="Class"readonly>
                </div>
                <div class="space-y-2 pt-2">
                    <label class="block font-bold" for="phone_number">No Telepon</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="phone_number" placeholder="Masukkan No Telepon" name="phone_number"readonly>
                </div>
                <div class="flex justify-end col-span-2">
                    <a href="/students" class="py-2 px-4 bg-color-100 rounded-lg">Kembali</a>
                </div>
            </div>
         </div>
        <!-- card body end -->
        </div>
    </main>


     
    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>

    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>

    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>

    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>

    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>

    <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>
 
 
 
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
 
<script>
 
const boxes = document.querySelectorAll(".isian");

boxes.forEach(box => {
  // posisi awal random (dikurangi size biar gak keluar layar)
  let x = Math.random() * (window.innerWidth - box.offsetWidth);
  let y = Math.random() * (window.innerHeight - box.offsetHeight);
  let rotateSpeed = (Math.random() * 10) - 5;

  // kecepatan random (biar beda-beda)
  let dx = (Math.random() * 20) + 1;
  let dy = (Math.random() * 20) + 1;

  // arah random (biar ga semua ke kanan bawah)
  if(Math.random() > 0.5) dx *= -1;
  if(Math.random() > 0.5) dy *= -1;

  // SET POSISI AWAL (ini yang penting biar gak numpuk)
  box.style.left = x + "px";
  box.style.top = y + "px";

  function animate(){
    const width = box.offsetWidth;
    const height = box.offsetHeight;

    const screenW = window.innerWidth;
    const screenH = window.innerHeight;

    x += dx;
    y += dy;

    // pantul kanan kiri
    if(x + width > screenW || x < 0){
      dx = -dx;
    }

    // pantul atas bawah
    if(y + height > screenH || y < 0){
      dy = -dy;
    }

    box.style.left = x + "px";
    box.style.top = y + "px";

    requestAnimationFrame(animate);
  }

  animate();
});

</script>
 
