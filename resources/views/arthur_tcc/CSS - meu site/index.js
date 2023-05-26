// variaveis

const atoresBtn = document.getElementById("atores");
const diretoresBtn = document.getElementById("diretores");
const filmesBtn = document.getElementById("filmes");
const curtasBtn = document.getElementById("curtas");
const compositoresBtn = document.getElementById("compositores");
const editoresBtn = document.getElementById("editores");
const figurinistasBtn = document.getElementById("figurinistas");
const searchBtn = document.getElementById("search");

const newsQuery = document.getElementbyID("newsQuery");
const newsType = document.getElementbyID("newsType");
const newsdetails = document.getElementbyID("newsdetails");

//arrays

var newsDataArr = [];

//apis

// const API_KEY ="e991941740a548e3996bcff152f119f6";
// const ATORES_NEWS = "https://newsapi.org/v2/top-headlines?entre=atores&apiKey=" + API_KEY;
// const DIRETORES_NEWS = "https://newsapi.org/v2/top-headlines?country=diretores&apiKey=";
// const MOVIES_NEWS = "https://newsapi.org/v2/top-headlines?country=movies&apiKey=";
// const CURTAS_NEWS = "https://newsapi.org/v2/top-headlines?country=curtas&apiKey=";
// const COMPOSITORES_NEWS = "https://newsapi.org/v2/top-headlines?country=compositores&apiKey=";
// const EDITORES_NEWS = "https://newsapi.org/v2/top-headlines?country=editores&apiKey=";
// const FIGURINISTAS_NEWS = "https://newsapi.org/v2/top-headlines?country=figurinistas&apiKey=";

const API_KEY = "YOUR_API_KEY";
const ATORES_NEWS = "https://newsapi.org/v2/top-headlines?country=in&apiKey=";
const DIRETORES_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=general&apiKey=";
const MOVIES_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=";
const CURTAS_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=";
const COMPOSITORES_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=";
const EDITORES_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=technology&pageSize=8&apiKey=";
const FIGURINISTAS_NEWS = "https://newsapi.org/v2/everything?q=";

window.onload = function() {
    newsType.innerHTML="<h4>Headlines</h4>";
    fecthHeadlines();
};

atoresBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de atores</h4>";
    fetchatoresNews();

});
diretoresBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de diretores</h4>";
    fetchDiretoresNews();

});
MoviesBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de filmes</h4>";
    fetchFilmesNews();

});
curtasBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de curtas</h4>";
    fetchCurtasNews();

});
compositoresBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de compositores</h4>";
    fetchCompositoresNews();

});
editoresBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de editores</h4>";
    fetchEditoresNews();

});
figurinistasBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>notícias de figurinistas</h4>";
    fetchFigurinistasNews();

});
homeBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>Headlines</h4>";
    fetchGeneralNews();

});
searchBtn.addEventListener("click", function(){
    newsType.innerHTML="<h4>Procurar:"+newsQuery.value+"</h4>";
    fetchQuerryNews();

});

const fecthHeadlines = async () => {

    const response = await fetch(HEADLINE_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchatoresNews = async () => {

    const response = await fetch(ATORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchdiretoresNews = async () => {

    const response = await fetch(DIRETORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchMoviesNews = async () => {

    const response = await fetch(MOVIES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        console.log(myJson);
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchcurtasNews = async () => {

    const response = await fetch(CURTAS_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchcompositoresNews = async () => {

    const response = await fetch(COMPOSITORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetcheditoresNews = async () => {

    const response = await fetch(EDITORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchfigurinistasNews = async () => {

    const response = await fetch(FIGURINISTAS_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchgeneralNews = async () => {

    const response = await fetch(GENERAL_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

const fetchQueryNews = async () => {
    if(newsQuery.value == null)
        return;

    const response = await fetch(SEARCH_NEWS+encodeURIComponent(newsQuery.value)+"&apikey="+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        // handle errors
        console.log(response.status, response.statusText);
    }
    displayNews();
}

function displayNews() {

    newsdetails.innerHTML = "";

    // if(newsDataArr.length == 0){
    //     newsdetails.innerHTML = "<h5>no data found.</h5>"
    //     return;
    // }
    newsDataArr.forEach(news => {

        var col = document.createElement('div');
        col.className="col-sm-12 col-md-4 col-lg-3 p-2 card";

        var card = document.createElement('div');
        card.className = "p-2";

        var image = document.createElement('img');
        image.setAttribute("height", "matchparnt");
        image.setAttribute("width", "100%");
        image.scr=news.urlToImage;

        var cardbody = document.createElement('div');

        var newsHeading = document.createElement('h5');
        newsHeading.className = "class-title";
        newsHeading.innerHTML = news.title;

        var dateHeading = document.createElement('h6');
        dateHeading.className = "text-primary";
        dateHeading.innerHTML = date[0];

        var discription = document.createElement('p');
        discription.className="text-muted";
        discription.innerHTML = news.description;

        var link = document.createElement('a');
        link.className="btn btn-dark";
        link.setAttribute("target", "_blank");
        link.href = news.url;
        link.innerHTML="Read more";

        cardBody.appendChild(newsHeading);
        cardBody.appendChild(dateHeading);
        cardBody.appendChild(discription);
        cardBody.appendChild(link);

        card.appendChild(image);
        card.appendChild(cardBody);

        col.appendChild(card);

        newsdetails.appendChild(col);
    });

}