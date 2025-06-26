// localStorage.clear();

// top bar
(function topbar() {
  let promo = document.querySelectorAll(".promo_content");
  let currentIndex = 0;

  function fadeOut() {
    let current_promo = promo[currentIndex];
    let nextIndex = (currentIndex + 1) % promo.length;
    let next_promo = promo[nextIndex];

    current_promo.classList.remove("show");
    setTimeout(() => {
      current_promo.classList.add("d-none");
      next_promo.classList.remove("d-none");
      next_promo.classList.add("show");
      currentIndex = nextIndex;
    }, 1000);
  }

  setInterval(fadeOut, 5000);
})();

// ẩn nút
(function hidden_btn() {
  let toggler = document.querySelector(".navbar-toggler");
  let icons = document.querySelectorAll(".icon");

  toggler.addEventListener("click", () => {
    icons.forEach((icon) => {
      icon.classList.toggle("d-none");
    });
  });
})();

// ////////////////////////
const Lproduct__img = document.querySelectorAll(".Lproduct__img");
if (Lproduct__img) {
  Lproduct__img.forEach(function (img) {
    img.addEventListener("mouseenter", function () {
      let id = img.id;
      img.src = "image/" + id + "_hover.jpg";
    });
    img.addEventListener("mouseleave", function () {
      let id = img.id;
      img.src = "image/" + id + ".jpg";
    });
  });
}

const LitemList = {
  balo__001: {
    name: "Balo Chuột",
    price: 1010000,
    photo: "./image/balo__001.jpg",
  },
  balo__002: {
    name: "Balo Trâu",
    price: 1020000,
    photo: "./image/balo__002.jpg",
  },
  balo__003: {
    name: "Balo Hổ",
    price: 1030000,
    photo: "./image/balo__003.jpg",
  },
  balo__004: {
    name: "Balo Mèo",
    price: 1040000,
    photo: "./image/balo__004.jpg",
  },
  balo__005: {
    name: "Balo Rồng",
    price: 1050000,
    photo: "./image/balo__005.jpg",
  },
  balo__006: {
    name: "Balo Rắn",
    price: 1060000,
    photo: "./image/balo__006.jpg",
  },
  balo__007: {
    name: "Balo Ngựa",
    price: 1070000,
    photo: "./image/balo__007.jpg",
  },
  balo__008: {
    name: "Balo Dê",
    price: 1010000,
    photo: "./image/balo__008.jpg",
  },
  balo__009: {
    name: "Balo Khỉ",
    price: 1090000,
    photo: "./image/balo__009.jpg",
  },
  balo__0010: {
    name: "Balo Gà",
    price: 1100000,
    photo: "./image/balo__0010.jpg",
  },
  balo__0011: {
    name: "Balo Chó",
    price: 1110000,
    photo: "./image/balo__0011.jpg",
  },
  balo__0012: {
    name: "Balo Heo",
    price: 1120000,
    photo: "./image/balo__0012.jpg",
  },
};
const Lbtn = document.querySelectorAll(".Lproduct__btn");
if (Lbtn) {
  Lbtn.forEach(function (btn) {
    btn.addEventListener("click", function () {
      let id = btn.parentElement.parentElement.parentElement.querySelector(".Lproduct__img").id;
      if (!window.localStorage.getItem(id)) {
        alert("Đặt hàng thành công");
        window.localStorage.setItem(id, 1);
        countP(increase);
      } else {
        let currentValue = parseInt(window.localStorage.getItem(id));
        if (currentValue == 100) {
          alert("Số lượng đặt đã quá 100 sản phẩm");
          window.localStorage.setItem(id, 100);
        } else {
          alert("Đặt hàng thành công");
          window.localStorage.setItem(id, currentValue + 1);
          countP(increase);
        }
      }
    });
  });
}

