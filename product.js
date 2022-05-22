let ratingstarinput=[...document.querySelectorAll('.rating-star')];
ratingstarinput.map((star,index)=>{
    star.addEventListener('click',()=>{
        for(let i=0;i<5;i++){
            if(i<=index){
                ratingstarinput[i].src=`img/fill star.png`;
            }else{
                ratingstarinput[i].src=`img/no fill star.png`;
            }
        }
    })
})