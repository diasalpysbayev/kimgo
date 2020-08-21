buttonItems = document.getElementsByClassName("btn");
for(let buttonItem of buttonItems){
  buttonItem.addEventListener("click", function(){
    if(!buttonItem.classList.contains("basket")){
      buttonItem.classList.add("basket");
      let cost = buttonItem.getElementsByClassName("btn__text")[0];
      element = cost.getElementsByTagName("span")[0];
      let shop = document.getElementById("shop_sum");
      let shop_sum_str = shop.innerText;
      let button_sum = parseInt(cost.innerText.substring(0, cost.innerText.length -2).replace(/\s+/g, ''), 10);
      let shop_sum = parseInt(shop_sum_str.substring(0, shop_sum_str.length -2).replace(/\s+/g, ''),10);
      let total_sum = (button_sum + shop_sum).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + shop_sum_str.substring(shop_sum_str.length -2, shop_sum_str.length);
      shop.textContent = total_sum;
      // document.getElementById("chosen_img").src = "img/catalog/in_basket.svg";
      document.getElementById("chose_img").style.display = "none";
      document.getElementById("chosen_img").style.display = "block";
    }
  }) 
}