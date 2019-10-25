// JAVASCRIPT FOR CALCULATING THE MENTIONS OF SEIMO NARIAI

var parentElement = document.getElementById('section-to-insert-img');
var competitors = [
    {
        competitorElement : '<img class="img" src="../app/photo/ingrida-simonyte-seimas.webp" alt="Ingrida Šimonytė"><div class="overlay"><div class="name"><a href="https://www.facebook.com/ingrida.simonyte1" target="_blank"><h4>Ingrida Šimonytė</h4></a><h6>(g. 1974 m. lapkričio 15 d.) Nuo 2016m. Seimo narė, Europos reikalų komiteto narė, Audito komiteto pirmininkė, nuo 2017m. Neįgaliųjų teisių komisijos narė. </h6></div></div>',
        score : 9794
    },
    {
        competitorElement : '<img class="img" src="../app/photo/mykolas-majauskas-seimas.webp" alt="Mykolas Majauskas"><div class="overlay"><div class="name"><a href="https://www.facebook.com/majauskas.official/" target="_blank"><h4>Mykolas Majausmas</h4></a><h6>(g. 1981 m. gruodžio 19 d.) Nuo 2016m. Seimo narys, Biudžeto ir finansų komiteto narys, nuo 2018m. Savižudybių ir smurto prevencijos komisijos narys.</h6></div></div>',
        score : 3074
    },
    {
      competitorElement: '<img class="img" src="../app/photo/agne-sirinskiene-seimas.webp" alt="Agnė Širinskienė"><div class="overlay"><div class="name"><a href="https://www.facebook.com/people/Agn%C4%97-%C5%A0irinskien%C4%97/100012505354591" target="_blank"><h4>Agnė Širinskienė</h4></a><h6>(g. 1975 m. lapkričio 9 d.) Nuo 2016m. Seimo narė, Konstitucijos komisijos narė, nuo 2017m. Teisės ir teisėtvarkos komiteto pirmininkė.</h6></div></div>',
        score : 3714
    },
    {
      competitorElement: '<img class="img" src="../app/photo/ramunas-karbauskis-seimas.webp" alt="Ramūnas Karbauskis"><div class="overlay"><div class="name"><a href="https://twitter.com/vsinkevicius?lang=en" target="_blank"><h4>Ramūnas Karbauskis</h4></a><h6>(g. 1969 m. gruodžio 5 d.) Nuo 2016m. Seimo narys, Kultūros komiteto pirmininkas.</h6></div></div>',
        score : 9881
    },
    {
      competitorElement: '<img class="img" src="../app/photo/viktoras-pranckietis-seimas.webp" alt="Viktoras Pranckietis"><div class="overlay"><div class="name"><a href="https://www.facebook.com/VPranckietis/" target="_blank"><h4>Viktoras Pranckietis</h4></a><h6>(g. 1958 m. liepos 26 d.) Nuo 2016m. Seimo narys ir Seimo pirmininkas.</h6></div></div>',
        score : 9194
    },
    {
      competitorElement: '<img class="img" src="../app/photo/viktorija-cmilyte-nielsen-seimas.webp" alt="Viktorija Čmilytė-Nielsen"><div class="overlay"><div class="name"><a href="https://www.facebook.com/viktorija.cmilyte" target="_blank"><h4>Viktorija Čmilytė-Nielsen</h4></a><h6>(g. 1983 m. rugpjūčio 6 d.) Nuo 2016m. Seimo narė, Žmogaus teisių komiteto narė, Etikos ir procedūrų komisijos narė.</h6></div></div>',
        score : 3539
    },
];
//SORTING THE SCORES FROM BIGGEST TO LOWEST
var result = competitors.sort(function(a, b) {
   return parseFloat(a.score) - parseFloat(b.score);
});
var result = competitors.reverse(function(a, b) {
   return parseFloat(a.score) - parseFloat(b.score);
});
var place = 0;
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
