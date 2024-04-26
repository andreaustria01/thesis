<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
            <article class="flex-1 w-full p-5">
                <div class="flex gap-5">
                    <!-- Total Sales -->
                    <div class="flex p-5 items-center rounded-2xl dark:bg-[#1E293B]">
                        <div class="mr-6 rounded-full p-3 dark:bg-[#171717]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#0109F4" class="bi bi-coin text-bold" viewBox="0 0 16 16">
                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                            </svg>
                        </div>
                        <div>
                            <h4>
                                Today's Sales
                            </h4>
                            <h2>
                                Currency
                            </h2>
                        </div>
                    </div>

                    <!-- Total Products -->
                    <div class="flex p-5 items-center rounded-2xl dark:bg-[#1E293B]">
                        <div class="mr-6 rounded-full p-3 dark:bg-[#171717]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#0109F4" class="bi bi-box text-bold" viewBox="0 0 16 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>
                                Total Products
                            </h4>
                            <h2>
                                Currency
                            </h2>
                        </div>
                    </div>

                    <!-- Refund/Cancelled -->
                    <div class="flex p-5 items-center rounded-2xl dark:bg-[#1E293B]">
                        <div class="mr-6 rounded-full p-3 dark:bg-[#171717]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#0109F4" class="bi bi-coin text-bold" viewBox="0 0 16 16">
                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                            </svg>
                        </div>
                        <div>
                            <h4>
                                Refund/Cancelled
                            </h4>
                            <h2>
                                Currency
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="mt-5 p-5 rounded-2xl dark:bg-[#1E293B]">
                    <!-- Template -->
                </div>

            </article>

            <!-- <div class="w-[30%] rounded-lg p-5 dark:bg-[#1E293B]">
                adsas
            </div> -->
    </AuthenticatedLayout>
</template>
