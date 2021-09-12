<?php
require("includes/headersec.html");
?>
<script>
 var activeNAV = "#about";
 var activeNAV2 = "#about2";
</script>
<h1 class="mySelf">about me</h1>
<article class="first-article">
    <figure>
        <img src="backgrounds/profile.jpg" alt="profile" srcset="" class="profile">
        <figcaption>
            Micah Sobokie
        </figcaption>
    </figure>
<p class="aboutMySelf">
    Hi there, my name is micah sobokie, i am a male and a <span>Nigerian</span>. I stay at <span>igando-egan, alimosho, Lagos state.</span> I am a <span class="status"></span> of age <span class="ageStatus"></span> My home town is <span>yenegoa town</span> which is located in <sspan>Bayelsa state</span>. I have a lot of skills which are :
  </p>
    <ul type="disc">
        <li>coding</li>
        <li>photos editing</li>
        <li>dancing</li>
        <li>drawing</li>
        <li>communication skills</li>
    </ul> 
<p class="aboutMySelf">
the skill i love the most is coding. I code almost all my leisure time. I started coding since when i was 12 years of age , i was at <abbr title="senior secondary school 1">SSS1</abbr> (Senior Secondary School 1) at <span>JONBITRICE COLLEGE</span> located at Dosu-Ekunrin Road, Egan-Igando, Lagos, Nigeria. As at that time , i was based on only web development. I watched alot of youtube Tutorials, Read alot of books , Downloaded so many mobile application, visited so many websites that teaches code. Examples of websites I recommend for Learning web development from scratch are:
    </p>
    <ul type="disc">
        <li>sololearn</li>
        <li>udemy</li>
        <li>freecodecamp</li>
        <li>w3schools</li>
        <li>stackOverflow</li>
    </ul> 
    <hr>
    <h2 class="mission">mission</h2>
    <p class="aboutMySelf" style="margin-bottom:10px;">
   my mission is to encourage people to learn to code.
    </p>
    <hr>
    <h2 class="mission">visions</h2>
    <p class="aboutMySelf">
   my visions are to :
    </p>
    <ul type="disc" style="margin-bottom:10px;">
        <li>start the best cybersecurity company globally.</li>
        <li>manage an automated device company.</li>
        <li>be a known developer globally.</li>
        <li>start a programming institution in Nigeria.</li>
    </ul> 
    <hr>
</article>
<script>
   const date = new Date();

     const year =date.getFullYear();

     const rA = 2007;


    const a =`${year - rA}` ;
    
    var s;
    if ( a <= 12) {
         var s = "child";
        } 
        else if(a > 12 && a < 18) {
            var s = "teenager";
        }
        else{
            var s = "adult";
        }

  document.querySelector(".status").innerText=`${s}`;
  document.querySelector(".ageStatus").innerText=`${a}`;
</script>
<?php
require("includes/footersec.html");
?>