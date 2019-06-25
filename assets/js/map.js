require('leaflet');


var cities = [
    ["Orleans",47.901402, 1.903920],
    ["Fleury-les-aubrais",47.930916,1.920888],
    ["Saint-cheron-des-champs",48.573471,1.454535],
    ["Villemandeur",47.983800,2.708190],
    ["Lombreuil",47.941214,2.630916],
    ["Oussoy-en-gatinais",47.906872,2.641522],
    ["Thimory",47.921444,2.599977],
    ["Chailly-en-gatinais",47.947108,2.541876],
    ["Noyers",47.914631,2.523080],
    ["Varennes-changy",47.865589,2.659554],
    ["Pannes",48.018261,2.666400],
    ["Burcy",48.239658,2.522160],
    ["Auvilliers-en-gatinais",47.964220,2.499690],
    ["Marigny-les-usages",47.957195,2.014575],
    ["Nangis",48.556381,3.013680],
    ["Itteville",48.514507,2.341843],
    ["Fay-au-loges",47.927720,2.138660],
    ["Montmagny",48.974440,2.346740],
    ["Montargis",47.996101,2.732680],
    ["Meudon",48.812309,2.238150],
    ["Checy",47.891860,2.023540],
    ["Semoy",47.931550,1.949700],
    ["Cerelles",47.501470,0.682710],
    ["Vendome",47.792271,1.064780],
    ["Maintenon",48.587570,1.576840],
    ["Le puiset",48.208150,1.864900],
    ["Ingré",47.919590,1.827450],
    ["Vovelles",48.335830,1.532050],
    ["Damarie",48.343200,1.493810],
    ["La norville",48.585340,2.258970],
    ["Montgeron",48.706690,2.456010],
    ["L'Hay-les-roses",48.778400,2.340770],
    ["Sainte-genevieve-des-bois",48.637060,2.332810],
    ["Arpajon",48.587250,2.248700],
    ["Rueil-malmaison",48.877420,2.179040],
    ["Neauphle-le-chateau",48.814400,1.899390],
    ["Marly-le-roi",48.866720,2.093360],
    ["Saint-vrain",48.541810,2.334580],
    ["Boissy-sur-saint-yon",48.558370,2.209600],
    ["Montesson",48.907710,2.149030],
    ["Chaville",48.810030,2.189190],
    ["Dreux",48.738240,1.361090],
    ["Antony",48.753681,2.297000],
    ["Wissous",48.731000,2.327380],
    ["Massy",48.730309,2.272750],
    ["Saint-michel-sur-orge",48.636890,2.308270],
    ["Le-perray-en-yvelines",48.694250,1.853910],
    ["Palaiseau",48.718930,2.233500],
    ["Paucourt",48.033990,2.789060],
    ["Draveil",48.686130,2.408690],
    ["Mantes-la-ville",48.977990,1.714300],
    ["Saint-germain-lès-arpajon",48.602840,2.258150],
    ["Chevillon-sur-huillard",47.962260,2.625630],
    ["Rambouillet",48.642960,1.825800],
    ["Saint-martin-d'abbat",47.914160,2.272750],
    ["Chateauneuf-sut-loire",48.730309,2.272750],
    ["Saint-jean-braye",47.912048,1.970843],
    ["Maurepas",48.762870,1.947610],
    ["Blois",47.585950,1.330030],
    ["Gentilly",48.814920,2.348890],
    ["Villebon-sur-Yvette",48.698530,2.226830],
    ["Chatou",48.889890,2.156480],
    ["Le-Vesinet",48.892250,2.134620],
    ["Cosne-sur-Loire",47.411420,2.925340],
    ["Nevers",46.9895600,3.1590000],
    ["Auxerre",47.7961287,3.570579],
    ["Le-Mans",48.0073498,0.1967379],
    ["Clery-saint-andré",47.8212402,1.7569328],
    ["Mer",47.699682,1.508414],
    ["Saint-laurent-nouan",47.7169881,1.6116899],
    ["Saint-Ay",47.8606378,1.7535422],
    ["Ardon",47.782461,1.874874],
    ["Dhuizon",47.589656,1.657635],
    ["Chablis",47.815269,3.800451],
    ["Fontainebleau",48.404676,2.701620],
    ["Dammarie-les-lys",48.404676,2.701620],
    ["Ury",48.340920,2.601650],
    ["Chateaudun",48.070369,1.327696],
    ["Toury",48.199531,1.928515],
    ["Combs-la-ville",48.666020,2.557690],
    ["Sens",48.200650,3.282680],
    ["Nogent-sur-vernisson",47.846388,2.741782],
    ["Sully-sur-loire",47.763082,2.373936],

];


var map = L.map('mapid').setView([47.901402, 1.903920], 9);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    maxZoom: 30,
}).addTo(map);

var homeIcon = L.icon({
    iconUrl: require('../images/homepage/leaf_home.png'),
    iconSize:     [25, 35], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});


for (var i = 0; i < cities.length; i++) {
    marker = new L.marker([cities[i][1],cities[i][2]], {icon: homeIcon})
        .bindPopup(cities[i][0])
        .addTo(map);
}
