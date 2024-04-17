<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { GoogleMap, Marker } from 'vue3-google-map';

const center = { lat: 14.598144, lng: 120.999117 }
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in! Tangina mo HAHAHAHAH
                        AHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAAHHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHA
                        AHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAAHHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHA
                        <div class="mt-14">
                            <!-- DUMP MAP -->

                            <GoogleMap
                            api-key="AIzaSyCAqdwRPpTtDGc6lWZKlSO0EPgkAKRo-8o"
                            v="weekly"
                            style="width: 100%; height: 500px"
                            :center="center"
                            :zoom="15"
                            >
                                <Marker :options="{ position: center }" />
                            </GoogleMap>
                        </div>
                    </div>
                </div>
            </div>
    </AuthenticatedLayout>
</template>
