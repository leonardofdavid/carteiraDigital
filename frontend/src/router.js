import { createRouter, createWebHistory } from 'vue-router';
import CarteiraDigital from './components/CarteiraDigital.vue';
import ClientesList from './components/ClientesList.vue';
import LojistasList from './components/LojistasList.vue';
import TransacoesList from './components/TransacoesList.vue';

const routes = [
  {
    path: '/',
    name: 'CarteiraDigital',
    component: CarteiraDigital
  },
  {
    path: '/clientes',
    name: 'ClientesList',
    component: ClientesList
  },
  {
    path: '/lojistas',
    name: 'LojistasList',
    component: LojistasList
  },
  {
    path: '/transacoes',
    name: 'TransacoesList',
    component: TransacoesList
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;