//navbar
const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (scrollY >= 180) {
    navbar.classList.add("bg");
  } else {
    navbar.classList.remove("bg");
  }
});

const createNavbar=()=>{
    let navbar=document.querySelector('.navbar');
    navbar.innerHTML+=`
    <ul class="links-container">
        <li class="link-item"><a href="index.html" class="link active">home</a></li>
        <li class="link-item"><a href="search.html" class="link">product</a></li>
        <li class="link-item"><a href="about.html" class="link">about us</a></li>
        <li class="link-item"><a href="contact.html" class="link">contact us</a></li>
      </ul>
      <div class="user-interactions">
        <div class="cart">
          <img src="img/cart.png" class="cart-icon" alt="" />
          <span class="cart-item-count">00</span>
        </div>
        <div class="user">
          <img src="img/user.png" class="user-icon" alt="" />
          <div class="user-icon-popup">
            <p>login to your account</p>
            <a href="login.php">login</a>
          </div>
        </div>
      </div>
    
    `
}
createNavbar();
//user-icon-popup
let userIcon=document.querySelector('.user-icon');
let userPopupIcon=document.querySelector('.user-icon-popup');
userIcon.addEventListener('click',()=> userPopupIcon.classList.toggle('active'))
// let text=userPopupIcon.querySelector('p');
// let actionbtn=userPopupIcon.querySelector('a');

    
