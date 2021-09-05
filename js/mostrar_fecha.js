function mostrarFecha(){
	let dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
	let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	let hoy;
  let dia;
	let mes;
	let anio;
	let fecha = new Date();
	hoy = fecha.getDay();
	dia = fecha.getDate();
	mes = fecha.getMonth();
	anio = fecha.getFullYear();
	document.getElementById("fecha").innerHTML = dias[hoy] + ", " + dia + " de " + meses[mes] + " del " + anio;
}

window.addEventListener("load", mostrarFecha);
