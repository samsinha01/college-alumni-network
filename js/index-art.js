$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});


/****************section-2-img-insert********************/
let member=["m1.jpg","m2.jpg","m3.jpg","m4.jpg","m5.jpg","m6.jpg","m7.jpg","m8.jpg","m9.jpg","m10.jpg","m11.jpg","m12.jpg"];

let indSec2 = member.forEach((item,index)=>{
    document.querySelector("#ind_sec2").innerHTML+=`
        <div class="slide">
            <a href="member.php"><img src="img/member/${item}" alt="member-img"></a>
        </div>
    `;
});

/****************************section-3-img-insert*********************************/
let memories=["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg"];

let indSec3 = memories.forEach((item,index)=>{
    ind_sec3.innerHTML+=`
        <div claSs="slide">
            <a href="gallery.php"><img src="img/meetup/${item}" alt="memories" /></a>
        </div>
    `;
});