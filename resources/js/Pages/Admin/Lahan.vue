<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import InformasiLahan from '@/Components/Admin/Lahan/InformasiLahan.vue';
import PekerjaanLahan from '@/Components/Admin/Lahan/PekerjaanLahan.vue';


const prop = usePage().props;
const data = defineProps({
    lahan :{
        type:Object,
        default: () => ({})
    },
    pekerjaan :{
        type:Object,
        default: () => ({})
    }
});
console.log(data.pekerjaan)
</script>

<template>
<Head title="Kelola Lahan" />
<AuthenticatedLayout>
    <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">Lahan {{ prop.lahan.namalahan }}</h2>
        </template>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <InformasiLahan
        :lahan="data.lahan"/>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <PekerjaanLahan
            :pekerjaan="data.pekerjaan"/>
        </div>

        </div>
        </div>
</AuthenticatedLayout>
</template>