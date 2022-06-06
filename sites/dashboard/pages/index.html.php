---
@layout: 
    path: /default


name: Dashboard
title: Joomlatools Server Dashboard
summary: Dashboard for managing Joomlatools Server
---

        <section class="max-w-7xl mx-auto py-4 px-5">
            <div class="flex justify-between items-center border-b border-gray-300">
                <h1 class="text-2xl font-semibold pt-2 pb-6">Sites running on this server</h1>
                <button type="button" class="px-6 py-2.5 bg-jtblue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-jtblue-700 hover:shadow-lg focus:bg-jtblue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-jtblue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Add a site
                </button>
            </div>
            
            <!-- TABLE -->
            <div class="bg-white shadow rounded-lg overflow-x-scroll md:bg-transparent md:shadow-none md:rounded-none md:overflow-x-none my-8">
                <div class="flex flex-row w-full justify-between bg-gray-200 text-gray-600 uppercase text-sm font-bold leading-normal md:hidden">
                    <div class="w-5/12 py-3 px-6 text-left">Site</div>
                    <div class="w-4/12 py-3 px-6 text-center">Platform</div>
                    <div class="w-3/12 py-3 px-6 text-right">Actions</div>
                </div>
                <div class="text-gray-600 text-sm md:grid lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 md:gap-8 md:m-4 ">
                    <? $id = 1; foreach(data('sites') as $site) : ?>
                        <div id="sites" class="flex flex-row md:grid w-full justify-between border-b border-gray-200 hover:bg-gray-100 md:border-none md:bg-white md:hover:bg-white md:shadow md:rounded-lg transform transition duration-300 md:hover:scale-105">
                            <div class="hidden md:block w-auto lg:w-full place-self-center lg:place-self-start">
                                <a href="<?= $site->url ?>">
                                    <img class="object-cover object-top h-20 w-20 lg:h-40 lg:w-full rounded-full lg:rounded-t-lg lg:rounded-b-none" src="images://<?= $site->img ?>">
                                </a>
                            </div>
                            <div class="w-5/12 md:w-full py-3 px-6 text-left font-semibold md:text-2xl">
                                <a class="hover:underline" href="<?= $site->url ?>">
                                    <?= $site->name ?>
                                </a>
                            </div>
                            <div class="w-4/12 py-3 px-6 text-center md:text-left md:text-sm"><span class="bg-<?= $site->platform_bg_color ?> text-<?= $site->platform_text_color ?> py-1 px-3 rounded-full text-xs whitespace-nowrap"><?= $site->platform_name ?></span></div>
                            <div class="hidden md:flex w-2/12 py-3 px-6 text-left md:text-sm"><span>Version: </span><span><?= $site->platform_version ?></span></div>
                            <div class="w-3/12 md:w-full py-3 px-6">

                                <div class="flex item-center justify-end">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer has-tooltip">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <span class="tooltip rounded shadow-lg p-1 bg-gray-800 text-white -mt-12 -ml-8 text-center">View site</span>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer has-tooltip">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                        <span class="tooltip rounded shadow-lg p-1 bg-gray-800 text-white -mt-12 -ml-8 text-center">Edit site</span>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer has-tooltip">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <span class="tooltip rounded shadow-lg p-1 bg-gray-800 text-white -mt-12 -ml-8 text-center">Delete site</span>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer has-tooltip">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                        </svg>
                                        <span class="tooltip rounded shadow-lg p-1 bg-gray-800 text-white -mt-12 -ml-28 text-center">Download remote site</span>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer has-tooltip">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span class="tooltip rounded shadow-lg p-1 bg-gray-800 text-white -mt-12 -ml-24 text-center">Deploy to fly.io</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <? $id++; endforeach ?>
                </div>
            </section>
