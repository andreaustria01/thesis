<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    products: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <Head title="Transactions" />
    
    <AuthenticatedLayout>
        <article class="flex-1 w-full p-5">
            <div class="p-5 rounded-2xl dark:bg-[#1E293B]">
                <h2> Transactions </h2>
                <div class="my-5 w-full h-[0.1px] dark:bg-white" />
                <!-- Categories -->
                <h3> Categories </h3>
                <div class="flex mt-5 p-5 rounded-2xl overflow-x-auto dark:bg-[#374151]">
                    <div class="flex-none">
                        <PrimaryButton>
                            All
                        </PrimaryButton>
                        <PrimaryButton class="ml-5">
                            Pastries
                        </PrimaryButton>
                        <PrimaryButton class="ml-5">
                            Hotbakes
                        </PrimaryButton>
                        <PrimaryButton class="ml-5">
                            Loaves
                        </PrimaryButton>
                        <PrimaryButton class="ml-5">
                            Assorted Bread
                        </PrimaryButton>
                        <PrimaryButton class="ml-5">
                            Assorted Bread
                        </PrimaryButton>
                    </div>
                </div>

                
                <div class="overflow-auto">
                    <div class="flex bg-[#374151]">
                        sssdas
                    </div>
                </div>
            </div>
        </article>

        <!-- right bar -->
        <div class="w-[25%] rounded-lg p-5 dark:bg-[#1E293B]">
            <div class="flex flex-col h-full">
                <div>
                    <div class="flex items-center justify-between p-5">
                        <h4> Current Order </h4>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </div>

                    <div class="my-5 h-[0.1px] dark:bg-white " />

                    <h4 class="flex justify-end"> April 13 2024 </h4>
                </div>

                <div class="flex flex-col justify-between gap-5 h-full mt-5">
                    <!-- Top -->
                    <div class="p-5 rounded-2xl dark:bg-[#374151]">
                        <div class="flex-none overflow-y-auto max-h-[20vh]">

                            <div class="p-5 rounded-2xl dark:bg-[#4B5563]">
                                <h5> Brownies </h5>
                                <h5> P150 </h5>
                            </div>
                                <div class="p-5 rounded-2xl dark:bg-[#4B5563] mt-5">
                                <h5> Brownies </h5>
                                <h5> P150 </h5>
                            </div>
                            <div class="p-5 rounded-2xl dark:bg-[#4B5563]">
                                <h5> Brownies </h5>
                                <h5> P150 </h5>
                            </div>
                                <div class="p-5 rounded-2xl dark:bg-[#4B5563] mt-5">
                                <h5> Brownies </h5>
                                <h5> P150 </h5>
                            </div>
                        </div>
                    </div>

                    <!-- Middle -->
                    <div>
                        <div class="p-5 rounded-2xl dark:bg-[#374151]">
                            asdasda
                        </div>
                    </div>

                    <!-- Bottom -->
                    <div class="flex p-5 rounded-2xl dark:bg-[#374151]">
                        <div>
                            <div class="flex">
                                <PrimaryButton>
                                    Cash
                                </PrimaryButton>
                                <PrimaryButton>
                                    Check
                                </PrimaryButton>
                                <PrimaryButton>
                                    E-Wallet
                                </PrimaryButton>
                            </div>

                            <div class="justify-center">
                                <PrimaryButton>
                                    Cash
                                </PrimaryButton>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>