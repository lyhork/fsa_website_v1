import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

import persist from '@alpinejs/persist';

// window.Alpine = Alpine;
Alpine.plugin(persist)
// Alpine.start();
// Livewire.start()
