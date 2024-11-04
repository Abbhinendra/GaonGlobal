// strat GaonGloable fontend site logic here
import axios from 'https://cdn.jsdelivr.net/npm/axios@1.3.5/+esm';
let bar=document.querySelector(".bar img");
let pages=document.querySelector(".pages");
let cross=pages.querySelector(".cross img");
let showProfileEditPage=document.querySelector('.show-profile-edit-page');
let cameraIcon=document.querySelector('.cameraIcon');
let profileImage=document.querySelector('#profileImage');
let userProfile=document.querySelector('.userProfile');
if(bar){
    bar.addEventListener('click', ()=>{
    if(pages){
        pages.style.transform="translateX(0)";
    }
    });
}

if(cross){
    cross.addEventListener('click',  ()=>{
        if(pages){
            pages.style.transform="translateX(-180%)";
        }
    });
}

if(cameraIcon){
    cameraIcon.addEventListener('click', ()=>{
    if(profileImage){
        profileImage.click();
    }
    });
}

if(profileImage){
    profileImage.addEventListener('change', function(){
        let file=profileImage.files[0];
        let url=URL.createObjectURL(file);
        if(userProfile){
           if(file.type.includes('image')){
              userProfile.src=url;
           }
           let formData = new FormData();
           formData.append('url', file);
           axios.post('/frontend/update-user-image' , formData, {
            headers: {
              'Content-Type': 'multipart/form-data',
            }
          }).then(response=>{

          });
        }
    })
}

//Add slide logic here
let slides=document.querySelector(".slides");
let slideImages=[
    "/images/Create_a_high-definition_full-screen_background_im.png",
    "/images/DALL·E 2024-10-13 12.20.04 - A beautiful, high-definition image that reflects the themes of GaonGlobal, a web app focused on selling educational courses and agricultural products.webp",
    "/images/DALL·E 2024-10-13 12.21.11 - An improved, high-definition image for GaonGlobal, a web app that focuses on selling educational courses and agricultural products. The image should f.webp",
    "/images/DALL·E 2024-10-13 12.21.42 - A stunning, high-definition image for GaonGlobal, highlighting the fusion of modern education and traditional agriculture. The image should show a pic.webp",
    "/images/DALL·E 2024-10-13 12.29.26 - A beautiful HD image representing a vibrant rural Indian village market scene. The image shows villagers selling agricultural products like fruits, ve.webp",
    "/images/DALL·E 2024-10-13 12.29.30 - A high-definition image representing a modern web platform called GaonGlobal, focusing on education and agriculture. The image should combine elements.webp"
];

let  slidecount=0;
     slides.style.backgroundImage=`url("${slideImages[slidecount]}")`;
     setInterval(() => {
     slidecount++;
     slides.style.backgroundImage=`url("${slideImages[slidecount]}")`;
     if(slideImages.length === slidecount){
        slidecount=0;
        slides.style.backgroundImage=`url("${slideImages[slidecount]}")`;
     }
     }, 12000);


