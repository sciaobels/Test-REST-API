document.getElementById("inserimento").addEventListener("submit", postScusa);

async function postScusa(e){
  console.log("1");
  e.preventDefault();
  let scusa = document.getElementById("scusa").value;
  let tipo = document.getElementById("tipoScusa").value;

  console.log(scusa);
  console.log(tipo);

  try{
    let response;
    switch(tipo){
      case "compiti":
        console.log("2")
        esponse = await fetch("http://localhost/src/API/index.php/postCompiti", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            text: scusa
          })
        });

      const result = await response.json();
      break;
      case "lavoro":
        response = await fetch("http://localhost/src/API/index.php/postCompiti", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            text: scusa
          })
        });

      break;
      case "uscire":
        response = await fetch("http://localhost/src/API/index.php/postCompiti", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            text: scusa
          })
        });
      break;
    }
  }
  catch(errore)
  {
    
  }



}

