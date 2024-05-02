<script setup>
import { Head, Link, usePage, useForm, router} from '@inertiajs/vue3';
import { computed, onMounted } from 'vue';
import Swal from 'sweetalert2';
import { format } from "date-fns";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import LahanPekerjaan from '@/Components/Admin/LahanPekerjaan.vue';

const data = usePage().props;
const prop = defineProps({
    lahan :{
        type:Object,
        default: () => ({})
    }
})
console.log(prop.lahan);
</script>

<template>
    <Head title="Kelola Lahan" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Lahan {{ data.pemilik.name }}</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link
                        :href="`/dashboard/tambah-lahan/${data.pemilik.id}`"
                        >
                        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <i class="fa-solid fa-plus"></i> Tambah Lahan
                        </button>
                        </Link>
                        <LahanPekerjaan
                        :lahan="prop.lahan"/>
                        </div>
                    </div>
                </div>
            </div>
    </AuthenticatedLayout>
</template>