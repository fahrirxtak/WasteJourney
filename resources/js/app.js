import './bootstrap';
import 'animate.css';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { Chart, registerables } from 'chart.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
Chart.register(...registerables);

Alpine.start();
AOS.init();

