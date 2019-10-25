// JAVASCRIPT FOR CALCULATING THE MENTIONS OF MINISTRAI

var parentElement = document.getElementById('section-to-insert-img');
var competitors = [
    {
        competitorElement : '<img class="img" src="../app/photo/linas-linkevicius-ministras.webp" alt="Linas Linkevičius"><div class="overlay"><div class="name"><a href="https://twitter.com/LinkeviciusL" target="_blank"><h4>Linas Linkevičius</h4></a><h6>(g. 1961 m. sausio 6 d.) Nuo 2016m LR Užsienio reikalų ministras</h6></div></div>',
        score : 7812
    },
    {
        competitorElement : '<img class="img" src="../app/photo/kestutis-mazeika-ministras.webp" alt="Kęstutis Mažeika"><div class="overlay"><div class="name"><a href="https://www.facebook.com/kestutis.mazeika.7" target="_blank"><h4>Kęstutis Mažeika</h4></a><h6>(g. 1982 m. balandžio 28 d.) Nuo 2019m. LR Aplinkos ministras</h6></div></div>',
        score : 7064
    },
    {
      competitorElement: '<img class="img" src="../app/photo/saulius-skvernelis-ministras.webp" alt="Saulius Skvernelis"><div class="overlay"><div class="name"><a href="https://www.facebook.com/Saulius-Skvernelis-814777171988967/" target="_blank"><h4>Saulius Skvernelis</h4></a><h6>(g. 1970m. liepos 23 d.) Nuo 2016m. LR Ministras Pirmininkas</h6></div></div>',
        score : 9135
    },
    {
      competitorElement: '<img class="img" src="../app/photo/virginijus-sinkevicius-ministras.webp" alt="Virginijus Sinkevičius"><div class="overlay"><div class="name"><a href="https://twitter.com/vsinkevicius?lang=en" target="_blank"><h4>Virginijus Sinkevičius</h4></a><h6>(g. 1990 m. lapkričio 4 d) Nuo 2017m. LR Ekonomis ir inovacijų ministras</h6></div></div>',
        score : 8729
    },
    {
      competitorElement: '<img class="img" src="../app/photo/rita-tamasuniene-ministras.webp" alt="Rita Tamašunienė"><div class="overlay"><div class="name"><a href="https://www.15min.lt/tema/rita-tamasuniene-7166" target="_blank"><h4>Rita Tamašunienė</h4></a><h6>(g. 1973 m. rugsėjo 27 d.) Nuo 2019m LR Vidaus reikalų ministrė</h6></div></div>',
        score : 2428
    },
];
//SORTING THE SCORES FROM BIGGEST TO LOWEST
var place = 0;
var result = competitors.sort(function(a, b) {
   return parseFloat(a.score) - parseFloat(b.score);
});
var result = competitors.reverse(function(a, b) {
   return parseFloat(a.score) - parseFloat(b.score);
});
//FOR CICLE TO WRITE THE RESULTS INTO HTML FILE
for(let competitor of competitors){
    if(place < competitors.length){
        childElement = document.createElement('div');
        childElement.className = 'imageContainer';
        appendChildElement = parentElement.appendChild(childElement);
        appendChildElement.innerHTML += '<div class="placeAndScore"><h4> NR.' + (place + 1) + '</h4> ' + competitor.score + '</div>' + competitor.competitorElement;
        }
    place++;
}
