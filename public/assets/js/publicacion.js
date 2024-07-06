function openModal() {
    document.getElementById('modal-bg').style.display = 'flex';
  }

  function closeModal() {
    document.getElementById('modal-bg').style.display = 'none';
  }
  function mostrarComentario() {
    var comentarioDiv = document.querySelector('.comentario');
    comentarioDiv.style.display = 'block'; // Mostra a div de comentário
}

function adicionarComentario() {
    var textoComentario = document.querySelector('#comentario textarea').value;
    // Aqui você pode adicionar o código para enviar o comentário para algum lugar, como um servidor ou exibir na página
    console.log('Comentário adicionado:', textoComentario);
}