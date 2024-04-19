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
                asdas
            </div>
        </article>
    </AuthenticatedLayout>
</template>