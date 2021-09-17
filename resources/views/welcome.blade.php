@section('title', __('pages.about.heading') . ' - ' . config('app.name'))

<x-app-layout>

    <!-- Banner section 1 -->
    <div class="relative py-16 sm:py-32 flex content-center items-center justify-center" style="min-height: 60vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-4/5 px-4 ml-auto mr-auto text-center">
                    <div class="pr-0 sm:pr-12">
                        <h1 class="text-white font-semibold text-2xl sm:text-5xl">
                            Your story starts with us.
                        </h1>
                        <p class="mt-4 text-md sm:text-lg text-gray-300">
                            This is a simple example of a Landing Page you can build using
                            Tailwind Starter Kit. It features multiple CSS components
                            based on the Tailwindcss design system.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-50 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>



    <!-- section 2 -->
    <div class="py-6 sm:py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center lg:text-center">
                <!-- <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2> -->
                <p class="mt-2 text-2xl leading-6 sm:leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    A better way to send money
                </p>
                <p class="mt-4 max-w-2xl text-md sm:text-xl text-gray-500 lg:mx-auto">
                    Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis
                    in accusamus quisquam.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="bg-indigo-100">
        <div
            class="max-w-7xl mx-auto py-6 sm:py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-gray-900 ">
                <span class="block">Ready to dive in?</span>
                <span class="block text-indigo-600">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Get started
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Section 4 -->
    <div class="max-w-7xl mx-auto py-6 sm:py-12 px-4 sm:px-6 lg:py-16 lg:px-8 bg-white">
        <div class="text-center lg:text-center">
            <!-- <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2> -->
            <p class="mt-2 text-xl sm:text-4xl leading-8 font-extrabold tracking-tight text-gray-900">
                Our Services
            </p>
            <p class="mt-4 max-w-2xl text-md sm:text-xl text-gray-500 lg:mx-auto">
                Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in
                accusamus quisquam.
            </p>
        </div>
        <div
            class="rounded-lg mt-10 overflow-hidden shadow divide-y divide-gray-200 bg-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
            <div
                class="rounded-tl-lg rounded-tr-lg sm:rounded-tr-none relative group bg-white p-4 sm:p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div>
                    <span class="rounded-lg inline-flex p-3 bg-gray-50 text-teal-700 ring-4 ring-white">
                        <!-- Heroicon name: outline/clock -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 sm:mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Request time off
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at
                        blanditiis et quo et molestiae.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="sm:rounded-tr-lg relative group bg-white p-4 sm:p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div>
                    <span class="rounded-lg inline-flex p-3 bg-purple-50 text-purple-700 ring-4 ring-white">
                        <!-- Heroicon name: outline/badge-check -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 sm:mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Benefits
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at
                        blanditiis et quo et molestiae.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="relative group bg-white p-4 sm:p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div>
                    <span class="rounded-lg inline-flex p-3 bg-green-50 text-sky-700 ring-4 ring-white">
                        <!-- Heroicon name: outline/users -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 sm:mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Schedule a one-on-one
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at
                        blanditiis et quo et molestiae.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="relative group bg-white p-4 sm:p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div>
                    <span class="rounded-lg inline-flex p-3 bg-yellow-50 text-yellow-700 ring-4 ring-white">
                        <!-- Heroicon name: outline/cash -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 sm:mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Payroll
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at
                        blanditiis et quo et molestiae.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="sm:rounded-bl-lg relative group bg-white p-4 sm:p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div>
                    <span class="rounded-lg inline-flex p-3 bg-pink-50 text-rose-700 ring-4 ring-white">
                        <!-- Heroicon name: outline/receipt-refund -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 sm:mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Submit an expense
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at
                        blanditiis et quo et molestiae.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="rounded-bl-lg rounded-br-lg sm:rounded-bl-none relative group bg-white p-4 sm:p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div>
                    <span class="rounded-lg inline-flex p-3 bg-indigo-50 text-indigo-700 ring-4 ring-white">
                        <!-- Heroicon name: outline/academic-cap -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </span>
                </div>
                <div class="mt-4 sm:mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Training
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at
                        blanditiis et quo et molestiae.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>
        </div>
    </div>




    <!-- Section 4 -->
    <div class="bg-white">
        <div
            class="max-w-2xl mx-auto py-10 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
            <div>
                <h2 class="text-xl text-center sm:text-left font-extrabold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications
                </h2>
                <p class="mt-4 text-md sm:text-lg text-center sm:text-left text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of
                    Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to
                    archive important task lists.</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Origin</dt>
                        <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Material</dt>
                        <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder
                            coated steel card cover</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Dimensions</dt>
                        <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Finish</dt>
                        <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Includes</dt>
                        <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Considerations</dt>
                        <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with
                            each item.</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
                    alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                    class="bg-gray-100 rounded-lg">
                <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
                    alt="Top down view of walnut card tray with embedded magnets and card groove."
                    class="bg-gray-100 rounded-lg">
                <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg"
                    alt="Side of walnut card tray with card groove and recessed card area."
                    class="bg-gray-100 rounded-lg">
                <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg"
                    alt="Walnut card tray filled with cards and card angled in dedicated groove."
                    class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>



</x-app-layout>