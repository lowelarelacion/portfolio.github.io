/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')



/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

const scrollActive = () =>{
    const scrollDown = window.scrollY

  sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id'),
              sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')
        
        if(scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight){
            sectionsClass.classList.add('active-link')
        }else{
            sectionsClass.classList.remove('active-link')
        }                                                    
    })
}
window.addEventListener('scroll', scrollActive)

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 200,
//     reset: true
});

sr.reveal('.home__data, .about__img, .skills__subtitle, .skills__text',{}); 
sr.reveal('.home__img, .about__subtitle, .about__text,.about__me, .skills__img',{delay: 400}); 
sr.reveal('.home__social-icon',{ interval: 200}); 
sr.reveal('.skills__data, .work__img, .tab-titles, .contact__input',{interval: 100}); 

/*===== Scroll=====*/ 


/*===== SKILLS& EDUCATION ACITVE=====*/ 
var tablinks= document.getElementsByClassName("tab-links");
var tabcontents= document.getElementsByClassName("tab-contents");
function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

/*===== UPLOAD FILE=====*/ 
// Check if there are any uploaded projects in local storage on page load
window.addEventListener('DOMContentLoaded', function() {
    const savedProjects = JSON.parse(localStorage.getItem('uploadedProjects'));
    if (savedProjects) {
        savedProjects.forEach(project => {
            appendProject(project);
        });
    }
});

// Function to append project to the grid
function appendProject(project) {
    const workContainer = document.getElementById('workContainer');

    const newProject = document.createElement('div');
    newProject.classList.add('work__img');
    newProject.innerHTML = `
        <img src="${project.image}" alt="${project.title}">
        <div class="layer">
            <h3>${project.title}</h3>
            <p>${project.description}</p>
        </div>
    `;

    workContainer.insertBefore(newProject, document.querySelector('.upload__img'));
}

document.getElementById('fileUpload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const project = {
                image: e.target.result,
                title: 'New Project', // You can change this to prompt the user for a title
                description: 'Description of the new project.' // You can change this to prompt the user for a description
            };
            appendProject(project);

            // Save uploaded project to local storage
            const savedProjects = JSON.parse(localStorage.getItem('uploadedProjects')) || [];
            savedProjects.push(project);
            localStorage.setItem('uploadedProjects', JSON.stringify(savedProjects));
        };
        reader.readAsDataURL(file);
    }
});


// document.getElementById('fileUpload').addEventListener('change', function(event) {
//     const file = event.target.files[0];
//     if (file) {
//         const reader = new FileReader();
//         reader.onload = function(e) {
//             const formData = new FormData();
//             formData.append('image', file);
//             formData.append('title', 'New Project'); // You can change this to prompt the user for a title
//             formData.append('description', 'Description of the new project.'); // You can change this to prompt the user for a description
            
//             const xhr = new XMLHttpRequest();
//             xhr.open('POST', 'save_project.php', true);
//             xhr.onreadystatechange = function() {
//                 if (xhr.readyState === XMLHttpRequest.DONE) {
//                     if (xhr.status === 200) {
//                         // Success, do something if needed
//                         console.log(xhr.responseText);
//                     } else {
//                         // Error handling
//                         console.error('Error:', xhr.statusText);
//                     }
//                 }
//             };
//             xhr.send(formData);
//         };
//         reader.readAsDataURL(file);
//     }
// });
