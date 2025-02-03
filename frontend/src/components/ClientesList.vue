<template>
    <div>
      <h1>Clientes</h1>
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
          <tr v-for="cliente in clientes" :key="cliente.id">
            <td>{{ cliente.id }}</td>
            <td>{{ cliente.nome }}</td>
            <td>{{ cliente.email }}</td>
            <td>{{ cliente.saldo }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

  <script>
    import axios from 'axios';
    export default {
      name: 'ClientesList',
      data() {
        return {
          clientes: []
        };
      },
      mounted() {
        this.fetchClientes();
      },
      methods: {
        fetchClientes() {
          axios.get('/clientes')
            .then(response => {
              this.clientes = response.data;
            });
        }
      }
    };
  </script>

<style scoped>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 8px;
    border: 1px solid #ddd;
  }

  th {
    background-color: #f4f4f4;
  }
</style>