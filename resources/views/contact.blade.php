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
                <polygon class="text-gray-500 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="relative block py-8 sm:py-24  bg-gray-500">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Complete this form and we will get back to you in 24 hours.
                            </p>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                                    Name</label><input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">Email</label><input type="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="message">Message</label><textarea rows="4" cols="80"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Type a message..."></textarea>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>