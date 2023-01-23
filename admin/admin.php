<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>
<body>
    <div class="container flex flex-row">
    <!-- This section is the left most part, it contains different pages such as  home, profile househelps -->
        <section class="w-1/4 border-solid border-r-4 border-sky-700" style="height: 100vh;">
            <div id="left-panel" class="pl-10 py-5">
                <!-- this section contains the admin name and picture -->
                <p class="font-bold text-3xl"><a href="#">Donda</a></p>
                <div class="mt-5 w-auto">
                    <img class="w-14" src="../images/girl2.png" alt="">
                    <p class="text-2xl"><b>Samson Mokaya</b></p>
                    <p class="text-sky-700 text-xl"><b>Admin</b></p>
                </div>
                <!-- this section contains the links to different pages -->
                <ul class="mt-10">
                    <div class="flex flex-row mt-6">
                        <img class="w-8" src="../images/home.png" alt="home">
                        <li class="text-xl ml-5"><a href="#">Home</a></li>
                    </div>
                    <div class="flex flex-row mt-6">
                        <img class="w-8" src="../images/profile2.png" alt="profile">
                        <li class="text-xl ml-5"><a href="#">Profile</a></li>
                    </div>
                    <div class="flex flex-row mt-6">
                        <img class="w-8" src="../images/house-help.png" alt="househelps">
                        <li class="text-xl ml-5"><a href="#">Househelps</a></li>
                    </div>
                    <div class="flex flex-row mt-6">
                        <img class="w-7" src="../images/gear.png" alt="settings">
                        <li class="text-xl ml-5"><a href="#">Settings</a></li>
                    </div>
                    <div class="flex flex-row mt-6">
                        <img class="w-8" src="../images/logout.png" alt="logout">
                        <li class="text-xl ml-5"><a href="#">Sign out</a></li>
                    </div>
                </ul>
            </div>
        </section>
        <!-- This is the main section containing the counters and CRUD displays -->
        <section class="w-3/4 h-1/3">
            <div id="counter" class="px-5 py-10  flex flex-row space-x-5 bg-sky-300">
                <!-- this section displays the counters -->
                <div class=" w-72 flex flex-row bg-white px-10 py-7 rounded-3xl">
                    <div>
                        <img class="w-20" src="../images/users.png" alt="">
                    </div>
                    <div class="px-3 ml-4 mt-2">
                        <p class="text-3xl ml-4"><b>200</b></p>
                        <p class="text-xl text-sky-700">Total Users</p>
                    </div>

                </div>
                <div class=" w-72 flex flex-row bg-white px-10 py-7 rounded-3xl">
                    <div>
                        <img class="w-20" src="../images/househelp.png" alt="">
                    </div>
                    <div class=" ml-4 mt-2">
                        <p class="text-3xl ml-4"><b>200</b></p>
                        <p class="text-xl text-sky-700">House Helps</p>
                    </div>

                </div>
                <div class=" w-72 flex flex-row bg-white px-10 py-7 rounded-3xl">
                    <div>
                        <img class="w-20" src="../images/checklist.png" alt="">
                    </div>
                    <div class="px-3 ml-4 mt-2">
                        <p class="text-3xl ml-4"><b>200</b></p>
                        <p class="text-xl text-sky-700 ml-2">Orders</p>
                    </div>

                </div>  
            </div>
            <!-- This section contains table entries -->
            <table width="100%">
                <tr class="flex flex-row space-x-80 px-10 bg-sky-700" width="100%">
                    <th class="text-2xl text-white">Name</th>
                    <th class="text-2xl text-white">Status</th>
                    <th class="text-2xl text-white">Action</th>
                </tr>
                <tr class="flex flex-row space-x-52  px-5 py-5 border-solid border-b-2 border-gray-300" width="100%">
                    <td class="flex flex-row space-x-5">
                        <img class="w-12" src="../images/girl2.png" alt="">
                        <div>
                            <p class="text-xl">Samson Mokaya</p>
                            <p class="text-sm text-gray-600">samson@gmail.com</p>
                        </div>
                    </td>
                    <td>
                        <button class="text-xl">Active</button>
                    </td>
                    <td class="flex flex-row space-x-10 pl-24">
                        <a href=""><img class="w-7" src="../images/edit.png" alt="edit"></a>
                        <a href=""><img class="w-7" src="../images/del.png" alt="delete"></a>
                    </td>
                </tr>
            </table>
        </section>
    </div>
    
</body>
</html>