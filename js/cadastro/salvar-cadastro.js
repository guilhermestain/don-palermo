function salvarCadastro  () {
  const usuario = {
    nome: document.getElementById('nome').value,
    sobrenome: document.getElementById('sobrenome').value,
    data_nascimento: document.getElementById('data_nascimento').value,
    telefone: document.getElementById('telefone').value,
    cpf: document.getElementById('cpf').value,
    rua: document.getElementById('rua').value,
    numero: document.getElementById('numero').value,
    complemento: document.getElementById('complemento').value,
    bairro: document.getElementById('bairro').value,
    cidade: document.getElementById('cidade').value,
    uf: document.getElementById('uf').value,
    username: document.getElementById('username').value,
    email: document.getElementById('email').value,
    password: document.getElementById('password').value,
    password: document.getElementById('password_2').value,
  }
  console.log(usuario);
};