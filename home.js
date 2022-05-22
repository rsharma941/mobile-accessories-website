
// image collage
const collageimages=[...document.querySelectorAll('.collage-image')]
collageimages.map((item,i)=>{
  item.addEventListener('mouseover',()=>{
    collageimages.map((image,index) => {
      if(index != i){
        image.style.filter=`blur(10px)`;
        item.style.zIndex = 2;
      }
    })
  })
  item.addEventListener('mouseleave',()=>{
    collageimages.map((image,index)=>{
      image.style = null;
    })
  })
})


