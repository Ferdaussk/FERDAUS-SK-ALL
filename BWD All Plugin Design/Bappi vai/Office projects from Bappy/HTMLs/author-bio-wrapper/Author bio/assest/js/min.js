
"use strict";

function BWDVideoPopUp(videoBtn){
  // pop up element styles=============
let body = document.querySelector("body");


videoBtn.addEventListener("click", (e) => {
  e.preventDefault();

  //   let popUpVideoUrl 
  let popUpYoutubeVideoUrl = videoBtn.getAttribute("data-popup-youtube-url");
  let popUpCustomVideoUrl = videoBtn.getAttribute("data-popup-custom-url");
  let popUpVideoWrapper;

  if (popUpCustomVideoUrl) {
    // create i frame tag
    popUpVideoWrapper = document.createElement("video");
    let popUpVideoSource = document.createElement("source");
    popUpVideoWrapper.setAttribute("controls", "");
    popUpVideoSource.setAttribute("src", popUpCustomVideoUrl);
    popUpVideoSource.setAttribute("type", "video/ogg");
    popUpVideoWrapper.appendChild(popUpVideoSource);
  } else if (popUpYoutubeVideoUrl) {
    let youTubeVUrl;
    if (popUpYoutubeVideoUrl.includes("watch")) {
      let videoIdFirstPosition = popUpYoutubeVideoUrl.indexOf("?v=") + 3;
      let videoIdLastPosition = popUpYoutubeVideoUrl.indexOf("&");
      let videoId = popUpYoutubeVideoUrl.substring(videoIdFirstPosition,videoIdLastPosition);
      youTubeVUrl = `https://www.youtube.com/embed/${videoId}`;
    } else if (popUpYoutubeVideoUrl.includes("youtu.be")) {
      let shareVideoUrl = popUpYoutubeVideoUrl + "mb";
      let videoIdFirstPosition = shareVideoUrl.indexOf("youtu.be/") + 9;
      let videoIdLastPosition = shareVideoUrl.lastIndexOf("mb");
      let videoId = shareVideoUrl.substring(videoIdFirstPosition,videoIdLastPosition);
      youTubeVUrl = `https://www.youtube.com/embed/${videoId}`;
    } else if(popUpYoutubeVideoUrl.includes("embed")){
      youTubeVUrl = popUpYoutubeVideoUrl;
    }

    // create i frame tag
    popUpVideoWrapper = document.createElement("iframe");
    popUpVideoWrapper.setAttribute("src", youTubeVUrl);
    popUpVideoWrapper.setAttribute(
      "allow",
      "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    );
  }
  popUpVideoWrapper.setAttribute("class", "bwd-video-wrapper");

  //pop up before background
  let popUpBefore = document.createElement("div");
  popUpBefore.setAttribute("class", "bwd-popup-before");


  // pop up element
  let popUpElem = document.createElement("div");
  popUpElem.setAttribute("class", "bwd-popUpBody");


  //cross button
  let popUpCrossUp = document.createElement("i");
  popUpCrossUp.setAttribute("class", "fa fa-times bwd-popup-cross-btn");

  //all append child
  popUpElem.appendChild(popUpCrossUp);
  popUpElem.appendChild(popUpVideoWrapper);
  body.appendChild(popUpBefore);
  body.appendChild(popUpElem);

  // click on cross btn to close popup
  popUpCrossUp.addEventListener("click", (e) => {
    e.preventDefault();
    body.removeChild(popUpElem);
    body.removeChild(popUpBefore);
  });

  popUpBefore.addEventListener("click", (e) => {
    e.preventDefault();
    body.removeChild(popUpElem);
    body.removeChild(popUpBefore);

  });

});
}
let videoBtn = document.querySelector(".bwd-author-vedio");

BWDVideoPopUp(videoBtn)