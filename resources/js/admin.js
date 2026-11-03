/**
 * Entry point JavaScript KHUSUS admin.
 * Dimuat hanya oleh resources/views/templates/admin.blade.php.
 *
 * JANGAN import file ini dari resources/js/app.js (bundle publik).
 * FullCalendar sengaja tidak diikutkan (halaman Calendar tidak dipakai).
 */
import './bootstrap';

import { createPopper } from '@popperjs/core';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import ApexCharts from 'apexcharts';

import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';

// Plugin Alpine untuk submenu sidebar.
Alpine.plugin(collapse);

window.Alpine = Alpine;
window.createPopper = createPopper;
window.ApexCharts = ApexCharts;
window.flatpickr = flatpickr;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // Peta persebaran pelanggan (dashboard e-commerce).
    if (document.querySelector('#mapOne')) {
        import('./components/map').then((module) => module.initMap());
    }

    // Chart dashboard e-commerce.
    if (document.querySelector('#chartOne')) {
        import('./components/chart/chart-1').then((module) => module.initChartOne());
    }
    if (document.querySelector('#chartTwo')) {
        import('./components/chart/chart-2').then((module) => module.initChartTwo());
    }
    if (document.querySelector('#chartThree')) {
        import('./components/chart/chart-3').then((module) => module.initChartThree());
    }
});
