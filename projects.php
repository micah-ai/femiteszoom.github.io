<?php
require("includes/headersec.html");
?>
<h1 class="mySelf">projects</h1>
    <div class="project-body">
        <section class="๐ฅ"> 
            <h1 class="๐ง">Graphics</h1>
        <div class="๐งบ">
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
            <div class="๐ extra"></div>
        </div>
        </section>

           <!-- this is for website designing pics-->

        <section class="๐ฅ"> 
            <h1 class="๐ง">web-design</h1>
        <div class="๐งบ">
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
            <div class="๐ฉ extra"></div>
        </div>
        </section>

    </div>
        <script>

        const G = document.getElementsByClassName("๐");
        for (let i = 0; i < G.length; i++) {
            document.getElementsByClassName("๐")[i].innerHTML=
                                    `<img src='projects/praise${i}.jpg' class='โ' alt='no photos available'>
                                                                <p class=๐ฎ><data  id=${i}>view</data></p>`;
        }

        const W = document.getElementsByClassName("๐ฉ");
        for (let j = 0; j < W.length; j++) {
            document.getElementsByClassName("๐ฉ")[j].innerHTML=
                                    `<img src='projects/graph${j}.png' class='๐' alt='no photos available'>
                                                                <p class=๐ฎ><data  id=${j+G}>view</data></p>`;
        }
        
        const activeNAV = "#projects";
            const activeNAV2 = "#projects2";


	//selecting all the images
   let galleryImages = document.querySelectorAll(".โ");
   let WebsitesImgs = document.querySelectorAll(".๐");

let getLatestOpenedImg;

let windowWidth = window.innerWidth;

//adding the function to each image

if (galleryImages) {
		galleryImages.forEach((images, index)=>{
				 images.onclick = ()=>{
				   let getElementSrc = images.src;
					 let getImgSrcPos = getElementSrc.split("http://localhost/Gall_Biography/projects/");
					 let setNewImageSrc = getImgSrcPos[1];
					 
					 getLatestOpenedImg = index + 1;
          //creating a window for the main gallery
					 let container = document.body;
					 let newImgWindow = document.createElement("div");
					 container.appendChild(newImgWindow);
					 newImgWindow.setAttribute("class","img-window");
					 newImgWindow.setAttribute("onclick","closeImg()");
          
					//creating the img modal src and inserting it
					 let newImg =  document.createElement("img");
					 newImgWindow.appendChild(newImg);
					 newImg.setAttribute("src","projects/" + setNewImageSrc);
					 newImg.setAttribute("id","current-img");

// TO PREVENT GETTING THE INDEX OF THE  IMAGE TO BE 0....  IT JUST MAKES IT LOAD FIRST	
					 newImg.onload=()=>{
           let imgWidth = this.width;
					 let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 80;

					 //buttons that are for changing the img forwards
					 let newNextBtn =  document.createElement("a");
					 let btnNextText =  document.createTextNode(">");
					 newNextBtn.appendChild(btnNextText);
					 container.appendChild(newNextBtn);
					 newNextBtn.setAttribute("class","img-btn-next");
					 newNextBtn.setAttribute("onclick","changeImg(1)");
					 newNextBtn.style.cssText = "right:0px;"; 
            
						
						 //buttons that are for changing the img backwards
						 let newPrevBtn =  document.createElement("a");
					 let btnPrevText =  document.createTextNode("<");
					 newPrevBtn.appendChild(btnPrevText);
					 container.appendChild(newPrevBtn);
					 newPrevBtn.setAttribute("class","img-btn-prev");
					 newPrevBtn.setAttribute("onclick","changeImg(0)");
					 newPrevBtn.style.cssText = "left:0px;";

					 }
      
				 }
		});			 
}

function changeImg(changeDir){
	document.querySelector("#current-img").remove();

  let getImgWindow = document.querySelector(".img-window");
	let newImg= document.createElement("img");
	getImgWindow.appendChild(newImg);

	let calcNewImg;
	if(changeDir === 1){
		calcNewImg = getLatestOpenedImg + 1 ;
		if (calcNewImg > galleryImages.length) {
			calcNewImg = 1;
		}}else if(changeDir === 0){
		calcNewImg = getLatestOpenedImg - 1 ;
		if (calcNewImg < 1) {
			calcNewImg = galleryImages.length;
		}
	}
  
	newImg.setAttribute("src","projects/praise"+ calcNewImg + ".jpg");
	newImg.setAttribute("id","current-img");

	getLatestOpenedImg = calcNewImg;
	newImg.onload=function(){
           let imgWidth = this.width;
					 let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 80;
 

					 let nextBtn = document.querySelector(".img-btn-next");
					 nextBtn.style.cssText = "right:0px;";

					 let prevBtn = document.querySelector(".img-btn-prev");
					prevBtn.style.cssText = "left:0px;";
	}

}

