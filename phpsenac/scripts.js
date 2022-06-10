function qualcompensa(event) {
    event.preventDefault();
    let v1 = document.getElementById('v1').value;
    let v2 = document.getElementById('v2').value;
    let v1c = parseInt(v1);
    let v2c = parseInt(v2);
    let coeficiente = 0.7;
    let etanol = 'Abasteça com Etanol!';
    let gasolina = 'Abasteça com Gasolina!';
    let resultado = (v1c / v2c);
    let total = resultado;
    resultado = total.toFixed(2);


    document.getElementById('diferenca').innerHTML = 'O resultado é ' + resultado + ' portanto';
    // document.getElementById('resultado').innerHTML = resultado;

    if (resultado < coeficiente) {
        document.getElementById('resultado').innerHTML =  etanol;
        document.getElementById("resultado").style.color = "green";
        document.getElementById("diferenca").style.color = "green";
        document.getElementById("titulo").style.color = "green";
    } else {
        document.getElementById('resultado').innerHTML =  gasolina;
        document.getElementById("resultado").style.color = "red";
        document.getElementById("diferenca").style.color = "red";
        document.getElementById("titulo").style.color = "red";
    }

    console.log(event);
}

document.getElementById('form').addEventListener('submit', qualcompensa);