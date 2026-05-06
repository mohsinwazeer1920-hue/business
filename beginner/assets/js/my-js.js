// ================= CART LOCAL STORAGE =================
function getCart() {
  return JSON.parse(localStorage.getItem("cart")) || [];
}

function saveCart(cart) {
  localStorage.setItem("cart", JSON.stringify(cart));
}

// ================= CART COUNT BADGE =================
function updateCartCount() {
  let cart = getCart();
  let total = cart.reduce((sum, item) => sum + item.qty, 0);
  let badge = document.getElementById("cart-count");

  if (badge) {
    badge.innerText = total;
    badge.style.display = total > 0 ? "inline" : "none";
  }
}

// ================= RENDER CART =================
function renderCart() {
  const cartInfo = document.getElementById("cart-info");
  if (!cartInfo) return;

  let cart = getCart();
  cartInfo.innerHTML = "";

  if (cart.length === 0) {
    cartInfo.innerHTML = "<p>🛒 Cart is empty</p>";
    updateCartCount();
    return;
  }

  cart.forEach(item => {
    let itemDiv = document.createElement("div");
    itemDiv.classList.add("cart-item");

    itemDiv.innerHTML = `
      <img src="${item.image}" alt="${item.name}">
      <div class="cart-item-details">
        <h5>${item.name}</h5>
        <span>$${item.price} x ${item.qty} = $${(item.price * item.qty).toFixed(2)}</span>
        <h6>Size: ${item.size ? item.size : "N/A"}</h6>
      </div>
      <div>
        <button onclick="changeQty('${item.id}', '${item.size}', -1)">-</button>
        <button onclick="changeQty('${item.id}', '${item.size}', 1)">+</button>
        <button onclick="removeItem('${item.id}', '${item.size}')">❌</button>
      </div>
    `;

    cartInfo.appendChild(itemDiv);
  });

  let total = cart.reduce((sum, item) => sum + item.price * item.qty, 0);

  let totalDiv = document.createElement("div");
  totalDiv.style.marginTop = "10px";
  totalDiv.style.fontWeight = "bold";
  totalDiv.innerText = `Grand Total: $${total.toFixed(2)}`;

  cartInfo.appendChild(totalDiv);
  updateCartCount();
}

// ================= CART ACTIONS =================
function changeQty(id, size, delta) {
  let cart = getCart();
  let item = cart.find(i => i.id === id && i.size === size);
  if (!item) return;

  item.qty += delta;

  if (item.qty <= 0) {
    cart = cart.filter(i => !(i.id === id && i.size === size));
  }

  saveCart(cart);
  renderCart();
}

function removeItem(id, size) {
  let cart = getCart().filter(i => !(i.id === id && i.size === size));
  saveCart(cart);
  renderCart();
}

// ================= ADD TO CART =================
document.addEventListener("click", function (e) {
  const btn = e.target.closest(".add-to-cart");
  if (!btn) return;

  e.preventDefault();

  const sizeSelect = document.getElementById("product-size");
  const size = sizeSelect ? sizeSelect.value : "";

  let qty = 1;
  const qtyInput = document.querySelector("#product-qty");

  if (qtyInput && !isNaN(qtyInput.value) && qtyInput.value > 0) {
    qty = parseInt(qtyInput.value);
  }

  let product = {
    id: btn.dataset.id,
    name: btn.dataset.name,
    price: parseFloat(btn.dataset.price),
    image: btn.dataset.image,
    qty: qty,
    size: size
  };

  if (!product.id || !product.name || isNaN(product.price)) {
    console.warn("Product data missing!", btn.dataset);
    return;
  }

  let cart = getCart();
  let exist = cart.find(i => i.id === product.id && i.size === product.size);

  if (exist) {
    exist.qty += qty;
  } else {
    cart.push(product);
  }

  saveCart(cart);
  renderCart();
  updateCartCount();

  // animation
  const card = btn.closest(".pro");

  if (card) {
    card.classList.add("added");
    setTimeout(() => card.classList.remove("added"), 1000);

    let badge = document.createElement("span");
    badge.className = "floating-badge";
    badge.innerText = `+${qty}`;
    card.appendChild(badge);

    setTimeout(() => badge.remove(), 1000);
  } else {
    const original = btn.innerHTML;
    btn.innerHTML = "✅ Added!";
    setTimeout(() => { btn.innerHTML = original; }, 1500);
  }
});

// ================= CART TOGGLE =================
const cartIcon = document.getElementById("cart-icon");
const cartInfo = document.getElementById("cart-info");

if (cartIcon && cartInfo) {
  cartIcon.addEventListener("click", e => {
    e.preventDefault();
    renderCart();
    cartInfo.style.display =
      cartInfo.style.display === "block" ? "none" : "block";
  });
}

// ================= CLICK OUTSIDE =================
document.addEventListener("click", e => {
  if (!cartInfo || !cartIcon) return;

  if (cartInfo.contains(e.target) || cartIcon.contains(e.target)) return;
  cartInfo.style.display = "none";
});

if (cartInfo) {
  cartInfo.addEventListener("click", e => e.stopPropagation());
}

// ================= PAGE LOAD =================
document.addEventListener("DOMContentLoaded", () => {
  updateCartCount();
});

