<script setup>
import { ref } from 'vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Dropdown2nd from '@/Components/Dropdown2nd.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex flex-col h-screen dark:bg-[#111827] dark:text-white p-5">
        <main class="flex h-full">
            <!-- SideBar -->
            <aside class="w-[20%] dark:bg-[#1E293B] p-5 flex flex-col justify-between rounded-lg">
                
                <!-- Top -->
                <div>
                    <div class="my-5 h-[0.1px] dark:bg-white " />
                
                    <!-- Dashboard -->
                    <ResponsiveNavLink 
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="flex items-center mb-2"
                    >
                        <svg fill="currentColor" viewBox="0 0 8 8" width="15" height="15" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                            <path d="M3.5 0c-.97 0-1.84.4-2.47 1.03l2.97 2.97v-3.97c-.16-.02-.33-.03-.5-.03zm1.5 1.06v3.41l-2.72 2.72c.61.5 1.37.81 2.22.81 1.93 0 3.5-1.57 3.5-3.5 0-1.76-1.31-3.19-3-3.44zm-4.09 1.31c-.56.54-.91 1.29-.91 2.13 0 .96.46 1.79 1.16 2.34l2.13-2.13-2.38-2.34z"></path>
                        </svg>
                        
                        Dashboard
                    </ResponsiveNavLink>

                    <!-- Transactions -->
                    <ResponsiveNavLink 
                        :href="route('transactions.index')" 
                        :active="route().current('transactions.index')"
                        class="mb-2"
                    >
                        Transactions
                    </ResponsiveNavLink>

                    <!-- Inventory -->
                    <Dropdown2nd>
                        <template #trigger>
                            <button
                            type="button"
                            class="w-full flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="ps-6 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-database mr-2" viewBox="0 0 16 16">
                                        <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525"/>
                                        </svg>
                                    </div>
                                    Inventory
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                        </template>

                        <template #content>
                            <ResponsiveNavLink 
                                :href="route('products.index')" 
                                :active="route().current('products.index')"
                                class="pl-12 mt-2"
                            >
                                Products
                            </ResponsiveNavLink>
                        </template>
                    </Dropdown2nd>

                </div>
                
                <!-- Bottom -->
                <div>
                    <ResponsiveNavLink :href="route('logout')" method="post" as="button" class="text-[#B91C1C] hover:bg-[#B91C1C] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-box-arrow-left mr-3" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                        </svg>
                        Logout
                    </ResponsiveNavLink>
                </div>
            </aside>

            <!-- Content -->
            <slot />
        </main>
        
        <!-- Footer -->
        <footer></footer>
    </div>
</template>