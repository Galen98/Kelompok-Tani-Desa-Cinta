<script setup>
import ResponsiveNavLink from '../ResponsiveNavLink.vue';
</script>

<template>
<ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                Home Page
</ResponsiveNavLink>
</template>