// ================= SORT =================
const sortSelect = document.getElementById("sort");

if (sortSelect) {
  sortSelect.addEventListener("change", () => {
    const option = sortSelect.value;

    document.querySelectorAll(".section-p1").forEach(section => {
      const container = section.querySelector(".pro-container");
      if (!container) return;

      const products = Array.from(container.querySelectorAll(".pro"));

      products.sort((a, b) => {
        const priceA = parseFloat(a.querySelector("h4").innerText.replace("$",""));
        const priceB = parseFloat(b.querySelector("h4").innerText.replace("$",""));
        const nameA = a.querySelector("h5").innerText.toLowerCase();
        const nameB = b.querySelector("h5").innerText.toLowerCase();

        if (option === "price-low") return priceA - priceB;
        if (option === "price-high") return priceB - priceA;
        if (option === "name-a") return nameA.localeCompare(nameB);
        if (option === "name-z") return nameB.localeCompare(nameA);
        return 0;
      });

      container.innerHTML = "";
      products.forEach(p => container.appendChild(p));
    });
  });
}

// ================= SEARCH for Header =================
const searchInput = document.getElementById("searchInput");

if (searchInput) {
  searchInput.addEventListener("input", () => {
    const searchValue = searchInput.value.toLowerCase().trim();

    // Directly pro-container dhundo, section loop nahi
    const container = document.querySelector(".pro-container");
    const noResult = document.querySelector(".no-result");

    if (!container) return;

    let visible = 0;

    container.querySelectorAll(".pro").forEach(product => {
      const h5 = product.querySelector("h5");
      const name = h5 ? h5.innerText.toLowerCase().trim() : "";

      if (name.includes(searchValue)) {
        product.style.display = "block";
        visible++;
      } else {
        product.style.display = "none";
      }
    });

    if (noResult) {
      noResult.style.display = visible === 0 ? "block" : "none";
    }
  });
}
// ================= Search only for Shop ============

const shopSearch = document.getElementById("shopSearch");

if (shopSearch) {
  shopSearch.addEventListener("input", () => {
    const searchValue = shopSearch.value.toLowerCase().trim();
    const container = document.querySelector(".pro-container");
    const noResult = document.querySelector(".no-result");
    if (!container) return;
    let visible = 0;
    container.querySelectorAll(".pro").forEach(product => {
      const h5 = product.querySelector("h5");
      const name = h5 ? h5.innerText.toLowerCase().trim() : "";
      if (name.includes(searchValue)) {
        product.style.display = "block";
        visible++;
      } else {
        product.style.display = "none";
      }
    });
    if (noResult) noResult.style.display = visible === 0 ? "block" : "none";
  });
}

// ================= PAGINATION =================
const pagination = document.querySelector("#pagination");

if (pagination) {
  const products = document.querySelectorAll(".pro");
  const pageButtons = document.querySelectorAll("#pagination a:not(:last-child)");
  const nextBtn = document.querySelector("#pagination a:last-child");

  const perPage = 12;
  let currentPage = 1;
  const totalPages = Math.ceil(products.length / perPage);

  function showProducts(page) {
    const start = (page - 1) * perPage;
    const end = start + perPage;

    products.forEach((p, i) => {
      p.style.display = i >= start && i < end ? "" : "none";
    });
  }

  function setActive(page) {
    pageButtons.forEach(btn => btn.classList.remove("active"));
    pageButtons[page - 1]?.classList.add("active");
  }

  showProducts(currentPage);
  setActive(currentPage);

  pageButtons.forEach((btn, i) => {
    btn.addEventListener("click", e => {
      e.preventDefault();
      currentPage = i + 1;
      showProducts(currentPage);
      setActive(currentPage);
    });
  });

  if (nextBtn) {
    nextBtn.addEventListener("click", e => {
      e.preventDefault();
      currentPage++;
      if (currentPage > totalPages) currentPage = 1;
      showProducts(currentPage);
      setActive(currentPage);
    });
  }
}

// ================= MOBILE NAV =================
const bar = document.getElementById("bar");
const nav = document.getElementById("navbar");
const closeBtn = document.getElementById("close");

if (bar && nav) {
  bar.addEventListener("click", () => nav.classList.add("active"));
}

if (closeBtn && nav) {
  closeBtn.addEventListener("click", () => nav.classList.remove("active"));
}

document.querySelectorAll("#navbar a").forEach(link => {
  link.addEventListener("click", () => {
    if (nav) nav.classList.remove("active");
  });
});

// ================= IMAGE SWITCH =================
const mainImg = document.getElementById("MainImg");
const smallImgs = document.querySelectorAll(".small-img");

if (mainImg && smallImgs.length > 0) {
  smallImgs.forEach(img => {
    img.addEventListener("click", () => {
      mainImg.src = img.src;
    });
  });
}

// ====================== filter js ==============
const filterButtons = document.querySelectorAll(".filter-btn");
const products = document.querySelectorAll(".pro");

filterButtons.forEach(btn => {
  btn.addEventListener("click", () => {

    filterButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

    products.forEach(product => {
      const category = product.dataset.category;

      if (filter === "all" || category === filter) {
        product.style.display = "block";
      } else {
        product.style.display = "none";
      }
    });

  });
});