// var product = [{
//     id: 1,
//     img: './image/sis_5.jpg',
//     name: 'Sunny red+yellow suit  (medium to big size)',//
//     price: 65
// }, {
//     id: 2,
//     img: './image/sis_6.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 3,
//     img: './image/sis.jpg',
//     name: 'Sunny White suit + hat (medium to big size)',//
//     price: 72
// }, {
//     id: 4,
//     img: './image/sis_1.jpg',
//     name: 'Sunny red+black suit + hat (medium to big size)',//
//     price: 65
// }, {
//     id: 5,
//     img: './image/sis_2.jpg',
//     name: 'Sunny black suit (medium to big size)',//
//     price: 65
// }, {
//     id: 6,
//     img: './image/sis_3.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 7,
//     img: './image/sis_4.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 8,
//     img: './image/sis_5.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 9,
//     img: './image/sis_6.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 10,
//     img: './image/sis_7.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 11,
//     img: './image/sis_8.jpg',
//     name: 'Sunny fasion suit (medium to big size)',//
//     price: 65
// }, {
//     id: 12,
//     img: './image/hmoob_1.png',
//     name: 'khaub ncaws hmoob toj siab (medium to big size)',//
//     price: 50
// }, {
//     id: 13,
//     img: './image/hmoob_2.png',
//     name: 'khaub ncaws hmoob toj siab (medium to big size)',//
//     price: 50
// }, {
//     id: 14,
//     img: './image/hmoob_3.webp',
//     name: 'khaub ncaws hmoob toj siab (medium to big size)',//
//     price: 50
// }, {
//     id: 15,
//     img: './image/hmoob_4.jpg',
//     name: 'khaub ncaws hmoob toj siab (small to medium size)',//
//     price: 35
// }, {
//     id: 16,
//     img: './image/hmoob_5.jpg',
//     name: 'khaub ncaws hmoob toj siab (small to medium size)',//
//     price: 35
// }, {
//     id: 17,
//     img: './image/hmoob_6.jpg',
//     name: 'khaub ncaws hmoob toj siab (small to medium size)',//
//     price: 35
// }, {
//     id: 18,
//     img: './image/hmoob_7.jpg',
//     name: 'khaub ncaws hmoob toj siab (small to medium size)',//
//     price: 35
// }, {
//     id: 19,
//     img: './image/hmoob_8.jpg',
//     name: 'khaub ncaws hmoob toj siab (small to medium size)',//
//     price: 35
// }, {
//     id: 20,
//     img: './image/hmoob_9.jpg',
//     name: 'khaub ncaws hmoob toj siab (small to medium size)',//
//     price: 35
// }, {
//     id: 21,
//     img: './image/tsho.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 22,
//     img: './image/tsho_1.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 23,
//     img: './image/tsho_2.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 24,
//     img: './image/tsho_3.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 25,
//     img: './image/tsho_4.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 26,
//     img: './image/tsho_5.webp',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 27,
//     img: './image/tsho_6.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 28,
//     img: './image/tsho_7.jpg',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 29,
//     img: './image/tsho_8.webp',
//     name: 'Tsho khuam hmoob (medium to big size)',//
//     price: 50
// }, {
//     id: 30,
//     img: './image/kausmoom_1.jpg',//
//     name: 'Kaus moom',
//     price: 14
// }, {
//     id: 31,
//     img: './image/kausmoom_2.jpg',//
//     name: 'Kaus moom',
//     price: 24
// }, {
//     id: 32,
//     img: './image/kausmoom_3.jpg',//
//     name: 'Kaus moom',
//     price: 14
// }, {
//     id: 33,
//     img: './image/kausmoom_4.jpg',//
//     name: 'Kaus moom',
//     price: 18
// }, {
//     id: 34,
//     img: './image/kausmoom_5.webp',//
//     name: 'Kaus moom',
//     price: 20
// }, {
//     id: 35,
//     img: './image/kausmoom_6.jpg',//
//     name: 'Kaus moom',
//     price: 12
// }];

var product;

