<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});

const back = () => {
    history.back()
};
</script>

<template>
     <button
        :type="type"
        class="mt-4 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
        @click="back"
    >
    <i class="fa-solid fa-arrow-left"></i> Kembali
    </button>
</template>