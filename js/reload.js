
function actualizar(){
	location.reload(true);
}
	//Función para actualizar cada 10 segundos(10000 milisegundos)
	setInterval("actualizar()",10000);


function clearCookie(name, domain, path){
	var domain = domain || document.domain;
    var path = path || "/";
    document.cookie = name + "=; expires=" + +new Date + "; domain=" + domain + "; path=" + path;
};