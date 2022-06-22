var paises = [];
var total = [];

// Consumo de la API
fetch("http://localhost:8000/api/paises")
  // Then necesita una promesa, y esa promesa se resuelve con una respuesta
  .then((datos_obtenidos) => datos_obtenidos.json())

  //datos_obtenidos es el resultado de la promesa respuesta, la cual fue convertida a json
  .then(function transformar(datos_obtenidos) {
    // Iteramos sobre cada dato
    datos_obtenidos.forEach(function agregar(datos_obtenidos) {
      //Si los datos son diferentes de vacío
      if (
        datos_obtenidos.paises != undefined &&
        datos_obtenidos.poblacion != undefined
      ) {
        total.push(datos_obtenidos.paises);
        programa.push(datos_obtenidos.poblacion);
      }
    });

    // console.log("Tamaños: ",total.length," ",nacionalidad.length);

    // Variables para las gráficas
    var graf1 = {
      type: "pie",
      values: paises,
      labels: poblacion,
      textinfo: "none",
      automargin: true,
    };

    var datosGraficas = [graf1];

    // Estilos de la gráfica
    var layout = {
      title: "Poblacion por paises",
      font: {
        family: "Times New Roman",
      },
    };

    Plotly.newPlot("div1", datosGraficas, layout);
  });
