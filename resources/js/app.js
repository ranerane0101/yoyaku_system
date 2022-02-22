Vue.component('reservation-component',require('./components/ReservationComponent.vue').default);

require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.luxon = require('luxon');
