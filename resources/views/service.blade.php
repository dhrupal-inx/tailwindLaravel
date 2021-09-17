@section('title', __('pages.about.heading') . ' - ' . config('app.name'))

<x-app-layout>

    <div class="relative py-16 sm:py-32 flex content-center items-center justify-center" style="min-height: 60vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
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
    <section class="pb-8 sm:pb-20 bg-gray-50 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-0 sm:px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Awarded Agency</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Divide details about your product or agency work into parts.
                                A paragraph describing a feature will be enough.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-0 sm:px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Free Revisions</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Keep you user engaged by providing meaningful information.
                                Remember that by this time, the user is curious.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-0 sm:pt-6 w-full md:w-4/12 px-0 sm:px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Verified Company</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Write a few lines about each one. A paragraph describing a
                                feature will be enough. Keep you user engaged!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-6 sm:mt-16">
                <div class="w-full md:w-5/12 px-0 sm:px-4 mr-auto ml-auto text-center sm:text-left">
                    <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-3xl mb-2 font-semibold leading-6 sm:leading-normal">
                        Working with us is a pleasure
                    </h3>
                    <p class="text-md sm:text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Don't let your uses guess by attaching tooltips and popoves to
                        any element. Just make sure you enable them first via
                        JavaScript.
                    </p>
                    <p class="text-md sm:text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                        The kit comes with three pre-built pages to help you get started
                        faster. You can change the text and images and you're good to
                        go. Just make sure you enable them first via JavaScript.
                    </p>
                    <a href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                        class="font-bold text-gray-800 mb-4 sm:mx-8 w-full float-left">Check Tailwind Starter Kit!</a>
                </div>
                <div class="w-full md:w-4/12 px-0 sm:px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words  w-full mb-6 shadow-lg rounded-lg bg-indigo-600">
                        <img alt="..."
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                            class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-5 sm:p-8 mb-0 sm:mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                <polygon points="-30,95 583,95 583,65" class="text-indigo-600 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Top Notch Services
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                The Arctic Ocean freezes every winter and much of the
                                sea-ice then thaws every summer, and that process will
                                continue whatever happens.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-8 sm:py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-0 sm:px-4 ">
                    <img alt="..." class="max-w-full rounded-lg shadow-lg"
                        src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-0 sm:px-4 mt-6 sm:mt-0">
                    <div class="md:pr-12 text-center sm:text-left">
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-3xl font-semibold">A growing company</h3>
                        <p class="mt-4 text-md sm:text-lg leading-relaxed text-gray-600">
                            The extension comes with three pre-built pages to help you get
                            started faster. You can change the text and images and you're
                            good to go.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="w-10 h-10 flex items-center justify-center text-xs font-semibold py-1 px-2 uppercase rounded-full text-white bg-indigo-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                            </svg></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Carefully crafted components
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="w-10 h-10 flex items-center justify-center text-xs font-semibold py-1 px-2 uppercase rounded-full text-white bg-indigo-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Amazing page examples</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="w-10 h-10 flex items-center justify-center text-xs font-semibold  py-1 px-2 uppercase rounded-full text-white bg-indigo-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Dynamic components</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 sm:py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-10 sm:mb-24">
                <div class="w-full lg:w-6/12 px-0 sm:px-4">
                    <h2 class="text-xl sm:text-3xl font-semibold">Here are our heroes</h2>
                    <p class="text-md sm:text-lg leading-relaxed m-2 sm:m-4 text-gray-600">
                        According to the National Oceanic and Atmospheric
                        Administration, Ted, Scambos, NSIDClead scentist, puts the
                        potentially record maximum.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-6 px-4">
                    <div class="px-6">
                        <img alt="..." src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ryan Tompson</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Web Developer
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-6 px-4">
                    <div class="px-6">
                        <img alt="..." src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Romina Hadid</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Marketing Specialist
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-6 px-4">
                    <div class="px-6">
                        <img alt="..." src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Alexa Smith</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                UI/UX Designer
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-6 px-4">
                    <div class="px-6">
                        <img alt="..." src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Jenna Kardi</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Founder and CEO
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-8 sm:pb-20 relative block bg-indigo-600 sm:pt-0 pt-8">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-indigo-600 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-16">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-0 sm:px-4">
                    <h2 class="text-xl sm:text-3xl font-semibold text-white">Build something</h2>
                    <p class="text-md sm:text-lg leading-relaxed mt-4 mb-4 text-gray-100">
                        Put the potentially record low maximum sea ice extent tihs year
                        down to low ice. According to the National Oceanic and
                        Atmospheric Administration, Ted, Scambos.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-8 sm:mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-2 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="bi bi-arrow-up-right-square text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        Excelent Services
                    </h6>
                    <p class="mt-2 mb-4 text-gray-100">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="bi bi-graph-up text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Grow your market
                    </h5>
                    <p class="mt-2 mb-4 text-gray-100">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="bi bi-stopwatch text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                    <p class="mt-2 mb-4 text-gray-100">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>