/*-----------------------------for websites images------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%-----------------
 -------------------------------๐๐๐๐๐๐๐๐----------------------------------๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ----------------
 -------------------------------๐ก๐ก๐ก๐ก๐ก๐ก๐ก๐ก----------------------------------๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ๐ฅ----------------*/

 if (WebsitesImgs) {
		WebsitesImgs.forEach((images, index)=>{
				 images.onclick = ()=>{
				   let getElementSrc = images.src;
					 let getImgSrcPos = getElementSrc.split("http://localhost/Gall_Biography/projects/");
					 let setNewImageSrc = getImgSrcPos[1];
					 
					 getLatestOpenedImg = index + 1;
          //creating a window for the main gallery
					 let container = document.body;
					 let newImgWindow = document.createElement("div");
					 container.appendChild(newImgWindow);
					 newImgWindow.setAttribute("class","img-window");
					 newImgWindow.setAttribute("onclick","closeImg()");
          
					//creating the img modal src and inserting it
					 let newImg =  document.createElement("img");
					 newImgWindow.appendChild(newImg);
					 newImg.setAttribute("src","projects/" + setNewImageSrc);
					 newImg.setAttribute("id","current-img");

// TO PREVENT GETTING THE INDEX OF THE  IMAGE TO BE 0....  IT JUST MAKES IT LOAD FIRST	
					 newImg.onload=()=>{
                     let imgWidth = this.width;
					 let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 80;

					 //buttons that are for changing the img forwards
					 let newNextBtn =  document.createElement("a");
					 let btnNextText =  document.createTextNode(">");
					 newNextBtn.appendChild(btnNextText);
					 container.appendChild(newNextBtn);
					 newNextBtn.setAttribute("class","img-btn-next");
					 newNextBtn.setAttribute("onclick","changeWebImg(1)");
					 newNextBtn.style.cssText = "right:0px;"; 
            
						
						 //buttons that are for changing the img backwards
						 let newPrevBtn =  document.createElement("a");
					 let btnPrevText =  document.createTextNode("<");
					 newPrevBtn.appendChild(btnPrevText);
					 container.appendChild(newPrevBtn);
					 newPrevBtn.setAttribute("class","img-btn-prev");
					 newPrevBtn.setAttribute("onclick","changeWebImg(0)");
					 newPrevBtn.style.cssText = "left:0px;";

					 }
      
				 }
		});			 
}

function closeImg(){
	document.querySelector(".img-window").remove();
	document.querySelector(".img-btn-next").remove();
	document.querySelector(".img-btn-prev").remove();

}

function changeWebImg(changeDir){
	document.querySelector("#current-img").remove();

  let getImgWindow = document.querySelector(".img-window");
	let newImg= document.createElement("img");
	getImgWindow.appendChild(newImg);

	let calcNewImg;
	if(changeDir === 1){
		calcNewImg = getLatestOpenedImg + 1 ;
		if (calcNewImg > WebsitesImgs.length) {
			calcNewImg = 1;
		}}else if(changeDir === 0){
		calcNewImg = getLatestOpenedImg - 1 ;
		if (calcNewImg < 1) {
			calcNewImg = WebsitesImgs.length;
		}
	}
  
	newImg.setAttribute("src","projects/graph"+ calcNewImg + ".png");
	newImg.setAttribute("id","current-img");

	getLatestOpenedImg = calcNewImg;
	newImg.onload=function(){
           let imgWidth = this.width;
					 let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 80;
 

					 let nextBtn = document.querySelector(".img-btn-next");
					 nextBtn.style.cssText = "right:0px;";

					 let prevBtn = document.querySelector(".img-btn-prev");
					prevBtn.style.cssText = "left:0px;";
	}

}

function removeSelf(){
			document.querySelector(".phone-navbar-div").remove();
		}



        </script>
            <?php
            require("includes/footersec.html");
            ?>