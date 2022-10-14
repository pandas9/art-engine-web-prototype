<x-app-layout>
    <img src="{{URL::asset('/images/bg.png')}}" class="fixed left-0 bottom-0 w-3/12" style="z-index: -1;" />

    <div class="flex flex-col gap-1.5 py-6 text-center">
        <span class="text-5xl">Art Engine On Web Prototype</span>
        <span class="text-sm text-slate-400">Prototype version - majority of functions aren't implemented and build output is pregenerated</span>
    </div>

    <div
        class="flex justify-center items-center max-w-2xl mx-auto p-8"
        x-bind:class="$store.project.step === 1 ? 'flex' : 'hidden'"
    >
        <div class="w-full flex flex-col gap-10">

            <div class="w-full flex flex-col gap-5">
                <div>
                    <span class="text-2xl">New Project</span>
                </div>

                <div class="flex flex-col gap-1.5">
                    <span class="text-lg">Name</span>
                    <input type="text" x-model="$store.project.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="My New NFT Project" required />
                </div>

                <div class="flex flex-col gap-1.5">
                    <span class="text-lg">Description</span>
                    <input type="text" x-model="$store.project.description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NFT Project Description" required />
                </div>
            </div>

            <div class="w-full flex flex-col gap-5">
                <div>
                    <span class="text-2xl">Format</span>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-1.5 grow">
                        <span class="text-lg">Height</span>
                        <input type="text" x-model="$store.project.height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="512" required />
                    </div>

                    <span class="text-xl mt-7">x</span>

                    <div class="flex flex-col gap-1.5 grow">
                        <span class="text-lg">Width</span>
                        <input type="text" x-model="$store.project.width" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="512" required />
                    </div>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-1.5 grow">
                        <span class="text-lg">Generate Background</span>
                        <div class="flex items-start items-center mb-4">
                            <input type="checkbox" x-model="$store.project.generateBackground" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label x-text="$store.project.generateBackground" class="text-sm ml-3 font-medium text-gray-900"></label>
                        </div>
                    </div>

                    <div x-show="$store.project.generateBackground" class="flex flex-col gap-1.5">
                        <span class="text-lg">Background Brightness</span>
                        <div class="flex gap-1.5 items-center">
                            <input type="text" x-model="$store.project.backgroundBrightness" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="80" required />
                            <span>%</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-3 grow">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Background Smoothing</span>
                            <span class="text-sm text-slate-400">Set to false when up-scaling pixel art</span>
                        </div>
                        <div class="flex items-start items-center mb-4">
                            <input type="checkbox" x-model="$store.project.backgroundSmoothing" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label x-text="$store.project.backgroundSmoothing" class="text-sm ml-3 font-medium text-gray-900"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col gap-5">
                <div>
                    <span class="text-2xl">Settings</span>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-5 grow" style="width: 50%;">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Token ID</span>
                            <span class="text-sm text-slate-400">Set your tokenID index start number. ⚠️ Be sure it matches your smart contract!</span>
                        </div>
                        <input type="text" x-model="$store.project.tokenID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
                    </div>

                    <div class="flex flex-col gap-5 grow" style="width: 50%;">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Output JPG</span>
                            <span class="text-sm text-slate-400">If false, the generator outputs png's</span>
                        </div>
                        <div class="flex items-start items-center mb-4">
                            <input type="checkbox" x-model="$store.project.outputJPG" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label x-text="$store.project.outputJPG" class="text-sm ml-3 font-medium text-gray-900"></label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-5 grow" style="width: 50%;">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Base URL</span>
                            <span class="text-sm text-slate-400">Base IPFS URL</span>
                        </div>
                        <input type="text" x-model="$store.project.baseIPFS" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ipfs://NewUriToReplace" required />
                    </div>

                    <div class="flex flex-col gap-5 grow" style="width: 50%;">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Hash Images</span>
                            <span class="text-sm text-slate-400">Outputs an Keccack256 hash for the image. Required for provenance hash</span>
                        </div>
                        <div class="flex items-start items-center mb-4">
                            <input type="checkbox" x-model="$store.project.hashImages" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label x-text="$store.project.hashImages" class="text-sm ml-3 font-medium text-gray-900"></label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-5 grow">
                        <span class="text-lg">Unique DNA Torrance</span>
                        <input type="text" x-model="$store.project.dnaTorrance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10000" required />
                    </div>
                </div>
            </div>

            <div>
                <button @click="$store.project.goToStep2()" class="float-right px-4 py-2 bg-indigo-500 outline-none rounded text-white shadow-indigo-200 shadow-lg font-medium active:shadow-none active:scale-95 hover:bg-indigo-600 focus:bg-indigo-600 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">
                    Continue
                </button>
            </div>
        </div>
    </div>

    <div
        class="flex justify-center items-center max-w-2xl mx-auto p-8"
        x-bind:class="$store.project.step === 2 ? 'flex' : 'hidden'"
    >
        <div class="w-full flex flex-col gap-10">
            <div class="w-full flex flex-col gap-5">
                <div class="flex gap-3 items-center">
                    <span class="text-2xl">Layer Configurations</span>
                    <button @click="$store.project.addLayerConfiguration()" class="w-8 h-8 flex items-center justify-center bg-gray-100 outline-none border-gray-200 border text-indigo-500 rounded group hover:bg-indigo-500 hover:text-white hover:border-transparent focus:bg-indigo-500 focus:text-white focus:border-transparent focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 n active:scale-95 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed">
                        <!-- HeroIcons - Outlined Duplicate -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>

                <template x-for="(layerConfig, configIndex) in $store.project.layerConfigurations">
                    <div :key="configIndex" class="flex flex-col gap-5 border border-slate-300 rounded-lg p-4">
                        <div class="flex gap-3 items-center">
                            <input type="text" x-model="layerConfig.name" class="bg-transparent border-0 outline-none text-2xl" placeholder="Layer Configuration Name" required />
                            <button @click="$store.project.deleteLayerConfiguration(configIndex)" class="w-8 h-8 flex items-center justify-center bg-gray-100 outline-none border-gray-200 border text-indigo-500 rounded group hover:bg-indigo-500 hover:text-white hover:border-transparent focus:bg-indigo-500 focus:text-white focus:border-transparent focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 n active:scale-95 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed">
                                <!-- HeroIcons - Outlined Duplicate -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex gap-1.5 grow items-center">
                            <span class="text-lg whitespace-pre">Grow Edition Size To</span>
                            <input type="text" x-model="layerConfig.grow" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="5" required />
                        </div>

                        <div class="flex flex-col gap-3 grow">
                            <div class="flex gap-3 items-center">
                                <span class="text-lg">Layers</span>
                                <button @click="$store.project.addLayer(configIndex)" class="w-7 h-7 flex items-center justify-center bg-gray-100 outline-none border-gray-200 border text-indigo-500 rounded group hover:bg-indigo-500 hover:text-white hover:border-transparent focus:bg-indigo-500 focus:text-white focus:border-transparent focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 n active:scale-95 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed">
                                    <!-- HeroIcons - Outlined Duplicate -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </div>
                            
                            <template x-for="(layer, layerIndex) in layerConfig.layers">
                                <div :key="layerIndex" class="flex flex-col gap-1.5">

                                    <div class="flex gap-1.5 items-center">
                                        <div @click="$store.project.toggleExpandLayer(configIndex, layerIndex)" :class="layer.expand ? 'hidden' : 'block'" class="select-none w-5 h-5 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        <div @click="$store.project.toggleExpandLayer(configIndex, layerIndex)" :class="layer.expand ? 'block' : 'hidden'" class="select-none w-5 h-5 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </div>

                                        <div :class="layer.expand ? 'hidden' : 'block'" class="select-none w-5 h-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                            </svg>
                                        </div>
                                        <div :class="layer.expand ? 'block' : 'hidden'" class="select-none w-5 h-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                            </svg>
                                        </div>

                                        <input type="text" x-model="layer.name" class="bg-transparent border-0 outline-none" placeholder="Layer Name" required />
                                        <div @click="$store.project.addFolder(configIndex, layerIndex)" class="w-5 h-5 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                            </svg>
                                        </div>
                                        <div @click="$store.project.addImage(configIndex, layerIndex)" class="w-5 h-5 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                        </div>
                                        <div @click="$store.project.deleteLayer(configIndex, layerIndex)" class="w-5 h-5 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </div>

                                    </div>

                                    <div x-show="layer.expand">
                                        <template x-for="(folder, folderIndex) in layer.folders">
                                            <div :key="folderIndex" class="ml-14 flex flex-col gap-1.5">
                                                <div class="flex gap-1.5 items-center">
                                                    <div @click="$store.project.toggleExpandLayerFolder(configIndex, layerIndex, folderIndex)" :class="folder.expand ? 'hidden' : 'block'" class="select-none w-5 h-5 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                        </svg>
                                                    </div>
                                                    <div @click="$store.project.toggleExpandLayerFolder(configIndex, layerIndex, folderIndex)" :class="folder.expand ? 'block' : 'hidden'" class="select-none w-5 h-5 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                        </svg>
                                                    </div>

                                                    <div :class="folder.expand ? 'hidden' : 'block'" class="select-none w-5 h-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                                        </svg>
                                                    </div>
                                                    <div :class="folder.expand ? 'block' : 'hidden'" class="select-none w-5 h-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                                        </svg>
                                                    </div>

                                                    <input type="text" x-model="folder.name" class="bg-transparent border-0 outline-none" placeholder="Folder Name" required />
                                                    <div @click="$store.project.addImage(configIndex, layerIndex, folderIndex)" class="w-5 h-5 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                        </svg>
                                                    </div>
                                                    <div @click="$store.project.deleteFolder(configIndex, layerIndex, folderIndex)" class="w-5 h-5 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </div>

                                                </div>

                                                <div x-show="folder.expand">
                                                    <template x-for="(folderImage, folderImageIndex) in folder.images">
                                                        <div :key="folderImageIndex" class="ml-14 flex gap-1.5 items-center">
                                                            <div @click="$store.project.toggleImageModal(folderImage.name)" class="cursor-pointer w-5 h-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                                </svg>
                                                            </div>
                                                            <input type="text" x-model="folderImage.name" class="bg-transparent border-0 outline-none" placeholder="Image Name" required />
                                                            <div @click="$store.project.deleteImage(configIndex, layerIndex, folderImageIndex, folderIndex)" class="w-5 h-5 cursor-pointer">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <div x-show="layer.expand">
                                        <template x-for="(image, imageIndex) in layer.images">
                                            <div :key="imageIndex" class="ml-14 flex gap-1.5 items-center">
                                                <div @click="$store.project.toggleImageModal(image.name)" class="cursor-pointer w-5 h-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                    </svg>
                                                </div>
                                                <input type="text" x-model="image.name" class="bg-transparent border-0 outline-none" placeholder="Image Name" required />
                                                <div @click="$store.project.deleteImage(configIndex, layerIndex, imageIndex)" class="w-5 h-5 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <div class="w-full flex flex-col gap-5">
                <div>
                    <span class="text-2xl">Settings</span>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-5 grow" style="width: 50%;">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Empty Layer Name</span>
                            <span class="text-sm text-slate-400">If you use an empty/transparent file, set the name here</span>
                        </div>
                        <input type="text" x-model="$store.project.emptyLayerName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
                    </div>

                    <div class="flex flex-col gap-5 grow" style="width: 50%;">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-lg">Shuffle Layer Configurations</span>
                            <span class="text-sm text-slate-400">Set to true for when using multiple layersOrder configuration</span>
                        </div>
                        <div class="flex items-start items-center mb-4">
                            <input type="checkbox" x-model="$store.project.shuffleLayerConfigurations" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label x-text="$store.project.shuffleLayerConfigurations" class="text-sm ml-3 font-medium text-gray-900"></label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-5 grow">
                        <span class="text-lg">Rarity Delimiter</span>
                        <input type="text" x-model="$store.project.rarityDelimiter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10000" required />
                    </div>
                </div>
            </div>

            <div class="flex gap-1.5 justify-end">
                <button @click="$store.project.goToStep1()" class="float-right px-4 py-2 bg-transparent outline-none border-2 border-indigo-400 rounded text-indigo-500 font-medium active:scale-95 hover:bg-indigo-600 hover:text-white hover:border-transparent focus:bg-indigo-600 focus:text-white focus:border-transparent focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">
                    Previous
                </button>
                <button @click="$store.project.goToStep3()" class="float-right px-4 py-2 bg-indigo-500 outline-none rounded text-white shadow-indigo-200 shadow-lg font-medium active:shadow-none active:scale-95 hover:bg-indigo-600 focus:bg-indigo-600 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">
                    Generate NFTs
                </button>
            </div>
        </div>
    </div>

    <div
        class="flex justify-center items-center max-w-2xl mx-auto p-8"
        x-bind:class="$store.project.step === 3 ? 'flex' : 'hidden'"
    >
        <div class="w-full flex flex-col gap-5">
            <div>
                <span class="text-2xl">Your New NFT Collection 🎉</span>
            </div>

            <div>
                <span class="text-2xl">Collection size</span>
                <span x-text="$store.project.layerConfigurations[0].grow" class="text-2xl"></span>
            </div>

            <button @click="$store.project.downloadBuild()" class="px-4 py-2 bg-indigo-500 outline-none rounded text-white shadow-indigo-200 shadow-lg font-medium active:shadow-none active:scale-95 hover:bg-indigo-600 focus:bg-indigo-600 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">
                    Download All
            </button>

            <div class="grid grid-cols-2 gap-3">
                <template x-for="(buildImage, buildImageIndex) in $store.project.buildImages">
                    <div :key="buildImageIndex" class="rounded-lg shadow">
                        <img class="rounded-lg shadow" x-bind:src="`../images/build/images/${buildImage}`" />
                    </div>
                </template>
            </div>
        </div>
    </div>

    <iframe id="frame-download-file" style="display:none;"></iframe>
</x-app-layout>