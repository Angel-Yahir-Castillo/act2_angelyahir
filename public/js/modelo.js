// public/js/modelo.js

const modelFileUrl = '/modelo-json';
import mljs from '../../node_modules/mljs';



fetch(modelFileUrl)
  .then(response => response.json())
  .then(modelData => {
    // Crear el modelo de Random Forest Regressor en JavaScript
    const model = new mljs.RandomForestRegression(modelData);

    // Datos de entrada para la predicción
    const inputData = [[1,2,28.5,26,1,1,0,0,0]];

    // Realizar una predicción
    const prediction = model.predict(inputData);

    // Utilizar el resultado de la predicción
    console.log('Predicción:', prediction);
  });
