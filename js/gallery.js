let reunionArray=["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","8.jpg","9.jpg","10.jpg","11.jpg"];
let independenceArray=["1.jpg","2.jpg","3.jpg","4.jpg"];
alumni_reunion.innerHTML=`
    <div class="dis-flex" id="reunion_gal"></div>
`;
for(var i in reunionArray){
    reunion_gal.innerHTML+=`
        <a href="img/meetup/${reunionArray[i]}" class="box-shadow"><img src="img/meetup/${reunionArray[i]}" alt="alumni-reunion-images" width="100%" height="100%" class="gal-img"></a>
    `;
}

function alumniReunion(t){
    document.querySelector("#independence_day").classList.add("dis-none");
    document.querySelector("#science_fest").classList.add("dis-none");

    document.querySelector("#alumni_reunion").classList.remove("dis-none");

    document.querySelectorAll(".gallery-nav>a")[1].removeAttribute('id',"active");
    document.querySelectorAll(".gallery-nav>a")[1].classList.add("border-bottom");

    document.querySelectorAll(".gallery-nav>a")[2].removeAttribute('id',"active");
    document.querySelectorAll(".gallery-nav>a")[2].classList.add("border-bottom");

    t.classList.remove("border-bottom");
    t.setAttribute('id',"active");
}


function independence(t){
    document.querySelector("#alumni_reunion").classList.add("dis-none");
    document.querySelector("#science_fest").classList.add("dis-none");

    document.querySelector("#independence_day").classList.remove("dis-none");

    document.querySelectorAll(".gallery-nav>a")[0].removeAttribute('id',"active");
    document.querySelectorAll(".gallery-nav>a")[0].classList.add("border-bottom");

    document.querySelectorAll(".gallery-nav>a")[2].removeAttribute('id',"active");
    document.querySelectorAll(".gallery-nav>a")[2].classList.add("border-bottom");
    
    independence_day.innerHTML=`
    <div class="dis-flex" id="independence_gal"></div>
    `;
    for(var i in independenceArray){
        independence_gal.innerHTML+=`
            <a href="img/independence/${independenceArray[i]}" class="box-shadow"><img src="img/independence/${independenceArray[i]}" alt="independence-day-images" width="100%" height="100%" class="gal-img"></a>
        `;
    }
    t.classList.remove("border-bottom");
    t.setAttribute('id',"active");
}

function sciFest(t){
    document.querySelector("#alumni_reunion").classList.add("dis-none");
    document.querySelector("#independence_day").classList.add("dis-none");

    document.querySelector("#science_fest").classList.remove("dis-none");

    document.querySelectorAll(".gallery-nav>a")[0].removeAttribute('id',"active");
    document.querySelectorAll(".gallery-nav>a")[0].classList.add("border-bottom");

    document.querySelectorAll(".gallery-nav>a")[1].removeAttribute('id',"active");
    document.querySelectorAll(".gallery-nav>a")[1].classList.add("border-bottom");
    science_fest.innerHTML=`
        <div class="art-note dis-flex item-center justify-center text-gray">
            <p>image not available</p>
        </div>
    `;
    t.classList.remove("border-bottom");
    t.setAttribute('id',"active");
}