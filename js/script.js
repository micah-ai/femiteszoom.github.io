
// selecting all the variables that i will need
const harmburger = document.querySelector(".menue");
const body = document.querySelector("body");
const createdDiv = document.querySelector("div.MviewTab");
const createdul = document.querySelector("ul.MulTab");

//what happens when the user click on the harmburger menu for the phone(mobile phone) view
harmburger.addEventListener("click",()=>{
  //the new tab that will be created
 const MviewTab = document.createElement("div");

 const list = document.createElement("ul");

 //what to do when the li is click instead of the a attribute

 const homeli = document.createElement("li");

 const aboutli = document.createElement("li");

 const projectsli = document.createElement("li");

 const contact = document.createElement("li");

 const [homeevt,aboutevt,projectsevt,contactevt]=["home","about.php","projects.php","contact.php"];
 homeli.addEventListener("click",function click(){
   window.open("index.html","_self");
 });
aboutli.addEventListener("click",function click(){
  window.open(`${aboutevt}`,"_self");
});
projectsli.addEventListener("click",function click(){
  window.open(`${projectsevt}`,"_self");
});
contact.addEventListener("click",function click(){
  window.open(`${contactevt}`,"_self");
});


 //setting the text-content of the li
 homeli.innerHTML="<a href='index.html' target='_self' lang='en' id='home2'>home</a>";
 aboutli.innerHTML="<a href='about.php' target='_self' lang='en' id='about2'>about</a>";
 projectsli.innerHTML="<a href='projects.php' target='_self' lang='en' id='projects2'>projects</a>";
 contact.innerHTML="<a href='contact.php' target='_self' hreflang='en' id='contact2'>contact</a>";

//adding the ul to the div
MviewTab.appendChild(list);
 //adding the li to the ul
 list.appendChild(homeli);
 //adding the li to the ul
 list.appendChild(aboutli);
 //adding the li to the ul
 list.appendChild(projectsli);
 //adding the li to the ul
 list.appendChild(contact);
 //adding the mviewtab as a child to the body
  body.appendChild(MviewTab);
   
  //giving the tab new attributes

  MviewTab.setAttribute("class","MviewTab");
  MviewTab.setAttribute("id","sideTab");

  //phoneul
  list.setAttribute("class","MulTab");

   //li
   homeli.setAttribute("class","u");
   aboutli.setAttribute("class","u");
   projectsli.setAttribute("class","u");
   contact.setAttribute("class","u");

 
 $("window").ready(function(){
  const MviewTabDesign = $(".MviewTab");
   
  //time for the css part
  MviewTabDesign.css({
    "width":"100%",
    "height":"100%",
    "position":"fixed",
    "top":"0",
    "left":"0",
    "background":"rgba(0,0,0,0.8) no-repeat center",
    "z-index":"1000000",
    "transition":"0.6s",
    "display":"flex",
    "justify-content":"center",
    "align-items":"center"
  },1000);
   
  //removing the MviewTab when a user clicks on it

  MviewTabDesign.click(()=>{
  $(".MviewTab").remove();
  });

 });
});