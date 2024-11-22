class Persona {
  constructor(nombre, edad) {
    this.nombre = nombre;
    this.edad = edad;
  }
  saludar() {
      var lienzo = document.getElementById('content');
      var div = document.createElement('div');
      div.innerHTML = 'hola! soy ' + this.nombre;
      lienzo.appendChild(div);
  }
}

function arrancar() {
  const Diego = new Persona('Diego', 30);
  Diego.saludar();

  console.log(Diego.edad);
  
  const Pedro = new Persona('Pedro', 30);
  Pedro.saludar();
}