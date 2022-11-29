importScripts("https://storage.googleapis.com/workbox-cdn/releases/4.0.0/workbox-sw.js");
//importar cdn de workbox

if (workbox) {
	console.log("Workbox esta cargado");
	workbox.precaching.precacheAndRoute([]);

	//cache de imagenes en la carpeta public
	workbox.routing.registerRoute(
		/(.*)others(.*)\.(?:png|gif|jpg)/,
		new workbox.strategies.CacheFirst({
			cacheName: "images",
			plugins: [
					new workbox.expiration.Plugin({
						maxEntries: 50,
						maxAgeSeconds: 30 * 24 * 60 * 60,
					})
				]
		})
	);
	
	//hacemos que el contenido en js y css sean rapidos y devuelvan los assets de la cache mientras se asegura de que se actualicen en segundo plano para el proximo uso.
	workbox.routing.registerRoute(
	   /.*\.(?:css|js|scss)/,
	   //Usamos el cache y lo actualizamos en 2do plano
	   new workbox.strategies.StaleWhileRevalidate({
	       cacheName:"assets",
	   })
	    );
	    
	    //Cache de fuentes de google
	    workbox.routing.registerRoute(
	        new RegExp("https://fonts.(?:googleapis|gstatic).com/(.*)"),
	        new workbox.strategies.CacheFirst({
	            cacheName: "google-fonts",
	            plugins:[
	                new workbx.cacheableResponse.Plugin({
	                    statuses:[0, 200],
	                }),
	            ],
	        })
	   );
	   
	   //Agregamos un analisis offline
	   workbox.googleAnalytics.initialize();
	   
	   //Instalamos un nuevo service worker y hacemos que se actualice para controlar el sitio web como una PWA
	   workbox.core.skipWaiting();
	   workbox.core.clientesClaim();
}
else{
    console.log("Fallo, workbox no esta cargado.");
}