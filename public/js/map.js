ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.275618, 69.260684],
        zoom: 12,
        controls: []
    }, {
        searchControlProvider: 'yandex#search'
    },
);
myMap.geoObjects
.add(new ymaps.Placemark([41.28874879159081, 69.30137300369914], {
}, {
    iconLayout: 'default#image',
    iconImageHref: 'img/marker.svg',
    iconImageSize: [70, 70],
}))
}


