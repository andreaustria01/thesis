<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-white h-screen sticky top-0 w-[25%] shadow-xl rounded-3xl hidden lg:block">
            <div class="px-3 text-sm font-semibold tracking-wide flex flex-col gap-2">
                <div class="flex flex-col">
                    <!-- Dashboard -->
                    <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')" class="flex">
                        <svg fill="currentColor" viewBox="0 0 8 8" width="14" height="14" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                            <path d="M3.5 0c-.97 0-1.84.4-2.47 1.03l2.97 2.97v-3.97c-.16-.02-.33-.03-.5-.03zm1.5 1.06v3.41l-2.72 2.72c.61.5 1.37.81 2.22.81 1.93 0 3.5-1.57 3.5-3.5 0-1.76-1.31-3.19-3-3.44zm-4.09 1.31c-.56.54-.91 1.29-.91 2.13 0 .96.46 1.79 1.16 2.34l2.13-2.13-2.38-2.34z"></path>
                        </svg>
                        
                        Dashboard
                    </ResponsiveNavLink>

                    <!-- Inventory -->
                    <div class="flex flex-col">
                        <div class="text-xs opacity-90 font-black">Inventory</div>
                            <ResponsiveNavLink 
                                :href="route('products.index')" 
                                :active="route().current('products.index')"
                            >
                                Products
                            </ResponsiveNavLink>
                    </div>
                </div>
                

                <div class="flex">
                    <ResponsiveNavLink :href="route('logout')" method="post" as="button" class="text-[#B91C1C] hover:bg-[#B91C1C] flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-box-arrow-left mr-3" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                        </svg>
                        Logout
                    </ResponsiveNavLink>
                </div>
                
            </div>
        </aside>

        <div class="w-screen bg-[#D9D9D9]">
            <!-- Navbar -->
            <nav class="my-5">
                <div class="container-auto flex h-9 gap-5 justify-end">
                    <!-- Search -->
                    <div class="relative flex items-center h-9 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input class="peer h-full w-full focus:ring-0 text-sm pr-2 border-none" type="text" id="search" placeholder="Search">
                    </div>

                    <!-- Notification Button -->
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                        </svg>
                    </button>

                    <!-- Picture Button -->
                    <button class="w-[4rem] h-[4rem] radius-full items-center flex justify-center">
                        <img class="w-[50%] h-[50%]" src="">
                    </button>
                </div>
            </nav>
            
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
        
    </div>
</template>