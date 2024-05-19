

function filteringGallery(galleryItem){
  let imgGallery = document.querySelector(galleryItem);
  let filterBtns= imgGallery.querySelectorAll('.bwdfg-gallery-menu button');
  let galleryImg= imgGallery.querySelectorAll('.bwdfg-grid .bwdfg-grid-item');


  for( let btn of filterBtns){

    btn.addEventListener('click',()=>{
      for(let btnItem of filterBtns){
        btnItem.classList.remove('active')
      }
      btn.classList.add('active');
     let filterValue =  btn.getAttribute('data-filter');
      for(let imgItem of galleryImg){
        if(filterValue == '*'){
          imgItem.classList.add('img-galleryItem-active');
        }
        else if(imgItem.classList.contains(filterValue)){

          for(let imgSingleItem of galleryImg){
            if(!imgSingleItem.classList.contains(filterValue)){
              imgSingleItem.classList.remove('img-galleryItem-active');

            }
            
          }
          imgItem.classList.add('img-galleryItem-active');
          
        }
      }
    })
  }
}

filteringGallery('.bwdfg-gallery-filtering-one')


let filterRow = document.querySelector('.bwdfg-gallery-filtering-one .row>*')
let rowStyles = getComputedStyle(filterRow,null).getPropertyValue("padding-left");
console.log(rowStyles);