function showCart() {
  let keys = Object.keys(localStorage);
  // console.log(keys);
  let Ltbody = document.querySelector(".Lcart__table tbody");
  if (Ltbody) {
    Ltbody.innerHTML = "";
  }
  keys.forEach(function (key) {
    if (key != "count") {
      let photo = LitemList[key].photo;
      let name = LitemList[key].name;
      let price = LitemList[key].price;
      let value = parseInt(window.localStorage.getItem(key));
      let sum = price * value;
      let tr = document.createElement("tr");
      tr.classList.add("align-baseline", "text-start");
      tr.innerHTML = '<td class="w-25 d-md-table-cell d-none">' + '<img src="' + photo + '" alt="" class="Lcart__img w-50" />' + "</td>" + "<td>" + '<p class="Lcart__name">' + name + "</p>" + "</td>" + "<td>" + '<p class="Lcart__price">' + "<span>" + price.toLocaleString("vi-VN", { style: "currency", currency: "VND" }) + "</span>" + "</p>" + "</td>" + "<td>" + '<input type="number" min="1" max="100" class="Lcart__num border-black w-75" value="' + value + '" />' + " </td>" + "<td>" + '<p class="Lcart__totalprice">' + "<span>" + sum.toLocaleString("vi-VN", { style: "currency", currency: "VND" }) + "</span>" + "</p>" + "</td>" + "<td>" + '<button type="button" class="Lcart__delete btn btn-dark" id="' + key + '">Xóa</button>' + "</td>";
      if (Ltbody) {
        Ltbody.appendChild(tr);
      }
    }
  });
  inputChange();
  deleteCart();
  totalCart();
}
function inputChange() {
  let inputs = document.querySelectorAll(".Lcart__num");
  inputs.forEach(function (input) {
    input.addEventListener("change", function () {
      let id = input.parentElement.parentElement.querySelector(".Lcart__delete").id;
      let currentValue = parseInt(window.localStorage.getItem(id));
      let value = parseInt(input.value);
      let price = parseInt(input.parentElement.parentElement.querySelector(".Lcart__price span").innerText.replace(/[^0-9]/g, ""));
      let sum = value * price;
      input.parentElement.parentElement.querySelector(".Lcart__totalprice span").textContent = sum.toLocaleString("vi-VN", { style: "currency", currency: "VND" });
      window.localStorage.setItem(id, value);
      let x = value - currentValue;
      countP(x);
      totalCart();
    });
  });
}
function deleteCart() {
  let deletebtns = document.querySelectorAll(".Lcart__delete");
  if (deletebtns) {
    deletebtns.forEach(function (deletebtn) {
      deletebtn.addEventListener("click", function () {
        let id = deletebtn.id;
        let value = parseInt(window.localStorage.getItem(id)) || 0;
        countP(-value);
        window.localStorage.removeItem(id);
        deletebtn.parentElement.parentElement.remove();
        totalCart();
      });
    });
  }
}
function totalCart() {
  let trs = document.querySelectorAll(".Lcart__table tbody tr");
  let sum = 0;
  trs.forEach(function (tr) {
    sum = sum + parseInt(tr.querySelector(".Lcart__totalprice span").innerText.replace(/[^0-9]/g, ""));
  });
  let voucher = document.querySelector(".Lvoucher");
  let discount = 0;
  if (voucher) {
    if (voucher.value == "BALOVUIVE") {
      discount = sum * 0.15;
      document.querySelector(".Lvoucher__desc").innerText = "Giảm giá 15%";
      document.querySelector(".Lcart__discount").innerText = discount.toLocaleString("vi-VN", { style: "currency", currency: "VND" });
    } else {
      document.querySelector(".Lvoucher__desc").innerText = "Giảm giá";
      document.querySelector(".Lcart__discount").innerText = (0).toLocaleString("vi-VN", { style: "currency", currency: "VND" });
    }
  }
  let stringSum = sum.toLocaleString("vi-VN", { style: "currency", currency: "VND" });
  let sumMoney = document.querySelector(".Lcart__sum--money");
  if (sumMoney) {
    sumMoney.innerText = stringSum;
  }
  let money = document.querySelector(".Lcart__money");
  if (money) {
    money.innerText = (sum - document.querySelector(".Lcart__discount").innerText.replace(/[^0-9]/g, "")).toLocaleString("vi-VN", { style: "currency", currency: "VND" });
  }
}
showCart();
const pay = document.querySelector(".Lcart__sum--btn");
if (pay) {
  pay.addEventListener("click", function () {
    alert("Số tiền bạn cần trả là " + document.querySelector(".Lcart__money").innerText);
    window.localStorage.clear();
    location.reload();
  });
}
let Lvoucher__btn = document.querySelector(".Lvoucher__btn");
if (Lvoucher__btn) {
  Lvoucher__btn.addEventListener("click", function () {
    totalCart();
  });
}

window.onstorage = () => {
  showCart();
  countProduct = parseInt(window.localStorage.getItem("count")) || 0;
  console.log(countProduct);
};

function changeNumOfProduct(product) {
  document.querySelector('#shopping_cart span').textContent = product || 0;
}

// localStorage.clear();
let countProduct = parseInt(window.localStorage.getItem("count")) || 0;
changeNumOfProduct(countProduct);
function countP(x) {
  let value = parseInt(window.localStorage.getItem("count")) || 0;
  window.localStorage.setItem("count", value + x);
  countProduct = parseInt(window.localStorage.getItem("count"));
  changeNumOfProduct(countProduct);
}
// console.log(countProduct);
const increase = 1;
const decrease = -1;

// Kiểm tra thông tin góp ý 
function contactValidate(frm) {
  // Xóa lỗi cũ
  document.getElementById("error-email").innerText = "";
  document.getElementById("error-fullname").innerText = "";
  document.getElementById("error-feedback").innerText = "";

  var isValid = true;

  var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!emailReg.test(frm.email.value)) {
    document.getElementById("error-email").innerText = "Vui lòng nhập email hợp lệ.";
    isValid = false;
  }

  if (frm.fullname.value.length < 4) {
    document.getElementById("error-fullname").innerText = "Họ tên có tối thiểu 4 ký tự.";
    isValid = false;
  }

  if (frm.feedback.value.length < 10) {
    document.getElementById("error-feedback").innerText = "Nội dung góp ý có tối thiểu 10 ký tự.";
    isValid = false;
  }

  if (frm.feedback.value.length > 200) {
    document.getElementById("error-feedback").innerText = "Nội dung góp ý có tối đa 200 ký tự.";
    isValid = false;
  }

  if (!isValid) return false;

  // Nếu hợp lệ
  alert("Đã gửi dữ liệu liên hệ.");
  return true;
}


//Đăng Ký JS
function validatePassword() {
  var password1 = document.getElementById("Password1").value;
  var password2 = document.getElementById("Password2").value;

  if (password1 !== password2) {
      alert("Mật khẩu không trùng khớp. Vui lòng nhập lại!");
      return false; 
  }
  return true; 
}