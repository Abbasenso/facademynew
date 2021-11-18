// modal 
// Get the modal
const modal = document.getElementById("myModal")

// get the ids required to pass the course id 
const logInputHidden = document.getElementById('courseId1')
// const regInputHidden = document.getElementById('courseId2')


// Get the button that opens the modal
const btns = document.querySelectorAll('.myBtn')

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0]

// When the user clicks the button, open the modal 
for (let i = 0; i < btns.length; i++) {
    const getModalWhenClickedBtn = btns[i].addEventListener('click', () => {
        modal.style.display = "block"
    })
}

//getting course id from modal clicked
function getCourseId(courseID){
    // console.log(courseID)
    logInputHidden.value = courseID
    // regInputHidden.value = courseID
    // console.log(regInputHidden.value + 'reg')
}


// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none"
}
// end modal 

//login ragistration animation
// const logInShowBtn = document.getElementById('logInBtn')
// const regShowBtn = document.getElementById('regBtn')
// const logInBox = document.getElementById('logInBox')
// mobile 
// const height = document.getElementById('kkModi')

// const ifloginBtnClicked = logInShowBtn.addEventListener('click', () => {
//     logInShowBtn.classList.add('active')
//     logInBox.classList.remove('active')
//     height.classList.add('active')
// })

// const ifregBtnClicked = regShowBtn.addEventListener('click', () => {
//     logInShowBtn.classList.remove('active')
//     logInBox.classList.add('active')
//     height.classList.remove('active')
// })
//end