// navbar 
const hamburgerElement = document.getElementById('hamburger')
const lineElements = document.getElementsByClassName('line')
const navContainer = document.getElementById('navbar')

const clickedHamburger = hamburgerElement.addEventListener('click' , () => {
    navContainer.classList.toggle('active')
    // hamburger animation
    for(let i=0; i<lineElements.length; i++)
        lineElements[i].classList.toggle('active')
})
 
// course catagory cards 
const courseCtgCard = document.getElementsByClassName('course-ctg-card')

for(let i=0; i < courseCtgCard.length; i++){
    courseCtgCard[i].addEventListener('mouseout' , () => courseCardMouseOut(i))
    courseCtgCard[i].addEventListener('mouseover' , () => courseCardMouseIn(i))
}

function courseCardMouseOut(k){
    let ctgChildElements = courseCtgCard[k].getElementsByTagName('*')

    // parent div 
    courseCtgCard[k].classList.remove('active')
    // child div 
    for(let i = 0; i < ctgChildElements.length; i++)
        ctgChildElements[i].classList.remove('active')
}

function courseCardMouseIn(k){
    let ctgChildElements = courseCtgCard[k].getElementsByTagName('*')

    // parent div 
    courseCtgCard[k].classList.add('active')
    // child div 
    for(let i = 0; i < ctgChildElements.length; i++)
        ctgChildElements[i].classList.add('active')
}
// end course catagory cards 
 
// AOS : Animation on Scroll 
AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once : true,
})

 

// console.log('hola')