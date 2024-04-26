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
                <div class="overflow-auto">
                    <div class="my-5 h-[0.1px] dark:bg-white " />
                
                    <!-- Dashboard -->
                    <ResponsiveNavLink 
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="flex items-center mb-4 text-sm"
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
                        class="mb-4 text-sm"
                    >
                        Transactions
                    </ResponsiveNavLink>

                    <!-- Inventory -->
                    <Dropdown2nd>
                        <template #trigger>
                            <button
                            type="button"
                            class="mb-4 w-full flex justify-between items-center text-sm">
                                <div class="flex items-center">
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

                            <ResponsiveNavLink 
                                :href="route('rawmaterials.index')" 
                                :active="route().current('rawmaterials.index')"
                                class="pl-12 mt-2"
                            >
                                Raw Materials
                            </ResponsiveNavLink>
                        </template>
                    </Dropdown2nd>

                    <!-- Contacts -->
                    <Dropdown2nd>
                        <template #trigger>
                            <button
                            type="button"
                            class="w-full my-4 flex justify-between items-center text-sm">
                                <div class="flex items-center">
                                    Contacts
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                        </template>

                        <template #content>
                            <ResponsiveNavLink 
                                :href="route('clients.index')" 
                                :active="route().current('clients.index')"
                                class="pl-12 mb-2"
                            >
                                Clients
                            </ResponsiveNavLink>
                        </template>
                    </Dropdown2nd>

                    <!-- Reports -->
                    <Dropdown2nd>
                        <template #trigger>
                            <button
                            type="button"
                            class="w-full my-4 flex justify-between items-center text-sm">
                                <div class="flex items-center">
                                    Reports
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                        </template>

                        <template #content>
                            <ResponsiveNavLink 
                                :href="route('inventoryreports.index')" 
                                :active="route().current('inventoryreports.index')"
                                class="pl-12 mb-2"
                            >
                                Inventory Reports
                            </ResponsiveNavLink>
                        </template>
                    </Dropdown2nd>


                    <ResponsiveNavLink 
                        :href="route('delivery.index')"
                        :active="route().current('delivery.index')"
                        class="flex items-center mb-4 text-sm"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill mr-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                    </svg>
                        
                        Map
                    </ResponsiveNavLink>
                </div>
                
                <!-- Bottom -->
                <div>
                    <ResponsiveNavLink :href="route('logout')" method="post" as="button" class="text-[#B91C1C] hover:bg-[#B91C1C] flex items-center text-sm">
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