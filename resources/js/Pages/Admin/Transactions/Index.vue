<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

// Show Product
const props = defineProps({
    products: {
        type: Object,
        default: () => ({}),
    },
    pastries: {
        type: Object,
        default: () => ({}),
    }
});

// Logic
const incrementQuantity = (product) => {
    product.quantity++;
};

const decrementQuantity = (product) => {
    if (product.quantity > 0) {
        product.quantity--;
    }
};

</script>

<template>
    <Head title="Transactions" />
    
    <AuthenticatedLayout>
        <article class="flex-1 w-[50%] px-5">
            <!-- Left Section -->
            <div class="col-span-8 h-full">
            <!-- Transaction Title -->
                <div class="dark:bg-[#1E293B] rounded-xl shadow-md p-6 mb-6 max-h-full overflow-auto">
                    <h2 class="font-bold">Transactions</h2>
                    <hr class="my-5 border-t border-gray-200" />
        
                    <!-- Categories -->
                    <h3 class="text-lg font-bold mb-3">Categories</h3>
                    <div class="bg-[#374151] p-5 rounded-lg flex overflow-x-auto space-x-4 mb-6">
                        <PrimaryButton>All</PrimaryButton>
                        <PrimaryButton>Pastries</PrimaryButton>
                        <PrimaryButton>Hotbakes</PrimaryButton>
                        <PrimaryButton>Loaves</PrimaryButton>
                        <PrimaryButton>Assorted Bread</PrimaryButton>
                    </div>
        
                    <div>
                        <h3 class="my-5"> Pastries</h3>
                        <!-- Transaction List -->
                        <div class="flex gap-4 w-full overflow-auto">
                            <!-- Transaction Cards -->
                            <div class="flex-none bg-[#374151] rounded-xl shadow-md p-6"
                                v-for="product in pastries" :key="product.id">
                                <h4>{{ product.productName }}</h4>
                                <p class="flex items-center justify-between w-24">
                                    <button class="bg-[#0109F4] rounded-lg" @click="incrementQuantity(product)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                                        </svg>
                                    </button>
                                    
                                    ₱{{ product.quantity }}

                                    <button class="bg-[#0109F4] rounded-lg" @click="decrementQuantity(product)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                        </svg>
                                    </button>
                                </p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </article>

        <!-- right bar -->
        <div class="w-[25%] max-h-screen rounded-lg p-5 dark:bg-[#1E293B]">
            <div class="flex flex-col">
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

                    <div class="my-5 h-[0.1px] dark:bg-[#374151]" />

                    <h5 class="flex justify-end"> April 13 2024 </h5>
                </div>

                <div class="flex flex-col justify-between h-full">
                    <!-- Transaction -->
                    <div class="flex flex-col space-y-4">
                        <div class="bg-white rounded-xl shadow-md p-4">
                            <h5 class="text-md font-bold text-gray-800">Brownies</h5>
                            <h5 class="text-md font-bold text-gray-800">P150</h5>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-4">
                            <h5 class="text-md font-bold text-gray-800">Brownies</h5>
                            <h5 class="text-md font-bold text-gray-800">P150</h5>
                        </div>
                    </div>

                    <!-- Middle -->
                    <div class="">
                        <div class="p-5 rounded-2xl dark:bg-[#374151]">
                            asdasda
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>