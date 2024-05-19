	"use strict";

	// const unfold_desc = document.querySelector('.bwduf-unfold-2-area .bwduf-unfold-description');
	// const unfold_btn = document.querySelector('.bwduf-unfold-2-area .bwduf-unfold-btn');

	// unfold_btn.addEventListener('click', ()=>{

	// 	unfold_desc.classList.toggle('unfold-show-more');

	// 	if(unfold_btn.innerText === "Read More"){
	// 		unfold_btn.innerText = "Read Less...";
	// 	}else {
	// 		unfold_btn.innerText = "Read More";
	// 	}
		
	// });

	
function unfoldText(unfoldWrapper){
	const unfoldContainer = document.querySelector(unfoldWrapper);
	
	const unfold_desc = unfoldContainer.querySelector('.bwduf-unfold-description');
	const unfold_btn = unfoldContainer.querySelector('.bwduf-unfold-btn');

	unfold_btn.addEventListener('click',()=>{
		unfold_desc.classList.toggle('unfold-show-more');

		if(unfold_btn.innerText === "Read More"){
			unfold_btn.innerText = "Read Less...";
		}else {
			unfold_btn.innerText = "Read More";
		}
	})
};

unfoldText('.bwduf-unfold-1-area');	
unfoldText('.bwduf-unfold-2-area');	