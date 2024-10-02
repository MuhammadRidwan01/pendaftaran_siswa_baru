<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hubungi Kami') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Contact Header -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/3 mb-4 md:mb-0">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/108/2023/09/04/02-Sekolah-781806543.jpg" width="400" height="300" alt="SMK Informatika Pesat" class="rounded-lg shadow-md">
                        </div>
                        <div class="md:w-2/3 md:pl-6">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">SMK Informatika Pesat</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Sekolah unggulan bidang Teknologi Informasi di Kota Bogor yang menghasilkan lulusan berkompeten dan siap kerja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Location & Contact -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Informasi Kontak</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-medium text-gray-900 dark:text-white">Alamat</h4>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Jl. Raya Bogor No.123<br>
                                        Kota Bogor, Jawa Barat<br>
                                        16115
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-medium text-gray-900 dark:text-white">Telepon</h4>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        (0251) 123-4567<br>
                                        0812-3456-7890 (WhatsApp)
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-medium text-gray-900 dark:text-white">Email</h4>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        info@smkinformatikapesat.sch.id<br>
                                        ppdb@smkinformatikapesat.sch.id
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Kirim Pesan</h3>
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Subjek</label>
                                <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pesan</label>
                                <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Media Sosial</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="#" class="flex items-center justify-center p-4 gap-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors bg-blue-900">
                            <i class="fa-brands fa-facebook text-white"></i>
                            <span class="text-gray-900 dark:text-white font-medium">Facebook</span>
                        </a>
                        <a href="#" class="flex items-center justify-center p-4 gap-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors bg-gradient-to-r from-[#833ab4] via-[#fd1d1d] to-[#fcb045]">
                            <i class="fa-brands fa-instagram"></i>
                            <span class="text-gray-900 dark:text-white font-medium">Instagram</span>
                        </a>
                        <a href="#" class="flex items-center justify-center gap-3 p-4  rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors bg-red-800">
                            <i class="fa-brands fa-youtube text-red-500"></i>
                            <span class="text-gray-900 dark:text-white font-medium">YouTube</span>
                        </a>
                        <a href="#" class="flex items-center justify-center p-4 gap-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors bg-blue-700">
                            <i class="fa-brands fa-square-x-twitter text-white"></i>
                            <span class="text-gray-900 dark:text-white font-medium">Twitter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>