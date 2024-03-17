<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Dropdown2nd from '@/Components/Dropdown2nd.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head } from '@inertiajs/vue3';
import {Link, useForm, router } from '@inertiajs/vue3';

defineProps({
    pastries: {
        type: Object,
        default: () => ({}),
    },
    hotbakes: {
        type: Object,
        default:() => ({}),
    }
});
</script>

<template>
    <Head title="Products" />
    
    <AuthenticatedLayout>
        <div class="">
            <div class="mx-auto px-8">
                <div class="bg-white overflow-hidden shadow-sm rounded-lg h-screen">
                    <div class="p-5 px-7 text-[#3F3F46] font-medium text-[30px]">
                        Products

                        <div class="text-black text-xl grid gap-4">
                            <div>
                                <!-- Pastries -->
                                <Dropdown2nd>
                                    <template #trigger>
                                        <button
                                            type="button"
                                            class="inline-flex justify-between block w-full ps-6 py-2 rounded-xl bg-[#D9D9D9] hover:bg-neutral-400 transition duration-150 ease-in-out"
                                            >
                                            Pastries

                                            <svg
                                                class="mx-6 h-7 w-auto"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <table class="w-full table-auto border-collapse">
                                            <tr v-for="product in pastries" :key="pastries.id"
                                            class=""
                                            > 
                                                {{ product.productName }}
                                            </tr>
                                        </table>
                                    </template>
                                </Dropdown2nd>
                            </div>

                            <!-- HOTBAKES -->
                            <div>
                                <Dropdown2nd>
                                    <template #trigger>
                                        <button
                                            type="button"
                                            class="inline-flex justify-between block w-full ps-6 py-2 rounded-xl bg-[#D9D9D9] hover:bg-neutral-400 transition duration-150 ease-in-out"
                                            >
                                            Hotbakes

                                            <svg
                                                class="mx-6 h-7 w-auto"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <table class="w-full table-auto border-collapse flex justify-center">
                                            <thead>
                                                <tr class="grid grid-cols-4">
                                                    <td v-for="product in hotbakes" :key="hotbakes.id"> 
                                                        {{ product.productName }}
                                                    </td>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                    </template>
                                </Dropdown2nd>
                            </div>

                            <!-- Loaves -->
                            <div>
                                <Dropdown2nd>
                                    <template #trigger>
                                        <button
                                            type="button"
                                            class="inline-flex justify-between block w-full ps-6 py-2 rounded-xl bg-[#D9D9D9] hover:bg-neutral-400 transition duration-150 ease-in-out"
                                            >
                                            Loaves

                                            <svg
                                                class="mx-6 h-7 w-auto"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <div class="mx-12">
                                            asdas
                                        </div>
                                    </template>
                                </Dropdown2nd>
                            </div>

                            <!-- Assorted Bread -->
                            <div>
                                <Dropdown2nd>
                                    <template #trigger>
                                        <button
                                            type="button"
                                            class="inline-flex justify-between block w-full ps-6 py-2 rounded-xl bg-[#D9D9D9] hover:bg-neutral-400 transition duration-150 ease-in-out"
                                            >
                                            Assorted bread

                                            <svg
                                                class="mx-6 h-7 w-auto"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <div class="mx-12">
                                            asdas
                                        </div>
                                    </template>
                                </Dropdown2nd>
                            </div>

                            <!-- Pasalubong -->
                            <div>
                                <Dropdown2nd>
                                    <template #trigger>
                                        <button
                                            type="button"
                                            class="inline-flex justify-between block w-full ps-6 py-2 rounded-xl bg-[#D9D9D9] hover:bg-neutral-400 transition duration-150 ease-in-out"
                                            >
                                            Pasalubong

                                            <svg
                                                class="mx-6 h-7 w-auto"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <div class="mx-12">
                                            asdas
                                        </div>
                                    </template>
                                </Dropdown2nd>
                            </div>

                            <!-- Cakes -->
                            <div>
                                <Dropdown2nd>
                                    <template #trigger>
                                        <button
                                            type="button"
                                            class="inline-flex justify-between block w-full ps-6 py-2 rounded-xl bg-[#D9D9D9] hover:bg-neutral-400 transition duration-150 ease-in-out"
                                            >
                                            Cakes

                                            <svg
                                                class="mx-6 h-7 w-auto"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </template>

                                    <template #content>
                                        <div class="mx-12">
                                            asdas
                                        </div>
                                    </template>
                                </Dropdown2nd>
                            </div>
                        </div>

                        <Link href="products/create">Create</Link>

                        <tr v-for="product in products" :key="products"> 
                            <td v-if="product === 'Pastries'">
                                {{ product.productName }}
                            </td>
                        </tr>

                        

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>