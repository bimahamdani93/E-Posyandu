<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
    <title>register</title>
    <style>
        body {
            background-image: linear-gradient(#646FD4, #9BA3EB);
        }
    </style>
</head>

<body>
    <div class="w-full h-screen font-sans bg-cover bg-landscape">
        <div class="container flex items-center justify-center flex-1 h-full mx-auto">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <div class="mt-8">
                        <form action="act_register.php" method="POST" class="max-w-sm p-10 m-auto bg-white bg-opacity-25 rounded shadow-xl">
                            <div class=" text-center self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white">
                                <p class="font-semibold">Register</p>
                            </div>

                            <div class="flex flex-col mb-2">
                                <div class="flex relative ">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" name="username" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your username" />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="flex relative ">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" name="password" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your password" />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="flex relative ">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" name="ulangipassword" class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Repeat Your password" />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="flex relative ">
                                    <span class="rounded-l-md inline-flex  items-center pl-2 pr-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <i class="fas fa-address-card"></i>
                                    </span>
                                    <input type="text" name="namalengkap" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your Fullname" />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="flex relative ">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="text" name="email" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="flex w-full mt-6">
                                <button type="submit" class="py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Register
                                </button>
                            </div>

                            <div class="flex items-center justify-center mt-6">
                                <span class="ml-2">
                                    <p class="text-gray-500">already have an account? <a href="../login/form_login.php"> login</a></p>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>