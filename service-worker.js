var cacheName = 'v1.0';

var cacheAssets = [
    './index.php',
    './controllers/c_contacto.php',
    './controllers/c_index.php',
    './controllers/c_mensajes.php',
    './controllers/c_mision.php',
    './controllers/c_portafolios.php',
    './controllers/c_quienes_somos.php',
    './controllers/c_servicios_ofrecidos.php',
    './controllers/c_valores.php',
    './controllers/c_vision.php',
    './db/db_main.php',
    './models/m_message.php',
    './public/css/animate.min.css',
    './public/css/bootstrap.min.css',
    './public/css/style.css',
    './public/img/1.png',
    './public/img/2.png',
    './public/img/3.png',
    './public/img/alan.jpg',
    './public/img/alan2.jpg',
    './public/img/ca1.jfif',
    './public/img/ca2.jfif',
    './public/img/ca3.jfif',
    './public/img/ca4.jfif',
    './public/img/ca5.jfif',
    './public/img/ca6.jfif',
    './public/img/cesar.jpg',
    './public/img/favicon.svg',
    './public/img/fondo.jpg',
    './public/img/guillermo.jpg',
    './public/img/logo.png',
    './public/img/m1.jfif',
    './public/img/perla.jpg',
    './public/img/ra.png',
    './public/img/ra1.jfif',
    './public/img/v1.jpg',
    './public/img/v2.jpg',
    './public/img/va1.jpg',
    './public/img/va2.jfif',
    './public/js/bootstrap.min.js',
    './public/js/jquery-3.6.1.min.js',
    './public/js/popper.min.js',
    './public/php/css.php',
    './public/php/js.php',
    './views/enterprise/v_contacto.php',
    './views/enterprise/v_mensajes.php',
    './views/enterprise/v_mision.php',
    './views/enterprise/v_portafolios.php',
    './views/enterprise/v_quienes_somos.php',
    './views/enterprise/v_servicios_ofrecidos.php',
    './views/enterprise/v_valores.php',
    './views/enterprise/v_vision.php',
    './views/layout/v_footer.php',
    './views/layout/v_navbar.php',
    './views/v_index.php'
]

//Instalación

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  )
})

//cuando el navegador recupera una url
self.addEventListener('fetch', e => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request)
      .then(res => {
        if (res) {
          //recuperar del cache
          return res
        }
        //recuperar de la petición a la url
        return fetch(e.request)
      })
  )
})
