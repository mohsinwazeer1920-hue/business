
// // ================= CART LOCAL STORAGE =================
// function getCart() {
//   return JSON.parse(localStorage.getItem("cart")) || [];
// }

// function saveCart(cart) {
//   localStorage.setItem("cart", JSON.stringify(cart));
// }

// // ================= RENDER CART DROPDOWN =================
// const cartIcon = document.getElementById("cart-icon");
// const cartInfo = document.getElementById("cart-info");

// cartIcon.addEventListener("click", e => {
//   e.preventDefault();
//   renderCart();
//   cartInfo.style.display =
//     cartInfo.style.display === "block" ? "none" : "block";
// });

// function renderCart() {
//   let cart = getCart();
//   cartInfo.innerHTML = "";

//   if(cart.length === 0) {
//     cartInfo.innerHTML = "<p>🛒 Cart is empty</p>";
//     return;
//   }

//   cart.forEach(item => {
//     let itemDiv = document.createElement("div");
//     itemDiv.classList.add("cart-item");

//     itemDiv.innerHTML = `
//       <img src="${item.image}" alt="${item.name}">
//       <div class="cart-item-details">
//         <h5>${item.name}</h5>
//         <span>$${item.price} x ${item.qty} = $${(item.price*item.qty).toFixed(2)}</span>
//       </div>
//       <div>
//         <button onclick="changeQty('${item.id}', -1)">-</button>
//         <button onclick="changeQty('${item.id}', 1)">+</button>
//         <button onclick="removeItem('${item.id}')">❌</button>
//       </div>
//     `;

//     cartInfo.appendChild(itemDiv);
//   });

//   let total = cart.reduce((sum, item) => sum + item.price * item.qty, 0);
//   let totalDiv = document.createElement("div");
//   totalDiv.style.marginTop = "10px";
//   totalDiv.style.fontWeight = "bold";
//   totalDiv.innerText = `Grand Total: $${total.toFixed(2)}`;
//   cartInfo.appendChild(totalDiv);
// }



// // ================= CART ACTIONS =================
// function changeQty(id, delta) {
//   let cart = getCart();
//   let item = cart.find(i => i.id === id);
//   if(!item) return;

//   item.qty += delta;
//   if(item.qty <= 0) {
//     cart = cart.filter(i => i.id !== id);
//   }

//   saveCart(cart);
//   renderCart();
// }

// function removeItem(id) {
//   let cart = getCart().filter(i => i.id !== id);
//   saveCart(cart);
//   renderCart();
// }



// // Click outside to close cart
// document.addEventListener("click", e => {
//   // Agar click cart icon ya cart dropdown ke andar ho, to return
//   if(cartInfo.contains(e.target) || cartIcon.contains(e.target)) return;

//   // Baaki case me dropdown close
//   cartInfo.style.display = "none";
// });

// // Stop dropdown closing when clicking inside
// cartInfo.addEventListener("click", e => {
//   e.stopPropagation();
// });




// document.querySelectorAll(".add-to-cart").forEach(btn => {
//   btn.addEventListener("click", e => {
//     e.preventDefault();

//     let product = {
//       id: btn.dataset.id,
//       name: btn.dataset.name,
//       price: parseFloat(btn.dataset.price),
//       image: btn.dataset.image,
//       qty: 1
//     };

//     let cart = getCart();
//     let exist = cart.find(i => i.id === product.id);
//     if(exist) {
//       exist.qty += 1;
//     } else {
//       cart.push(product);
//     }

//     saveCart(cart);
//     renderCart(); // dropdown update

//     // ✅ PRODUCT CARD highlight effect
//     const card = btn.closest(".pro");
//     card.classList.add("added");
//     setTimeout(() => card.classList.remove("added"), 1000);

//     // ✅ FLOATING +1 badge
//     let badge = document.createElement("span");
//     badge.className = "floating-badge";
//     badge.innerText = "+1 added";
//     card.appendChild(badge);
//     setTimeout(() => badge.remove(), 1000);
//   });
// });


// // ================= SECTION WISE SORTING (NO ID REQUIRED) =================
// const sortSelect = document.getElementById("sort");

