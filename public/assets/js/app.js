var app = {
  nbLike: 0,

  init: function() {
    console.log('init');

    var likeElement = document.querySelector('.like');
    likeElement.addEventListener('click', app.handleLike);
  },
  handleLike: function() {
    console.log('like');
    app.nbLike++;
    var likeElement = document.querySelector('.like-cpt span');
    likeElement.textContent = app.nbLike;
  }
};

document.addEventListener('DOMContentLoaded', app.init);
