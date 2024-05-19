


 const bottomMarginAdd= ()=> {
  const Team9Item = document.querySelectorAll('.bwdff-team-9 .bwdff-team-item');
  
    const Team9Bio = document.querySelector('.bwdff-team-9 .bwdff-team-front .bwdff-member-bio');
   let BiosHeight = Team9Bio.clientHeight / 2;

   for(let item of Team9Item){
    item.style.marginBottom = (BiosHeight + 15) + 'px';
   }
  
 }
 bottomMarginAdd();


