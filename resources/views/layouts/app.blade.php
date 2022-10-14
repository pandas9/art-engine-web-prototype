<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-partials.head></x-partials.head>

    <body class="font-sans antialiased transition-all">
        <div x-data>
            <!-- Page Content -->
            {{ $slot }}

            <!-- Alert Notification -->
            <div
                x-init="$watch(
                        '$store.project.alert',
                        value => {
                            if (value) setTimeout(() => $store.project.hideAlert(), 2000);
                        }
                    )
                "
                class="fixed justify-center bottom-0 w-full"
                x-bind:class="$store.project.alert ? 'flex' : 'hidden'"
            >
                <div>
                    <div class="max-w-xs bg-gray-500 text-sm text-white rounded-md shadow-lg dark:bg-gray-700 mb-3 ml-3" role="alert">
                        <div class="flex gap-3 px-4 pt-4 pb-3">
                            <span class="leading-none" x-text="$store.project.alertMessage"></span>

                            <div class="ml-auto">
                                <button type="button" @click="$store.project.hideAlert()" class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-600 focus:ring-gray-500 transition-all text-sm dark:focus:ring-offset-gray-700 dark:focus:ring-gray-500">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="currentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layer Image Modal -->
            <div @click="$store.project.toggleImageModal()" x-show="$store.project.imageModal" class="fixed bg-black/10 top-0 left-0 h-screen w-full"></div>

            <div x-show="$store.project.imageModal" class="fixed" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                            <h3 x-text="$store.project.imageModalSrc" class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                            </h3>
                            <button @click="$store.project.toggleImageModal()" type="button" class="ml-6 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <img x-bind:src="`../images/${$store.project.imageModalSrc}`" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
