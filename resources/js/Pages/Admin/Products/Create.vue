<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Modal2 from '@/Components/Modal2.vue';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    category: '',
    productName: '',
    price: '',
    quantity: '',
});

const submit = () => {
    form.post(route("products.store"));
}

</script>

<template>
    <Head title="Create" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submit">
                            <div>
                                <label for="category"> Category </label>
                                <input type="category" v-model="form.category">
                            </div>
                            <div>
                                <label for="productName"> ProductName </label>
                                <input type="productName" v-model="form.productName">
                            </div>
                            <div>
                                <label for="price"> price </label>
                                <input type="price" v-model="form.price">
                            </div>
                            <div>
                                <label for="quantity"> quantity </label>
                                <input type="quantity" v-model="form.quantity">
                            </div>
                            
                            <button type="submit"> Submit </button>
                        </form>

                        

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>