<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link, Head, useForm } from '@inertiajs/vue3';

const props = defineProps ({
    product: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    category: props.product.category,
    productName: props.product.productName,
    price: props.product.price,
    quantity: props.product.quantity,
});

const submit = () => {
    form.put(route("products.update", props.product.id));
};

</script>

<template>
    <Head title="Edit" />

    <AuthenticatedLayout>
        <article class="flex-1 w-full px-5">
            <!-- Top -->
            <div class="bg-[#1E293B] h-full rounded-lg p-5 overflow-auto">
                <h2 class="text-white">Products</h2>
                <div class="my-5 w-full h-[0.1px] dark:bg-white"></div>
                
                <!-- Form -->
                <form @submit.prevent="submit">
                    
                    <!-- Top Bar -->
                    <div class="flex justify-between my-10">
                        <div class="flex items-center gap-5">
                            <Link href="/products">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short hover:text-white bg-[#0108EE] rounded-lg duration-150 ease-in-out" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                                </svg>
                            </Link>
                            <h2 class="text-white">Edit Product</h2>
                        </div>

                        <div>
                            <Link href="/products" class="text-white">Cancel</Link>
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Save</PrimaryButton>
                        </div>
                    </div>

                    <!-- Form Fields -->
                    <div>
                        <InputLabel for="productName" class="mb-2 text-white">Product Name</InputLabel>
                        <TextInput class="mt-1 block w-[50%] border-[#374151] bg-[#1E293B] text-white" id="productName" type="text" v-model="form.productName" required />
                        <InputError :message="form.errors.productName" />
                    </div>

                    <div>
                        <InputLabel for="category" class="mt-5 text-white">Category</InputLabel>
                        <select class="mt-1 block w-[50%] border-[#374151] bg-[#1E293B] text-white" id="category" v-model="form.category" required>
                            <option disabled value="">Select Category</option>
                            <option value="PASTRIES">Pastries</option>
                            <option value="HOTBAKES">Hotbakes</option>
                            <option value="LAOVES">Loaves</option>
                            <option value="ASSORTED BREAD">Assorted Bread</option>
                            <option value="PASALUBONG">Pasalubong</option>
                            <option value="CAKES">Cakes</option>
                        </select>
                        <InputError :message="form.errors.category"/>
                    </div>

                    <div>
                        <InputLabel for="price" class="mt-5 text-white">Price</InputLabel>
                        <TextInput class="mt-1 block w-[50%] border-[#374151] bg-[#1E293B] text-white" id="price" type="number" v-model="form.price" required />
                        <InputError :message="form.errors.price" />
                    </div>

                    <div>
                        <InputLabel for="quantity" class="mt-5 text-white">Quantity</InputLabel>
                        <TextInput class="mt-1 block w-[50%] border-[#374151] bg-[#1E293B] text-white" id="quantity" type="number" v-model="form.quantity" required />
                        <InputError :message="form.errors.quantity" />
                    </div>

                    <div>
                        <InputLabel for="criticalLevel" class="mt-5 text-white">Critical Level</InputLabel>
                        <TextInput class="mt-1 block w-[50%] border-[#374151] bg-[#1E293B] text-white" id="criticalLevel" type="number" v-model="form.criticalLevel" required />
                        <InputError :message="form.errors.criticalLevel" />
                    </div>
                </form>
            </div>
        </article>
    </AuthenticatedLayout>
</template>