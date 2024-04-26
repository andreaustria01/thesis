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
            <div>
                asdas
            </div>
        </article>
    </AuthenticatedLayout>
</template>