const cacheDuSite = 'MonSuperCache'; // Nom du cache
const ressourceCache = [             // Ressources enregistrées dans le cache
    '/',
    'index.html',
    'Javascriptindex.js',
    '/Main/Index.php'
];

console.log("je rentre");

//Installation du service worker 
self.addEventListener('install', evt => {
    evt.waitUntil(caches.open(cacheDuSite)
        .then(cache => {
            cache.addAll(ressourceCache);
        })
    )
})

//Activation du service worker 
self.addEventListener('activate', evt => {
    console.log('le Service Worker a été activé ');
});

//fetch event afin de répondre quand on est en mode hors ligne.
self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches.open(cacheDuSite).then(function (cache) {
            return cache.match(event.request).then(function (response) {
                return (
                    response ||
                    fetch(event.request).then(function (response) {
                        cache.put(event.request, response.clone());
                        return response;
                    })
                );
            });
        })
    );
});