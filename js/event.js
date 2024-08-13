function eventAll(t){
    document.querySelector("#event_webinar").classList.add("dis-none");
    document.querySelector("#event_reunion").classList.add("dis-none");

    document.querySelector("#event_all").classList.remove("dis-none");

    document.querySelectorAll(".event-nav>a")[1].removeAttribute('id',"active");
    document.querySelectorAll(".event-nav>a")[1].classList.add("border-bottom");

    document.querySelectorAll(".event-nav>a")[2].removeAttribute('id',"active");
    document.querySelectorAll(".event-nav>a")[2].classList.add("border-bottom");

    t.classList.remove("border-bottom");
    t.setAttribute('id',"active");
}

function eventReunion(t){
    document.querySelector("#event_all").classList.add("dis-none");
    document.querySelector("#event_webinar").classList.add("dis-none");

    document.querySelector("#event_reunion").classList.remove("dis-none");

    document.querySelectorAll(".event-nav>a")[0].removeAttribute('id',"active");
    document.querySelectorAll(".event-nav>a")[0].classList.add("border-bottom");

    document.querySelectorAll(".event-nav>a")[2].removeAttribute('id',"active");
    document.querySelectorAll(".event-nav>a")[2].classList.add("border-bottom");
    event_reunion.innerHTML=`
        <div class="art-note dis-flex item-center justify-center text-gray">
            <p>No Upcoming Events</p>
        </div>
    `;
    t.classList.remove("border-bottom");
    t.setAttribute('id',"active");

    event_webinar.classList.remove("description");
    event_reunion.classList.add("description");
}

function eventWebinar(t){
    document.querySelector("#event_all").classList.add("dis-none");
    document.querySelector("#event_reunion").classList.add("dis-none");

    document.querySelector("#event_webinar").classList.remove("dis-none");

    document.querySelectorAll(".event-nav>a")[0].removeAttribute('id',"active");
    document.querySelectorAll(".event-nav>a")[0].classList.add("border-bottom");

    document.querySelectorAll(".event-nav>a")[1].removeAttribute('id',"active");
    document.querySelectorAll(".event-nav>a")[1].classList.add("border-bottom");
    event_webinar.innerHTML=`
        <div class="art-note dis-flex item-center justify-center text-gray">
            <p>No Upcoming Events</p>
        </div>
    `;
    t.classList.remove("border-bottom");
    t.setAttribute('id',"active");

    event_webinar.classList.add("description");
}