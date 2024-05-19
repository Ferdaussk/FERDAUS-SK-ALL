
// ========================================================
"use strict";
function BWDProgressBar(progressWrapper){
	let bwdProgressBox = progressWrapper.querySelectorAll('.bwd_progress_box');
	if(!bwdProgressBox.length){
		bwdProgressBox = progressWrapper.querySelectorAll('.bwd-progress');
	}
	for(let pbBox of bwdProgressBox){
		let allProgressBar = pbBox.querySelector('.bwd-progress .bwd_progress-bar');
		let allPbVal = pbBox.querySelector('.bwd_pb_val_con').innerText;
		allPbVal = parseInt(allPbVal);
		allProgressBar.style.overflow ='visible';
		allProgressBar.style.width = allPbVal + '%';
	}
}
// scroll to trigger
function scrollToPlayPB(PB){
	function playWithScrollPb(){
		let windowHeight = window.innerHeight / 2;
		let PBTopDsc = PB.getBoundingClientRect().top;
		if(windowHeight > PBTopDsc){
				BWDProgressBar(PB)
			document.removeEventListener("scroll", playWithScrollPb);
		}
	}
	document.addEventListener('scroll',playWithScrollPb);
}
let PbItem = document.querySelector('.bwd_pb_common');

let AllPbWrappers = document.querySelectorAll('.bwd_pb_common');
for(let item of AllPbWrappers){
	scrollToPlayPB(item);
}