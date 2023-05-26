// variaveis

const atoresBtn = document.getElementById("atores");
const diretoresBtn = document.getElementById("diretores");
const filmesBtn = document.getElementById("filmes");
const curtasBtn = document.getElementById("curtas");
const compositoresBtn = document.getElementById("compositores");
const editoresBtn = document.getElementById("editores");
const figurinistasBtn = document.getElementById("figurinistas");
const searchBtn = document.getElementById("search");

//arrays

var newsDataArr = [];

//apis

const API_KEY ="e991941740a548e3996bcff152f119f6";
const ATORES_NEWS = "https://newsapi.org/v2/top-headlines?country=atores&apiKey=" + API_KEY;
const DIRETORES_NEWS = "https://newsapi.org/v2/top-headlines?country=diretores&apiKey=";
const FILMES_NEWS = "https://newsapi.org/v2/top-headlines?country=filmes&apiKey=";
const CURTAS_NEWS = "https://newsapi.org/v2/top-headlines?country=curtas&apiKey=";
const COMPOSITORES_NEWS = "https://newsapi.org/v2/top-headlines?country=compositores&apiKey=";
const EDITORES_NEWS = "https://newsapi.org/v2/top-headlines?country=editores&apiKey=";
const FIGURINISTAS_NEWS = "https://newsapi.org/v2/top-headlines?country=figurinistas&apiKey=";
atoresBtn.addEventListener("click", function(){


});
diretoresBtn.addEventListener("click", function(){
    fetchDiretoresNews();

});
filmesBtn.addEventListener("click", function(){
    fetchFilmesNews();

});
curtasBtn.addEventListener("click", function(){
    fetchCurtasNews();

});
compositoresBtn.addEventListener("click", function(){
    fetchCompositoresNews();

});
editoresBtn.addEventListener("click", function(){
    fetchEditoresNews();

});
figurinistasBtn.addEventListener("click", function(){
    fetchFigurinistasNews();

});
homeBtn.addEventListener("click", function(){
    fetchGeneralNews();

});
searchBtn.addEventListener("click", function(){
    fetchQuerryNews();

});

const fetchDiretoresNews = async () => {

    const response = await fetch(DIRETORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson;
    } else {
        // handle errors
    }
    displayNews();
}

const fetchDiretoresNews = async () => {

    const response = await fetch(DIRETORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson;
    } else {
        // handle errors
    }
    displayNews();
}

const fetchDiretoresNews = async () => {

    const response = await fetch(DIRETORES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status >=200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson;
    } else {
        // handle errors
    }
    displayNews();
}