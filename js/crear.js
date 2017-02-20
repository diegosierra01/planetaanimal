 incremento1 = 1;
 incremento2 = 1;
 incremento3 = 1;
 incremento4 = 1;
 incremento5 = 1;
 function crearProblema(obj){
  incremento1++;

  contenedor = document.getElementById('listProblema');

  problema = document.createElement('input');
  problema.type = 'text';
  problema.className = 'form-control';
  problema.placeholder = 'Problema '+incremento1;
  problema.required = true;
  problema.name = 'problema[]';
  espacio = document.createElement('br')
  contenedor.appendChild(problema);
  contenedor.appendChild(espacio);

}

function crearDiferencial(obj){
  incremento2++;

  contenedor = document.getElementById('listDiferencial');

  diferencial = document.createElement('input');
  diferencial.type = 'text';
  diferencial.className = 'form-control';
  diferencial.placeholder = 'Diferencial '+incremento2;
  diferencial.required = true;
  diferencial.name = 'diferencial[]';
  espacio = document.createElement('br')
  contenedor.appendChild(diferencial);
  contenedor.appendChild(espacio);

}

function crearPresuntivo(obj){
  incremento3++;

  contenedor = document.getElementById('listPresuntivo');
  
  presuntivo = document.createElement('input');
  presuntivo.type = 'text';
  presuntivo.className = 'form-control';
  presuntivo.placeholder = 'Presuntivo '+incremento3;
  presuntivo.required = true;
  presuntivo.name = 'diferencial[]';
  espacio = document.createElement('br')
  contenedor.appendChild(presuntivo);
  contenedor.appendChild(espacio);

}

function crearExamen(obj){
  incremento4++;

  contenedor = document.getElementById('listExamen');
  
  examen = document.createElement('input');
  examen.type = 'text';
  examen.className = 'form-control';
  examen.placeholder = 'Examen '+incremento4;
  examen.required = true;
  examen.name = 'examen[]';
  espacio = document.createElement('br')
  contenedor.appendChild(examen);
  contenedor.appendChild(espacio);

}

function crearVacuna(obj){
  incremento5++;

  contenedor = document.getElementById('listVacuna');


  descripcion = document.createElement('input');
  descripcion.type = 'text';
  descripcion.className = 'form-control';
  descripcion.placeholder = '*Descripción del biologo';
  descripcion.required = true;
  descripcion.name = 'descripcion[]';
  contenedor.appendChild(descripcion);

  fechaVacunacion = document.createElement('input');
  fechaVacunacion.type = 'date';
  fechaVacunacion.className = 'form-control';
  fechaVacunacion.placeholder = '*Fecha vacunación';
  fechaVacunacion.required = true;
  fechaVacunacion.name = 'fechaVacunacion[]';
  contenedor.appendChild(fechaVacunacion);

  revacunacion = document.createElement('input');
  revacunacion.type = 'text';
  revacunacion.className = 'form-control';
  revacunacion.placeholder = 'Revacunación';
  revacunacion.required = false;
  revacunacion.name = 'revacunacion[]';
  contenedor.appendChild(revacunacion);

  fechaRevacunacion = document.createElement('input');
  fechaRevacunacion.type = 'date';
  fechaRevacunacion.className = 'form-control';
  fechaRevacunacion.placeholder = 'Fecha revacunación';
  fechaRevacunacion.required = false;
  fechaRevacunacion.name = 'fechaRevacunacion[]';
  contenedor.appendChild(fechaRevacunacion);

  observacion = document.createElement('input');
  observacion.type = 'text';
  observacion.className = 'form-control';
  observacion.placeholder = 'Observación';
  observacion.required = false;
  observacion.name = 'observaciones[]';
  contenedor.appendChild(observacion);

  espacio = document.createElement('br')
  contenedor.appendChild(espacio);
}