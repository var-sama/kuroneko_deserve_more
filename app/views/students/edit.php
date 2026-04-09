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


         <form action="" class="isian">
       <img src="/assets/selvin.png" alt="">
    </form>
 
 
 
 
<script>
 
const box = document.querySelector(".isian");
 
let x = 100;
let y = 100;
 
let dx = 2;
let dy = 2;
 
function animate(){
 
    const width = box.offsetWidth;
    const height = box.offsetHeight;
 
    const screenW = window.innerWidth;
    const screenH = window.innerHeight;
 
    x += dx;
    y += dy;
 
    if(x + width > screenW || x < 0){
        dx = -dx;
    }
 
    if(y + height > screenH || y < 0){
        dy = -dy;
    }
 
    box.style.left = x + "px";
    box.style.top = y + "px";
 
    requestAnimationFrame(animate);
}
 
animate();
 
</script>