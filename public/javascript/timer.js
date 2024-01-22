let offer_time = '{{date($offer['time'])}}';
let date  = new Date('offer_time');

function counts()
{
    let now = new Date();
    gap = date - now;

    let days = Math.floor(gap / 1000 / 60 / 60 / 24);
    let hours = Math.floor(gap / 1000 / 60 / 60 ) % 24;
    let minutes = Math.floor(gap / 1000 / 60) % 60;

    if(gap < 0){
        document.getElementById('offer-timer').innerText = 'Oferta a luat sfirsit';
    } else{
        document.getElementById('d').innerText = days;
        document.getElementById('h').innerText = hours;
        document.getElementById('m').innerText = minutes;
    }
}

counts();
setInterval(counts, 1000);

