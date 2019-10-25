var parentElement = document.getElementById('section-to-insert-img');
var competitors = [
    {
        competitorElement : '<img class="img" src="../app/photo/laisves-partija-logo-svg.svg" alt="Laisvės Partija"><div class="overlay"><div class="name"><a href="https://lt.wikipedia.org/wiki/Laisv%C4%97s_partija"><h4>Laisvės partija</h4></a><h6>Įkurta 2019 m. birželio 1 d.</h6></div></div>',
        score : 435
    },
    {
        competitorElement : '<img class="img" src="../app/photo/lietuvos-lenku-rinkimu-akcija-llra-kss-logo-svg.svg" alt="LLRA-KSS"><div class="overlay"><div class="name"><a href="https://lt.wikipedia.org/wiki/Lietuvos_lenk%C5%B3_rinkim%C5%B3_akcija"><h4>Lietuvos lenkų rinkimų akcija – Krikščioniškų šeimų sąjunga(LLRA-KŠS)</h4></a><h6>Įkurta 1994 m. spalio 21 d.</h6></div></div>',
        score : 5403
    },
    {
      competitorElement: '<img class="img" src="../app/photo/lietuvos-socialdemokratu-lsdp-logo-svg.svg" alt="LSDP"><div class="overlay"><div class="name"><a href="https://lt.wikipedia.org/wiki/Lietuvos_socialdemokrat%C5%B3_partija"><h4>Lietuvos socialdemokratų partija (LSDP)</h4></a><h6>Įkurta 1896 m. gegužės 1 d.</h6></div></div>',
        score : 3661
    },
    {
      competitorElement: '<img class="img" src="../app/photo/lietuvos-valstieciu-zaliuju-partija-logo-svg.svg" alt="LVŽS"><div class="overlay"><a href="https://lt.wikipedia.org/wiki/Lietuvos_valstie%C4%8Di%C5%B3_ir_%C5%BEali%C5%B3j%C5%B3_s%C4%85junga"><div class="name"><h4>Lietuvos valstiečių ir žaliųjų sąjunga (LSDP)</h4></a><h6>Įkurta 1905 m. gruodžio 22 d.</h6></div></div>',
        score : 9453
    },
    {
      competitorElement: '<img class="img" src="../app/photo/tevynes-krikscionis-demokratai-ts-lkd-logo-svg.svg" alt="TS-LKD"><div class="overlay"><div class="name"><a href="https://lt.wikipedia.org/wiki/T%C4%97vyn%C4%97s_s%C4%85junga_%E2%80%93_Lietuvos_krik%C5%A1%C4%8Dionys_demokratai"><h4>Tėvynės sąjunga – Lietuvos krikščionys demokratai (TS-LKD)</h4></a><h6>Įkurta 1993 m. gegužės 1 d.</h6></div></div>',
        score : 7559
    },
];
var result = competitors.sort(function(a, b) {
   return parseFloat(a.score) - parseFloat(b.score);
});
var result = competitors.reverse(function(a, b) {
   return parseFloat(a.score) - parseFloat(b.score);
});
var place = 0;
for(let competitor of competitors){
    if(place < competitors.length){
        childElement = document.createElement('div');
        childElement.className = 'imageContainer';
        appendChildElement = parentElement.appendChild(childElement);
        appendChildElement.innerHTML += '<div class="placeAndScore"><h4> NR.' + (place + 1) + '</h4> ' + competitor.score + '</div>' + competitor.competitorElement;
        }
    place++;
}
