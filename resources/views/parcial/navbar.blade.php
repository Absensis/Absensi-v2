<nav class="fixed top-0 z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex">
                        <img src="{{ asset('image/logo1.svg')}}" alt="..." width="4%" class="mr-3">
                        <p class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-black">{{ config('app.name', 'Laravel') }}</p>
                    </li>
                </ul>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a href="{{ route('login')}}" style="background-color: #2ec1ac; border-radius: 20px;" class="text-white active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="flex items-center">
                        <a href="{{ route('register')}}" style="background-color: #0278ae; border-radius: 20px;" class="text-white active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
