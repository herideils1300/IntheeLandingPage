
//Slides to shuffle
let slideElements = document.getElementsByClassName("slide-div");

//constant element from index
const body = document.getElementsByTagName("body")[0];
const communityStatistic = document.getElementById("comm-stat");
const developerStatistic = document.getElementById("dev-stat");
const howWeDo = document.getElementById("how-we-do");
const ourMission = document.getElementById("our-mission");

//Stats to fetch
var gamersNum = 0
var devsNum = 0

// // Slide index
// var currentSlideIndex = 0

//variable for checking scroll direction
var currentScroll = 0

// //Constant for url; TODO: Put somwhere safer
// const fetchUrl = "http://localhost:5000"






function fetchStats() {
       communityStatistic.innerHTML = gamersNum.toString();
       developerStatistic.innerHTML = devsNum.toString();
}

// document.addEventListener("scrollEnd", (ev) => {
//        currentScroll = body.scrollTop
// })

// setInterval(() => {
//        var currentSlide = slideElements.item(currentSlideIndex);
//        var currentSlidePosition = currentSlide.
// }, 1000)

// function fetchCurrentStatistcs() {

//        fetch(fetchUrl + "/gamers/num").then(async (result) => {
//               var stats = await result.json()
//               gamersNum = stats
//        })

//        fetch(fetchUrl + "/devs/num").then(async (result) => {
//               var stats = await result.json()
//               devsNum = stats
//        })

// }
document.addEventListener("DOMContentLoaded", () => {
       fetchStats();
})

function navigateToPath(path){
       var currentUrl = window.location.origin;
       window.location.href = currentUrl + path;
}

function toggleHowWeDo() {
       var dropDownDiv = howWeDo.parentElement;
       dropDownDiv.classList.toggle("list-with-title-div-opened")



}

function toggleOurMission() {
       var dropDownDiv = ourMission.parentElement;
       dropDownDiv.classList.toggle("list-with-title-div-opened")
}