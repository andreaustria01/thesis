<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const porps = defineProps({
    products: {
        type: Object,
        default: () => ({}),
    },
    // pastries: {
    //     type: Object,
    //     default: () => ({}),
    // },
    // hotbakes: {
    //     type: Object,
    //     default:() => ({}),
    // }
});

const form = useForm({});

function destroy(id) {
    if (confirm("Sure ka ba idedelete mo? Di na to mababalik tanginamo ahh")) {
        form.delete(route('products.destroy', id));
    }
}
</script>

<template>
    <Head title="Products" />
    
    <AuthenticatedLayout>
        <article class="flex-1 w-full p-5">
            <!-- Top -->
            <div class="flex justify-between">
                <h2> Products </h2>
                <Link href="products/create"
                    class="p-2 px-3 font-bold border border-[#0108EE] rounded-xl text-xs text-[#0108EE]
                    hover:bg-[#0108EE] hover:text-white duration-150 ease-in-out"
                >
                    CREATE
                </Link>
            </div>
            <div class="my-5 w-full h-[0.1px] dark:bg-white " />

            <!-- Bottom Table -->
            <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="text-xs uppercase ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Product Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr v-for="product in products" :key="products.id">
                                        <th scope="row" class="px-6 py-4 font-medium text-white">
                                            {{ product.productName }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ product.category }}
                                        </td>
                                        <td class="px-6 py-4">
                                            ₱{{  product.price }}
                                        </td>
                                        <td class="px-6 py-4">
                                            x{{ product.quantity }}
                                        </td>
                                        <td class="px-6 py-4 flex">
                                            <Link 
                                                class="mr-3 text-[#0108EE]"
                                                :href="route('products.edit', product.id)"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>
                                            </Link>
                                            <button class="ml-3 text-[#B91C1C]"
                                                @click="destroy(product.id)"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

        </article>
    </AuthenticatedLayout>
</template>