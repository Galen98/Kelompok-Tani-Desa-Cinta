<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref, computed } from 'vue';
import { format } from "date-fns";
import DangerButton from '@/Components/DangerButton.vue';

const prop = defineProps({
    pekerjaan :{
        type:Object,
        default: () => ({})
    }
});

const formpekerjaan = useForm({
    'id' : prop.pekerjaan.id
});
console.log(prop.pekerjaan)
</script>

<template>
      <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">Daftar Pekerjaan Lahan</h2>
            <div class="mt-3">
                 <InputLabel for="deskripsipekerjaan" value="Deskripsi Pekerjaan" />
                    <div v-for="(item, index) in prop.pekerjaan" :key="index" class="mt-3">
                        <TextInput
                                id="deskripsipekerjaan"
                                type="text"
                                class="mt-1 block w-full capitalize"
                                autofocus
                                autocomplete="deskripsipekerjaan"
                                placeholder="Masukan deskripsi pekerjaan"
                                v-model="formpekerjaan.id"
                            />
                    </div>
                    </div>
        </header>
      </section> 
</template>