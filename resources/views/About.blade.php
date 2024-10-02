<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- School Profile -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row items-center mb-6">
                        <div class="md:w-1/3 mb-4 md:mb-0">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/108/2023/09/04/02-Sekolah-781806543.jpg" width="400" height="300" alt="Foto Sekolah" class="rounded-lg shadow-md">
                        </div>
                        <div class="md:w-2/3 md:pl-6">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">SMK Informatika Pesat</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam repellendus ab assumenda sequi. Vel ducimus, porro aliquam accusantium quisquam delectus iure, quam eaque quaerat tenetur inventore sit minima quis necessitatibus.
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Didirikan</h4>
                                    <p class="text-gray-600 dark:text-gray-300">1975</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Akreditasi</h4>
                                    <p class="text-gray-600 dark:text-gray-300">A (Unggul)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Mission -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Visi</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ipsam. Laboriosam omnis pariatur at atque sequi voluptates nemo dicta maiores. Fuga modi ducimus obcaecati debitis odio saepe eaque nihil ea!
                        </p>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Misi</h3>
                        <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                            <li>Menyelenggarakan pendidikan berkualitas</li>
                            <li>Mengembangkan potensi siswa secara optimal</li>
                            <li>Membangun karakter dan kepribadian siswa</li>
                            <li>Menciptakan lingkungan belajar yang kondusif</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Facilities -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Fasilitas</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center p-4">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 dark:text-white">Perpustakaan</h4>
                        </div>
                        <div class="text-center p-4">
                            <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 dark:text-white">Lift</h4>
                        </div>
                        <div class="text-center p-4">
                            <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 dark:text-white">Lapangan</h4>
                        </div>
                        <div class="text-center p-4">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 dark:text-white">Lap. Komputer</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Kontak</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-medium text-gray-900 dark:text-white mb-2">Alamat</h4>
                            <p class="text-gray-600 dark:text-gray-300">
                                Jl. Poras No. 123<br>
                                Kota Bogor<br>
                                12345
                            </p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 dark:text-white mb-2">Informasi Kontak</h4>
                            <p class="text-gray-600 dark:text-gray-300">
                                Telepon: (021) 123-4567<br>
                                Email: info@SmkPesat.sch.id<br>
                                Website: www.SmkPesat.sch.id
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>