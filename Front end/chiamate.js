output = document.getElementById("output");



async function getScuola() {
  try {
    const response = await fetch("http://localhost/src/API/index.php/scuola");
    const data = await response.json();

    output.innerText = data;
  } catch (errore) {
    console.error("Errore:", errore);
  }
}

async function getLavoro() {
  try {
    const response = await fetch("http://localhost/src/API/index.php/lavoro");
    const data = await response.json();

    output.innerText = data;
  } catch (errore) {
    console.error("Errore:", errore);
  }
}

async function getUscire() {
  try {
    const response = await fetch("http://localhost/src/API/index.php/uscire");
    const data = await response.json();

    output.innerText = data;
  } catch (errore) {
    console.error("Errore:", errore);
  }
}

