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
    <?php require_once '../app/views/layouts/partials/header.php' ?>

    <main class="container mx-auto grow p-16 space-y-10">
        <?php require_once $content ?>
    </main>

    <?php require_once '../app/views/layouts/partials/footer.php' ?>
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