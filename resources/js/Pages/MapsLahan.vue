<template>
    <AuthenticatedLayout>
        <Head title="Maps" />
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">Maps {{ lahan.namalahan }}</h2>
            <BackButton/>
        </template>
        <div class="py-0">
          <div class="map-wrap">
    <div id="map"></div>
    </div>
    </div>
  </AuthenticatedLayout>
</template>
  
  <script setup>
  import maplibregl from 'maplibre-gl';
  import { shallowRef, computed, onMounted, onUnmounted, markRaw } from 'vue';
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';
  import { usePage } from '@inertiajs/vue3';
  import BackButton from '@/Components/BackButton.vue'

  const page = usePage()
  const lahan = computed(() => page.props.lahan)
  const mapContainer = shallowRef(null);
  const map = shallowRef(null);
  
  onMounted(() => {
    const long = page.props.lahan.longitude
    const lat = page.props.lahan.latitude
    const long2 = page.props.lahan.longitude_2
    const lat2 = page.props.lahan.latitude_2
    const long3 = page.props.lahan.longitude_3
    const lat3 = page.props.lahan.latitude_3
    const long4 = page.props.lahan.longitude_4
    const lat4 = page.props.lahan.latitude_4

    map.value = new maplibregl.Map({
      container: 'map',
      style: 'https://api.maptiler.com/maps/satellite/style.json?key=MqfzhjSjqI2j7xNT4YWd',
      center: [long, lat],
      zoom: 18
    });
  
    map.value.on('load', () => {
      map.value.addSource('maine', {
        'type': 'geojson',
        'data': {
          'type': 'Feature',
          'geometry': {
            'type': 'Polygon',
            'coordinates': [
              [
                [long, lat],
                [long2, lat2],
                [long3, lat3],
                [long4, lat4]
              ]
            ]
          }
        }
      });
  
      map.value.addLayer({
        'id': 'maine',
        'type': 'fill',
        'source': 'maine',
        'layout': {},
        'paint': {
          'fill-color': '#088',
          'fill-opacity': 0.8
        }
      });
  
      // Add marker
      const marker = new maplibregl.Marker()
        .setLngLat([long, lat])
        .addTo(map.value);
    });
  });
  
  onUnmounted(() => {
    if (map.value) {
      map.value.remove();
    }
  });
  </script>
  
  <style scoped>
  #map {
  position: absolute;
  width: 100%;
  height: 100%;
  }

  .map-wrap {
  position: relative;
  width: 100%;
  height: calc(100vh - 77px);
  }
</style>
  