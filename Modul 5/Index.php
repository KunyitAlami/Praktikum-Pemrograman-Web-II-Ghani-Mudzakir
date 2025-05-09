<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Mudzakir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-[url('background.jpeg')]  bg-center min-h-screen">

    <div class="p-12 max-w-5xl mx-auto bg-white rounded-xl shadow-md flex items-center gap-x-5">

        <div class="flex-shrink-0" >
            <img class="h-36 w-36 rounded-xl" src="logo_perpustakaan.jpeg" alt="Perpustakaan Mudzakir">
        </div>


        <div class="pl-4">
            <h1 class="text-5xl font-bold text-black-800 pr-[20px] py-2">Perpustakaan</h1>
            <h1 class="text-5xl font-bold text-black-800 pr-[20px] py-2">Mudzakir</h1>
        </div>


        <div class="menu_awal space-y-4">
            <div>
                <button type="button" class="px-[41.6px] py-2 font-semibold rounded-lg shadow-md text-white bg-black hover:bg-gray-400 20px
                hover:text-black transition duration-300 ease-in-out transform hover:scale-105
                ">
                    <a href="Member.php">Member</a>
                </button>
            </div>
            <div>
                <button type="button" class="px-[53.9px] py-2 font-semibold rounded-lg shadow-md text-white bg-black hover:bg-gray-400 20px
                hover:text-black transition duration-300 ease-in-out transform hover:scale-105                   
                ">
                    <a href="Buku.php">Buku</a>
                </button>
            </div>
            <div>
                <button type="button" class="px-[28.3px] py-2 font-semibold rounded-lg shadow-md text-white bg-black hover:bg-gray-400 20px
                hover:text-black transition duration-300 ease-in-out transform hover:scale-105      
                ">
                    <a href="Peminjaman.php">Peminjaman</a>
                </button>
            </div>
        </div>



    </div>

</body>
</html>
