let member=[
    {
        fname:"Nihal",
        mname:"",
        lname:"Pandey",
        img:"m1.jpg",
        batch:"2020-23"
    },
    {
        fname:"Sudhir",
        mname:"",
        lname:"Pradhan",
        img:"m2.jpg",
        batch:"2020-23"
    },
    {
        fname:"Ankush",
        mname:"Pratap",
        lname:"Singh",
        img:"m3.jpg",
        batch:"2020-23"
    },
    {
        fname:"Devanshu",
        mname:"",
        lname:"Shrivastava",
        img:"m4.jpg",
        batch:"2020-23"
    },
    {
        fname:"Suyash",
        mname:"",
        lname:"Pandey",
        img:"m5.jpg",
        batch:"2020-23"
    },
    {
        fname:"Pratik",
        mname:"",
        lname:"Rathore",
        img:"m6.jpg",
        batch:"2020-23"
    },
    {
        fname:"Sameer",
        mname:"",
        lname:"Sinha",
        img:"m7.jpg",
        batch:"2020-23"
    },
    {
        fname:"Shivan",
        mname:"",
        lname:"Choudhary",
        img:"m8.jpg",
        batch:"2020-23"
    },
    {
        fname:"Narsigh",
        mname:"",
        lname:"Yadav",
        img:"m9.jpg",
        batch:"2020-23"
    },
    {
        fname:"Naresh",
        mname:"",
        lname:"Sahu",
        img:"m10.jpg",
        batch:"2020-23"
    },
    {
        fname:"Jitesh",
        mname:"",
        lname:"Sahu",
        img:"m11.jpg",
        batch:"2020-23"
    },
    {
        fname:"Jitendra",
        mname:"",
        lname:"Sriwas",
        img:"m12.jpg",
        batch:"2020-23"
    }
];

let memberCard=member.forEach((item,index)=>{
    card_parent.innerHTML+=`
        <div class="our-team">
            <div class="picture">
                <img class="img-fluid" src="img/member/${item.img}" alt="${item.name}-img">
            </div>
            <div class="team-content">
                <h2 class="name">${item.fname} ${item.mname} ${item.lname}</h2>
                <h4 class="title">Batch:${item.batch}</h4>
            </div>
            <ul class="social">
                <li><a href="#" class="fa-brands fa-twitter" aria-hidden="true"></a></li>
                <li><a href="#" class="fa-brands fa-facebook-f" aria-hidden="true"></a></li>
                <li><a href="#" class="fa-brands fa-google-plus-g" aria-hidden="true"></a></li>
            </ul>
        </div>
    `;
});