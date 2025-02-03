<template>
  <div>
    <h1>Transações</h1>
    <form @submit.prevent="createTransaction">
      <label for="remetente_id">Remetente</label>
      <select v-model="transacao.remetente_id" required>
        <option v-for="cliente in clientes" :key="cliente.id" :value="cliente.id">{{ cliente.nome }}</option>
      </select>

      <label for="destinatario_id">Destinatário</label>
      <select v-model="transacao.destinatario_id" required>
        <option v-for="lojista in lojistas" :key="lojista.id" :value="lojista.id">{{ lojista.nome }}</option>
      </select>

      <label for="valor">Valor</label>
      <input type="number" v-model="transacao.valor" required />

      <button type="submit">Criar Transação</button>
    </form>
    <ul>
      <li v-for="transacao in transacoes" :key="transacao.id">
        {{ transacao.data }} - {{ transacao.remetente.nome }} -> {{ transacao.destinatario.nome }}: R$ {{ transacao.valor }}
      </li>
    </ul>
  </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: 'TransacoesList',
    data() {
      return {
        clientes: [],
        lojistas: [],
        transacoes: [],
        transacao: {
          remetente_id: null,
          destinatario_id: null,
          valor: 0
        }
      };
    },
    mounted() {
      this.fetchClientes();
      this.fetchLojistas();
      this.fetchTransacoes();
    },
    methods: {
      fetchClientes() {
        axios.get('/clientes')
          .then(response => {
            this.clientes = response.data;
          });
      },
      fetchLojistas() {
        axios.get('/lojistas')
          .then(response => {
            this.lojistas = response.data;
          });
      },
      fetchTransacoes() {
        axios.get('/transacoes')
          .then(response => {
            this.transacoes = response.data;
          });
      },
      createTransaction() {
        axios.post('/transacoes', this.transacao)
          .then(
            this.fetchTransacoes()
          );
      }
    }
  };
</script>