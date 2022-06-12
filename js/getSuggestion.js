async function getSuggestion(name) {
  if (name.length > 0) {
    const dados = await fetch(
      // `http://localhost:3333/suggestions?name_like=${name}&_limit=5`
      `https://api.github.com/users/${name}`
    )
    const resposta = await dados.json();

    var html = "<div>";
    for (i = 0; i < resposta.name.length; i++) {
      html += `<div class='modal_li'>
      <img src='/desenv/img/location.svg' alt='icon_location'/>
      <div>
      <p id='modal_name'>${resposta.name}</p>
      <p id='modal_country'> ${resposta.login}</p></div>
      </div>`;
    }
    html += "</div>";
    document.getElementById("modal").innerHTML = html;
  } else {
    document.getElementById("modal").innerHTML = "Não foi possível localizar";
  }
}

function visiblemodal() {
  document.getElementById("modal").style.display = "inline";
}

function invisibleModal() {
  document.getElementById("modal").style.display = "none";
}