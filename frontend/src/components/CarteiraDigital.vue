<template>
  <div>
    <h1>Escolha uma opção</h1>
    <div class="buttons">
      <router-link to="/clientes">
        <button>Clientes</button>
      </router-link>
      <router-link to="/lojistas">
        <button>Lojistas</button>
      </router-link>
      <router-link to="/transacoes">
        <button>Transações</button>
      </router-link>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'CarteiraDigital',
  };
</script>

<style scoped>
  .buttons {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
  }

  button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
  }

  button:hover {
    background-color: #45a049;
  }
</style>
