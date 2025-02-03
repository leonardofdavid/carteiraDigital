<template>
  <div>
    <h1>Lojistas</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="lojista in lojistas" :key="lojista.id">
          <td>{{ lojista.id }}</td>
          <td>{{ lojista.nome }}</td>
          <td>{{ lojista.email }}</td>
          <td>{{ lojista.saldo }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: 'LojistasList',
    data() {
      return {
        lojistas: []
      };
    },
    mounted() {
      this.fetchLojistas();
    },
    methods: {
      fetchLojistas() {
        axios.get('/lojistas')
          .then(response => {
            this.lojistas = response.data;
          });
      }
    }
  };
</script>
