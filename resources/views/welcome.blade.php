<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Main Page</title>
</head>
<body>
  
    <header class>
        <nav class="flex items-center justify-between flex-wrap bg-blue-700 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
    <span class="font-semibold italic text-xl tracking-tight  ">School</span>

    <span class="font-bold italic text-xl tracking-tight">Owl</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class=" ml-20 text-gray-400 hover:text-gray-500 text-lg">
        Docs
      </a>
      <a href="#responsive-header" class="ml-20 text-gray-400 hover:text-gray-500 text-lg ">
        Examples
      </a>
      <a href="#responsive-header" class="ml-20 text-white text-lg text-gray-400 hover:text-gray-500 ">
        Blog
      </a>
      <a href="#responsive-header" class="ml-20 text-white text-lg text-gray-400 hover:text-gray-500 ">
        Blog
      </a>
      <a href="#responsive-header" class="ml-20 text-white text-lg text-gray-400 hover:text-gray-500 ">
        Blog
      </a>
      <a href="#responsive-header" class="ml-20 text-white text-lg text-gray-400 hover:text-gray-500">
        Blog
      </a>
    </div>
    <div>
      <a href="{{ url('/home') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 lg:mt-0">Iniciar Sesion</a>
      <a href="{{ url('/home') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 lg:mt-0">Registrarse</a>
    </div>
  </div>
</nav>
    <div class="flex absolute flex justify-center">
        <h1 class="flex text-8xl bg-gradient-to-r from-blue-700 via-blue-800 to-gray-900 italic font-semibold">SchoolOwl</h1>
        </div>
    <img class="grayscale bg-cover bg-center w-full h-full flex" src="https://images.pexels.com/photos/5212331/pexels-photo-5212331.jpeg?cs=srgb&dl=pexels-max-fischer-5212331.jpg&fm=jpg">
    </div>
    <!-- component -->
    <div class="">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body class="font-sans bg-gray-100">
    <div class="min-h-screen flex justify-center items-center">
        <div class="">
            <div class="text-center font-semibold">
                <h1 class="text-5xl">
                    <span class="text-blue-700 tracking-wide">Flexible </span>
                    <span>Plans</span>
                </h1>
                <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:w-full">
                    Choose a plan that works best for you and<br/> your team.
                </p>
            </div>
            <div class="pt-24 flex flex-row">
                <!-- Basic Card -->
                <div data-aos="fade-down" class="w-96 p-8 bg-white text-center rounded-3xl pr-16 shadow-xl">
                    <h1 class="text-black font-semibold text-2xl">Basic</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">$ </span>
                        <span class="text-3xl font-semibold">10</span>
                        <span class="text-gray-400 font-medium">/ user</span>
                    </p>
                    <hr class="mt-4 border-1">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Get started with <span class="text-black">messaging</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Flexible <span class="text-black">team meetings</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-black">5 TB</span> cloud storage
                            </span>
                        </p>

                        <a href="#" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Choose Plan
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
                <!-- StartUp Card -->
                <div data-aos="zoom-in-up">
                <div  class="w-80 p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform scale-125" >
                    <h1 class="text-white font-semibold text-2xl">Startup</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">$ </span>
                        <span class="text-3xl font-semibold">24</span>
                        <span class="text-gray-400 font-medium">/ user</span>
                    </p>
                    <hr class="mt-4 border-1 border-gray-600">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                All features in <span class="text-white">Basic</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Flexible <span class="text-white">call scheduling</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-white">15 TB</span> cloud storage
                            </span>
                        </p>

                        <a href="#" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Choose Plan
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4">
                        <p class="bg-blue-700 font-semibold px-4 py-1 rounded-full uppercase text-xs">Popular</p>
                    </div>
                </div>
                </div>
                <!-- Enterprise Card -->
                <div data-aos="fade-down    ">
                <div class="w-96 p-8 bg-white text-center rounded-3xl pl-16 shadow-xl">
                    <h1 class="text-black font-semibold text-2xl">Enterprise</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">$ </span>
                        <span class="text-3xl font-semibold">35</span>
                        <span class="text-gray-400 font-medium">/ user</span>
                    </p>
                    <hr class="mt-4 border-1">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                All features in <span class="text-black">Startup</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Growth <span class="text-black">oriented</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-black">Unlimited</span> cloud storage
                            </span>
                        </p>

                        <a href="#" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Choose Plan
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
      </script>
    
</body>
</html>