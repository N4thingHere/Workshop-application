
const navbarToggle = document.getElementById('navbar-toggle');
const navbarMenu = document.querySelector('.navbar-menu');

navbarToggle.addEventListener('change', function() {
  if (this.checked) {
    navbarMenu.style.maxHeight = navbarMenu.scrollHeight + 'px';
  } else {
    navbarMenu.style.maxHeight = '0';
  }
});


function inserirAcompanhamento() {
  window.location.href = '../Inserir/inserirAcompanhamento.php';
}