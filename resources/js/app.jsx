import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import axios from 'axios';
import '../css/app.css';
import { createRoot } from 'react-dom/client';
import * as bootstrap from 'bootstrap';

axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.bootstrap = bootstrap;