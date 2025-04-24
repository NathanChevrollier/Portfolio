document.addEventListener('DOMContentLoaded', function () {
  var btn = document.getElementById('btn-synthese');
  if (btn) {
    btn.addEventListener('click', function(e) {
      var target = document.getElementById('competences');
      if (target) {
        e.preventDefault();
        target.scrollIntoView({behavior: 'smooth'});
        // Retirer le hash de l'URL après scroll pour que le bouton reste cliquable
        if (window.location.hash === '#competences') {
          history.replaceState(null, null, window.location.pathname);
        }
      }
    });
  }
});
