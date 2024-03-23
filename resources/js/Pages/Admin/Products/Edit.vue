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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-slate-700 tracking-wide">

                        <div class="flex justify-between mb-5">
                            <div class="flex font-bold">
                                <li style="list-style: none;">
                                    <Link href="/"
                                    class="text-xs mr-4 hover:text-[#0108EE] duration-150 ease-in-out"
                                    >
                                        DASHBOARD
                                    </Link>
                                </li>
                                <li>
                                    <Link href="/products"
                                    class="text-xs mr-4 hover:text-[#0108EE] duration-150 ease-in-out"
                                    >
                                        PRODUCTS
                                    </Link>
                                </li>
                                <li>
                                    <Link href="products/edit"
                                    class="text-xs text-[#0108EE]"
                                    >
                                        EDIT
                                    </Link>
                                </li>
                            </div>
                        </div>

                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="category" value="Category" />
                                <TextInput 
                                    class="mt-1 block w-full"
                                    type="category"
                                    id="category"
                                    v-model="form.category"
                                    required
                                    autofocus
                                />

                                <InputError :message="form.errors.category"/>
                            </div>
                            <div>
                                <InputLabel for="productName" value="Product Name" />

                                <TextInput 
                                    id="productName"
                                    type="productName"
                                    v-model="form.productName" 
                                    required
                                />
                                
                                <InputError :message="form.errors.productName" />
                            </div>
                            <div>
                                <InputLabel for="price" value="Price" />
                                <TextInput
                                    id="price"
                                    type="price"
                                    v-model="form.price"
                                    required
                                />

                                <InputError :message="form.errors.price" />
                            </div>
                            <div>
                                <InputLabel for="quantity" value="Quantity" />

                                <TextInput
                                    id="quantity"
                                    type="quantity"
                                    v-model="form.quantity"
                                    required
                                />

                                <InputError :message="form.errors.quantity" />
                            </div>
                            
                            <PrimaryButton class="" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                SAVE
                            </PrimaryButton>
                        </form>

                    </div>
                </div>
            </div>
    </AuthenticatedLayout>
</template>