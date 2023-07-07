let addSongBtn=document.querySelector('.addsong')
let addArtistBtn=document.querySelector('.addartist')

let addSongDiv=document.querySelector(".addSong")
let addArtistDiv=document.querySelector(".addArtist")

addSongBtn.addEventListener("click",()=>{
    addSongDiv.style.display="block";
    addArtistDiv.style.display="none";

})

addArtistBtn.addEventListener("click",()=>{
    addArtistDiv.style.display="block";
    addSongDiv.style.display="none";

})