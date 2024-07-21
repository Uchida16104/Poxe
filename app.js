function jsonOutput() {
  let request = new XMLHttpRequest();
  request.open('GET', './script.json');
  request.send();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      let json = JSON.parse(request.responseText);
      let html = '';
      let modal = '';
      for (let i = 0; i < json.length; i++) {
        if (json[i].display === 'popup') {
          let htmlParts =
            '<div class="p-parts js-modalOpen" aria-expanded="false" aria-controls="modal_' +
            (i + 1) +
            '">' +
            '<figure><img src="' +
            json[i].image +
            '" alt=""></figure>' +
            '<p class="p-parts__title">' +
            json[i].title +
            '</p>' +
            '<div>';
          html += htmlParts;
          let modalParts =
            '<div class="p-modal" id="modal_' +
            (i + 1) +
            '" aria-hidden="true">' +
            '<div class="p-modal__wrap">' +
            '<button class="js-modalClose" aria-controls="modal_' +
            (i + 1) +
            '"></button>' +
            '<h3 class="p-modal__title">' +
            json[i].title +
            '</h3>' +
            '<figure class="p-modal__image"><img src="' +
            json[i].image +
            '" alt="' +
            json[i].title +
            '"></figure>' +
            '<div class="p-modal__text">' +
            '<p>' +
            json[i].text +
            '</p>' +
            '<a class="link" href="' +
            json[i].url +
            '" target="_blank">Jump to the link' +
            '</a>' +
            '</div>' +
            '</div>' +
            '</div>';
          modal += modalParts;
        } else {
          let htmlParts =
            '<div class="p-parts">' +
            '<a href="' +
            json[i].url +
            '" target="_blank">' +
            '<figure><img src="' +
            json[i].image +
            '" alt=""></figure>' +
            '<p class="p-parts__title">' +
            json[i].title +
            '</p>' +
            '</a>' +
            '</div>';
          html += htmlParts;
        }
      }      document.getElementById('container').innerHTML = html;
      document.getElementById('modal').innerHTML = modal;
    }
  };
}
jsonOutput();
