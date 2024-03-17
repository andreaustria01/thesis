<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'text-[#F7C849]'
        : 'text-white hover:text-[#F7C849]'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