$(document).ready(() => {

    $.ajax({
      method: 'get',
      url: './api/getallproduct.php',
      success: function(response){
        console.log(response)
        if(response.RespCode == 200) {

          product = response.Result;

                var html = '';
          var html1 = '';
          var html2 = '';
          var html3 = '';
          var html4 = '';
          // 0
          for(let i = 0; i<2; i++){
              html += ` <div onclick="openProductDetail(${i})" class="ourSpecials__item">
              <div class="ourSpecials__item__img">
                <img src="./image/${product[i].img}" alt="food img">
              </div>
              <div class="ourSpecials__item__info">
                <h3 class="ourSpecials__item__title">
                ${product[i].name}
                </h3>
                <h4 class="ourSpecials__item__price">$${product[i].price}</h4>
                <div class="ourSpecials__item__stars">
                  <img src="./images/3star.png" alt="3 stars">
                </div>
              </div>
            </div>`;
          }
          $("#Productlist").html(html);
          //1
          for(let i = 2; i<11; i++){
              html1 += ` <div onclick="openProductDetail(${i})" class="dishGrid__item">
              <div class="dishGrid__item__img">
                <img src="./image/${product[i].img}" alt="food img">
              </div>
              <div class="dishGrid__item__info">
                <h3 class="dishGrid__item__title">
                ${product[i].name}
                </h3>
                <h3 class="dishGrid__item__price">$${product[i].price}</h3>
                <div class="dishGrid__item__stars">
                  <img src="./images/3star.png" alt="3 star">
                </div>
              </div>
            </div>`;
          }
          $("#Productlist1").html(html1);
          //2
          for(let i = 11; i<20; i++){
              html2 += ` <div onclick="openProductDetail(${i})" class="dishGrid__item">
              <div class="dishGrid__item__img">
                <img src="./image/${product[i].img}" alt="food img">
              </div>
              <div class="dishGrid__item__info">
                <h3 class="dishGrid__item__title">
                ${product[i].name}
                </h3>
                <h3 class="dishGrid__item__price">$${product[i].price}</h3>
                <div class="dishGrid__item__stars">
                  <img src="./images/3star.png" alt="3 star">
                </div>
              </div>
            </div>`;
          }
          $("#Productlist2").html(html2);
          //3
          for(let i = 20; i<29; i++){
              html3 += ` <div onclick="openProductDetail(${i})" class="dishGrid__item">
              <div class="dishGrid__item__img">
                <img src="./image/${product[i].img}" alt="food img">
              </div>
              <div class="dishGrid__item__info">
                <h3 class="dishGrid__item__title">
                ${product[i].name}
                </h3>
                <h3 class="dishGrid__item__price">$${product[i].price}</h3>
                <div class="dishGrid__item__stars">
                  <img src="./images/3star.png" alt="3 star">
                </div>
              </div>
            </div>`;
          }
          $("#Productlist3").html(html3);
          //4
          for(let i = 29; i<product.length; i++){
              html4 += ` <div onclick="openProductDetail(${i})" class="dishGrid__item">
              <div class="dishGrid__item__img">
                <img src="./image/${product[i].img}" alt="food img">
              </div>
              <div class="dishGrid__item__info">
                <h3 class="dishGrid__item__title">
                ${product[i].name}
                </h3>
                <h3 class="dishGrid__item__price">$${product[i].price}</h3>
                <div class="dishGrid__item__stars">
                  <img src="./images/3star.png" alt="3 star">
                </div>
              </div>
            </div>`;
          }
          $("#Productlist4").html(html4);
        }
      }, error: function(err) {
        console.log(err)
      }
    })
  
    
})

var productindex = 0;
function openProductDetail(index) {
  productindex = index;
  console.log(productindex)
  $("#modalDesc").css("display", "flex")
  $("#mdd-img").attr("src", './image/' + product[index].img)
  $("#mdd-name").text(product[index].name)
 "$",$("#mdd-price").text("$"+(product[index].price))
}

function coloseModal() {
  $(".modal").css("display", "none")
}

var cart = [];
function addtocart() {
    var pass = true;

    for (let i = 0; i < cart.length; i++) {
        if( productindex == cart[i].index ) {
            console.log('found same product')
            cart[i].count++;
            pass = false;
        }
    }

    if(pass) {
        var obj = {
            index: productindex,
            img: product[productindex].img,
            name: product[productindex].name,
            price: product[productindex].price,
            count: 1
        };
        // console.log(obj)
        cart.push(obj)
    }
    console.log(cart)

    Swal.fire({
        icon: 'success',
        title: 'Add ' + product[productindex].name + ' to cart !'
    })
    $("#cartcount").css('display', 'flex').text(cart.length)
  }

  function openCart() {
    $("#modalCart").css("display", "flex")
    rendercart();
  }

  function rendercart() {
    if(cart.length > 0){
      var html ='';
      for(let i = 0; i < cart.length; i++){
        html +=`<div class="cartlist-items">
        <div class="cartlist-left">
          <img src="./image/${cart[i].img}" alt="food img">
          <div class="cartlist-detail">
            <p style="font-size: 1.5vw;">${cart[i].name}</p>
            <h1 style="font-size: 1.2vw;">$${cart[i].price * cart[i].count}</h1>
          </div>
        </div>
        <div class="cartlist-right">
          <p onclick="deinitems('-', ${i})" class="btnc">-</p>
          <p d="countitems${i}" style="margin: 0 15px;">${cart[i].count}</p>
          <p onclick="deinitems('+', ${i})" class="btnc">+</p> 
        </div>
    </div>`;      
    }
      $("#mycart").html(html)
    }
    else{
      $("#mycart").html("<h1>Not found product list</h1>")
    }
  }

  function deinitems(action, index) {
    if(action == '-') {
        if(cart[index].count > 0) {
            cart[index].count--;
            $("#countitems"+index).text(cart[index].count)

            if(cart[index].count <= 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Are you sure to delete?',
                    showConfirmButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel'
                }).then((res) => {
                  if(res.isConfirmed) {
                     cart.splice(index, 1) 
                     console.log(cart)
                     rendercart();
                     $("#cartcount").css('display','flex').text(cart.length)
                     
                     if(cart.length <= 0) {
                        $("#cartcount").css('display','none')
                     }
                  }  
                  else {
                    cart[index].count++;
                    $("#countitems"+index).text(cart[index].count)
                    rendercart();
                  }
                })
            }
            rendercart();
        }
        
    }
    else if(action == '+') {
        cart[index].count++;
        $("#countitems"+index).text(cart[index].count)
        rendercart();
    }
}

function buynow() {
  $.ajax({
    method: 'post',
    url: './api/buynow.php',
    data: {
        product: cart
    }, success: function(response) {
        console.log(response)
        if(response.RespCode == 200) {
            Swal.fire({
                icon: 'success',
                title: 'Thank you',
                html: ` <p> Amount : ${response.Amount.Amount}</p>
                        <p> Shipping : ${response.Amount.Shipping}</p>
                        <p> Vat : ${response.Amount.Vat}</p>
                        <p> Netamount : ${response.Amount.Netamount}</p>
                        `
            }).then((res) => {
                if(res.isConfirmed) {
                    cart = [];
                    coloseModal();
                    $("#cartcount").css('display','none')
                }
            })
        }
        else {
            Swal.fire({
                icon: 'error',
                title: 'Something is went wrong!'
            })
        }
    }, error: function(err) {
        console.log(err)
    }
})
}