// sortSelect.addEventListener("change", () => {
//   const option = sortSelect.value;

//   // Sab product sections uthao (jahan pro-container hai)
//   const productSections = document.querySelectorAll(".section-p1");

//   productSections.forEach(section => {
//     const container = section.querySelector(".pro-container");
//     if (!container) return; // agar is section me products nahi

//     const products = Array.from(container.querySelectorAll(".pro"));

//     products.sort((a, b) => {
//       const priceA = parseFloat(a.querySelector("h4").innerText.replace("$",""));
//       const priceB = parseFloat(b.querySelector("h4").innerText.replace("$",""));
//       const nameA = a.querySelector("h5").innerText.toLowerCase();
//       const nameB = b.querySelector("h5").innerText.toLowerCase();

//       if (option === "price-low") return priceA - priceB;
//       if (option === "price-high") return priceB - priceA;
//       if (option === "name-a") return nameA.localeCompare(nameB);
//       if (option === "name-z") return nameB.localeCompare(nameA);
//       return 0;
//     });

//     // container clean
//     container.innerHTML = "";

//     // sorted products wapas isi section me
//     products.forEach(p => container.appendChild(p));
//   });
// });



// // search krna products ko

// const searchInput = document.getElementById("searchInput");

// searchInput.addEventListener("input", () => {
//   const searchValue = searchInput.value.toLowerCase();

//   // har product section ke liye
//   document.querySelectorAll(".section-p1").forEach(section => {
//     const container = section.querySelector(".pro-container");
//     const noResult = section.querySelector(".no-result");

//     if (!container || !noResult) return;

//     let visibleCount = 0;

//     container.querySelectorAll(".pro").forEach(product => {
//       const name = product.querySelector("h5").innerText.toLowerCase();

//       if (name.includes(searchValue)) {
//         product.style.display = "block";
//         visibleCount++;
//       } else {
//         product.style.display = "none";
//       }
//     });

//     // no product visible
//     noResult.style.display = visibleCount === 0 ? "block" : "none";
//   });
// });


// // pagination working  

// // ===== PAGINATION (ONLY SHOP PAGE) =====
// const productSection = document.querySelector("#pagination");

// if (productSection) {

//   const products = document.querySelectorAll(".pro");
//   const pageButtons = document.querySelectorAll("#pagination a:not(:last-child)");
//   const nextBtn = document.querySelector("#pagination a:last-child");

//   const productsPerPage = 12;
//   let currentPage = 1;
//   const totalPages = Math.ceil(products.length / productsPerPage);

//   function showProducts(page) {
//     const start = (page - 1) * productsPerPage;
//     const end = start + productsPerPage;

//     products.forEach((product, index) => {
//       product.style.display =
//         index >= start && index < end ? "" : "none";
//     });
//   }

//   function setActivePage(page) {
//     pageButtons.forEach(btn => btn.classList.remove("active"));
//     pageButtons[page - 1]?.classList.add("active");
//   }

//   // Initial load
//   showProducts(currentPage);
//   setActivePage(currentPage);

//   // Number buttons
//   pageButtons.forEach((btn, index) => {
//     btn.addEventListener("click", e => {
//       e.preventDefault();
//       currentPage = index + 1;
//       showProducts(currentPage);
//       setActivePage(currentPage);
//     });
//   });

//   // Arrow →
//   nextBtn.addEventListener("click", e => {
//     e.preventDefault();
//     currentPage++;
//     if (currentPage > totalPages) currentPage = 1;
//     showProducts(currentPage);
//     setActivePage(currentPage);
//   });

// }
// // ================= MOBILE NAVBAR =================
// const bar = document.getElementById("bar");
// const nav = document.getElementById("navbar");
// const closeBtn = document.getElementById("close");

// if (bar) {
//   bar.addEventListener("click", () => {
//     nav.classList.add("active");
//   });
// }

// if (closeBtn) {
//   closeBtn.addEventListener("click", () => {
//     nav.classList.remove("active");
//   });
// }

// // close menu when clicking link
// document.querySelectorAll("#navbar a").forEach(link => {
//   link.addEventListener("click", () => {
//     nav.classList.remove("active");
//   });
// });


