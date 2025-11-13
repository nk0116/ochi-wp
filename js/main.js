// ページ内リンクをスムーズにスクロール
document.addEventListener("DOMContentLoaded", function () {
  // aタグのhrefが"#..."のものを全て取得
  var anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
  anchorLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      var href = link.getAttribute("href");
      var target = document.getElementById(href.slice(1));
      // id対象の要素がある場合のみスクロール
      if (target) {
        e.preventDefault();
        // オフセット調整が必要な場合は適宜ここで変数にして調整
        var offset = 0;
        var rect = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({
          top: rect,
          behavior: "smooth",
        });
      }
    });
  });
});

// FV Swiper (guard if container exists)
(function () {
  var el = document.querySelector(".fv__swiper");
  if (!el) return;
  new Swiper(el, {
    loop: true,
    slidesPerView: 2.1,
    spaceBetween: 0,
    centeredSlides: true,
    speed: 1500,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },

    breakpoints: {
      767: {
        slidesPerView: 1.268,
        spaceBetween: 20,
      },
    },

    pagination: {
      el: ".fv__pagination",
      clickable: true,
    },
  });
})();

// Campaign Swiper (guard)
(function () {
  var els = document.querySelectorAll(".campaign__swiper");
  if (!els.length) return;
  els.forEach(function (el) {
    new Swiper(el, {
      loop: true,
      slidesPerView: 4.38,
      spaceBetween: 40,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

      pagination: {
        el: el.querySelector(".campaign__pagination"),
        clickable: true,
      },

      navigation: {
        nextEl: el.querySelector(".campaign__next"),
        prevEl: el.querySelector(".campaign__prev"),
      },

      breakpoints: {
        767: {
          slidesPerView: 1.368,
          spaceBetween: 20,
        },
      },
    });
  });
})();
(function () {
  var els = document.querySelectorAll(".campaign__swiper2");
  if (!els.length) return;
  els.forEach(function (el) {
    new Swiper(el, {
      loop: true,
      slidesPerView: 4.38,
      spaceBetween: 40,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

      pagination: {
        el: el.querySelector(".campaign__pagination"),
        clickable: true,
      },

      navigation: {
        nextEl: el.querySelector(".campaign__next"),
        prevEl: el.querySelector(".campaign__prev"),
      },

      breakpoints: {
        767: {
          slidesPerView: 1.368,
          spaceBetween: 20,
        },
      },
    });
  });
})();

// Drawer Menu (SP)
(function () {
  var btn = document.querySelector(".header__menu-btn");
  var drawer = document.querySelector(".drawer");
  if (!btn || !drawer) return;
  var closeBtn = drawer.querySelector(".drawer__close");

  function open() {
    drawer.classList.add("is-open");
    drawer.setAttribute("aria-hidden", "false");
    document.documentElement.style.overflow = "hidden";
  }
  function close() {
    drawer.classList.remove("is-open");
    drawer.setAttribute("aria-hidden", "true");
    document.documentElement.style.overflow = "";
  }

  btn.addEventListener("click", open);
  if (closeBtn) {
    closeBtn.addEventListener("click", close);
  }
  drawer.addEventListener("click", function (e) {
    if (e.target === drawer) close();
  });

  // ドロワー内のリンクをクリックしたときに閉じる
  var drawerLinks = drawer.querySelectorAll(".drawer__nav a");
  drawerLinks.forEach(function (link) {
    link.addEventListener("click", close);
  });
})();

// Phone tabs
(function () {
  var container = document.querySelector(".header__phone");
  if (!container) return;
  var tabs = container.querySelectorAll(".phone-tab");
  var panels = container.querySelectorAll(".phone-panel");

  function activate(targetId) {
    tabs.forEach(function (btn) {
      var isActive = btn.getAttribute("data-target") === targetId;
      btn.classList.toggle("is-active", isActive);
      btn.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var targetId = btn.getAttribute("data-target");
      activate(targetId);
    });
  });
})();

// Ploblem tabs
(function () {
  var root = document.querySelector(".ploblem");
  if (!root) return;
  var tabs = root.querySelectorAll(".ploblem__tab");
  var panels = root.querySelectorAll(".ploblem__panel");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Case Swiper (guard)
(function () {
  var el = document.querySelector(".case__swiper");
  if (!el) return;
  new Swiper(el, {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 13.3,

    breakpoints: {
      767: {
        slidesPerView: 1.55,
        spaceBetween: 20,
        centeredSlides: true,
      },
    },
  });
})();

// Column Swiper (guard)
(function () {
  var el = document.querySelector(".column__swiper");
  if (!el) return;
  new Swiper(el, {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 48,

    breakpoints: {
      767: {
        slidesPerView: 1.4,
        centeredSlides: true,
        pagination: {
          el: ".column__pagination",
          clickable: true,
        },
      },
    },
  });
})();

// Access tabs
(function () {
  var root = document.querySelector(".access");
  if (!root) return;
  var tabs = root.querySelectorAll(".access__tab");
  var panels = root.querySelectorAll(".access__panel");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Calendar tabs (reuse access tab UI within .calendar section)
(function () {
  var root = document.querySelector(".calendar");
  if (!root) return;
  var tabs = root.querySelectorAll(".access__tab");
  var panels = root.querySelectorAll(".access__panel");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Gallery Swiper (guard)
(function () {
  var el = document.querySelector(".gallery__swiper");
  if (!el) return;
  new Swiper(el, {
    loop: true, // ループ有効
    slidesPerView: 2.94, // 一度に表示する枚数
    spaceBetween: 40, // スライド間のスペース
    speed: 6000, // ループの時間
    allowTouchMove: false, // スワイプ無効
    autoplay: {
      delay: 0, // 途切れなくループ
      reverseDirection: true, // 逆方向有効化
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      767: {
        slidesPerView: 1.2,
        spaceBetween: 15.4,
        centeredSlides: true,
      },
    },
  });
})();

// FAQ Accordion
(function () {
  var root = document.querySelector(".faq");
  if (!root) return;
  var items = root.querySelectorAll(".faq__item");

  items.forEach(function (item) {
    var q = item.querySelector(".faq__question");
    var a = item.querySelector(".faq__answer");
    if (!q || !a) return;

    // 初期状態: 閉じる
    item.classList.remove("is-open");
    q.setAttribute("role", "button");
    q.setAttribute("tabindex", "0");
    q.setAttribute("aria-expanded", "false");
    a.setAttribute("hidden", "hidden");

    function toggle() {
      var isOpen = item.classList.toggle("is-open");
      q.setAttribute("aria-expanded", isOpen ? "true" : "false");
      if (isOpen) {
        a.removeAttribute("hidden");
      } else {
        a.setAttribute("hidden", "hidden");
      }
    }

    q.addEventListener("click", toggle);
    q.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        toggle();
      }
    });
  });

  // リサイズ時の高さ再計算は不要のため削除
})();

// Page local MENU accordion (SP)
(function () {
  var btn = document.querySelector(".page-nav__menu-btn");
  var acc = document.getElementById("page-nav-accordion");
  if (!btn || !acc) return;
  // 初期状態: 閉じる
  btn.setAttribute("aria-expanded", "false");
  acc.setAttribute("hidden", "hidden");

  function toggle() {
    var isOpen = btn.classList.toggle("is-open");
    btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    if (isOpen) {
      acc.removeAttribute("hidden");
    } else {
      acc.setAttribute("hidden", "hidden");
    }
  }

  btn.addEventListener("click", toggle);
})();

// Price tabs
(function () {
  var root = document.querySelector(".price-tabs");
  if (!root) return;
  var tabs = root.querySelectorAll(".price-tabs__tab");
  var panels = root.querySelectorAll(".price-tabs__panel");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Access Gallery Swiper
// (function(){
//     var el = document.querySelector('.gallery-low-swiper');
//     if(!el) return;
//     new Swiper(el, {
//         loop: true,
//         slidesPerView: 2.94,
//         spaceBetween: 32,
//         speed: 6000,
//         allowTouchMove: false,
//         autoplay: {
//             delay: 0,
//             reverseDirection: true,
//         },
//         pagination: {
//             el: '.gallery-low-pagination',
//             clickable: true,
//         },

//         breakpoints: {
//             767: {
//                 slidesPerView: 1.2,
//                 spaceBetween: 15.4,
//                 centeredSlides: true,
//             },
//         },
//     });
// })();

// Doctor Details Instagram Swiper
(function () {
  var el = document.querySelector(".doctor-details-instagram-swiper");
  if (!el) return;
  new Swiper(el, {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 48,

    breakpoints: {
      767: {
        slidesPerView: 1.745,
        centeredSlides: true,
        // pagination: {
        //     el: '.column__pagination',
        //     clickable: true,
        // },
      },
    },
  });
})();

// Payment Accordion
(function () {
  var accordionDetails = ".js-details";
  var accordionSummary = ".js-details-summary";
  var accordionContent = ".js-details-content";
  var speed = 300;
  if (!jQuery(accordionDetails).length) return;
  jQuery(accordionSummary).each(function () {
    jQuery(this).on("click", function (e) {
      e.preventDefault();
      jQuery(this).toggleClass("is-active");
      if (jQuery(this).parent(accordionDetails).attr("open")) {
        jQuery(this)
          .nextAll(accordionContent)
          .slideUp(speed, function () {
            jQuery(this).parent(accordionDetails).removeAttr("open");
          });
      } else {
        jQuery(this).parent(accordionDetails).attr("open", "true");
        jQuery(this).nextAll(accordionContent).hide().slideDown(speed);
      }
    });
  });
})();

// Campaign tabs
(function () {
  var root = document.querySelector(".campaigns");
  if (!root) return;
  var tabs = root.querySelectorAll(".campaigns__tab");
  var panels = root.querySelectorAll(".campaigns__panel");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Menu tabs
(function () {
  var root = document.querySelector(".menu");
  if (!root) return;
  var tabs = root.querySelectorAll(".menu__tab");
  var panels = root.querySelectorAll(".menu__panel");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Case Swiper (guard)
(function () {
  var el = document.querySelector(".case01__swiper");
  if (!el) return;
  new Swiper(el, {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,

    pagination: {
      el: ".case01__pagination",
      clickable: true,
    },
  });
})();

// Price Tabs
(function () {
  var root = document.querySelector(".price-list");
  if (!root) return;

  var tabs = root.querySelectorAll(".price-list-tab");
  var panels = root.querySelectorAll(".price-list__panel");
  var bottoms = root.querySelectorAll(".price-list-bottom");

  function activate(targetId) {
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute("data-target") === targetId;
      tab.classList.toggle("is-active", isActive);
      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });

    panels.forEach(function (panel) {
      var show = panel.id === targetId;
      panel.classList.toggle("is-active", show);
      if (show) {
        panel.removeAttribute("hidden");
      } else {
        panel.setAttribute("hidden", "hidden");
      }
    });

    bottoms.forEach(function (bottom) {
      var show = bottom.id === "bottom-" + targetId;
      bottom.classList.toggle("is-active", show);
      if (show) {
        bottom.removeAttribute("hidden");
      } else {
        bottom.setAttribute("hidden", "hidden");
      }
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activate(tab.getAttribute("data-target"));
    });
  });
})();

// Price Dropdown
(function () {
  var root = document.querySelector(".price-list");
  if (!root) return;

  var dropdownToggle = root.querySelector(".price-list-dropdown__toggle");
  var dropdownMenu = root.querySelector(".price-list-dropdown__menu");
  var groupBtns = root.querySelectorAll(".price-list-dropdown__group-btn");
  var subItems = root.querySelectorAll(".price-list-dropdown__sub li");
  var bottoms = root.querySelectorAll(".price-list-bottom");
  var bottomLinks = root.querySelectorAll(".price-list-bottom__link");

  function activate(targetId, labelText) {
    var panelId = null;
    if (targetId.startsWith("common")) panelId = "bottom-panel-common";
    else if (targetId.startsWith("cosmetic-surgery")) panelId = "bottom-panel-surgery";
    else if (targetId.startsWith("cosmetic-dermatology")) panelId = "bottom-panel-dermatology";
    else if (targetId.startsWith("injection-treatment")) panelId = "bottom-panel-pouring";
    else if (targetId.startsWith("other")) panelId = "bottom-panel-others";

    bottoms.forEach(function (bottom) {
      var show = bottom.id === panelId;
      bottom.classList.toggle("is-active", show);
      if (show) {
        bottom.removeAttribute("hidden");
      } else {
        bottom.setAttribute("hidden", "hidden");
      }
    });

    if (labelText) {
      dropdownToggle.querySelector("span").textContent = labelText;
    }

    dropdownMenu.hidden = true;
    dropdownToggle.classList.remove("is-open");

    var targetEl = document.getElementById(targetId);
    if (targetEl) {
      const offset = 70;
      const top = targetEl.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({
        top,
        behavior: "smooth",
      });
    }
  }

  dropdownToggle.addEventListener("click", function () {
    dropdownMenu.hidden = !dropdownMenu.hidden;
    dropdownToggle.classList.toggle("is-open", !dropdownMenu.hidden ? true : false);
  });

  groupBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var sub = btn.nextElementSibling;
      var isOpen = !sub.hidden;
      root.querySelectorAll(".price-list-dropdown__sub").forEach(function (ul) {
        ul.hidden = true;
      });
      sub.hidden = isOpen ? true : false;
    });
  });

  subItems.forEach(function (item) {
    item.addEventListener("click", function () {
      var targetId = item.getAttribute("data-target");
      var label = item.textContent.trim();
      activate(targetId, label);
    });
  });

  bottomLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      var href = link.getAttribute("href");
      if (!href || !href.startsWith("#")) return;
      var targetId = href.substring(1);
      activate(targetId);
    });
  });

  document.addEventListener("click", function (e) {
    if (!root.contains(e.target)) {
      dropdownMenu.hidden = true;
      dropdownToggle.classList.remove("is-open");
      root.querySelectorAll(".price-list-dropdown__sub").forEach(function (ul) {
        ul.hidden = true;
      });
    }
  });
})();

(function () {
  var root = document.querySelector(".price-list");
  if (!root) return;

  var sideLinks = root.querySelectorAll(".price-list-bottom__link");
  var panels = root.querySelectorAll(".price-list__panel");
  var tabs = root.querySelectorAll(".price-list-tab");

  function showPanel(panelId) {
    panels.forEach(function (panel) {
      panel.classList.remove("is-active");
      panel.setAttribute("hidden", "true");
    });
    var targetPanel = root.querySelector("#" + panelId);
    if (targetPanel) {
      targetPanel.classList.add("is-active");
      targetPanel.removeAttribute("hidden");
    }
  }

  function activateTab(panelId) {
    tabs.forEach(function (tab) {
      var isTarget = tab.dataset.target === panelId;
      tab.classList.toggle("is-active", isTarget);
      tab.setAttribute("aria-selected", isTarget ? "true" : "false");
    });
  }

  var map = {
    // "common": "panel-common",
    "cosmetic-surgery": "panel-surgery",
    "cosmetic-dermatology": "panel-dermatology",
    "injection-treatment": "panel-pouring",
    other: "panel-others",
  };

  sideLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      var href = link.getAttribute("href");
      if (!href || href === "#") return;

      var matchedKey = Object.keys(map).find(function (key) {
        return href.indexOf("#" + key) === 0;
      });

      if (matchedKey) {
        e.preventDefault();
        var panelId = map[matchedKey];
        showPanel(panelId);
        activateTab(panelId);
      }
    });
  });

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      var panelId = tab.dataset.target;
      showPanel(panelId);
      activateTab(panelId);
    });
  });
})();

// Header dropdowns (LINE / Access)
(function () {
  var dropdownRoots = Array.prototype.slice.call(document.querySelectorAll(".header__action--has-branches, .header__nav-item--has-branches"));
  if (!dropdownRoots.length) return;

  function closeAll(except) {
    dropdownRoots.forEach(function (root) {
      if (root === except) return;
      root.classList.remove("is-open");
      var trig = root.querySelector(".header__line-btn, .header__instagram-btn, > a");
      if (trig) {
        trig.setAttribute("aria-expanded", "false");
      }
    });
  }

  dropdownRoots.forEach(function (root) {
    var trigger = root.querySelector(".header__line-btn") || root.querySelector(".header__instagram-btn") || root.querySelector(":scope > a");
    var menu = root.querySelector(".header__submenu");
    if (!trigger || !menu) return;

    if (!trigger.hasAttribute("aria-expanded")) {
      trigger.setAttribute("aria-expanded", "false");
    }

    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      var willOpen = !root.classList.contains("is-open");
      closeAll(root);
      root.classList.toggle("is-open", willOpen);
      trigger.setAttribute("aria-expanded", willOpen ? "true" : "false");
    });

    root.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        root.classList.remove("is-open");
        trigger.setAttribute("aria-expanded", "false");
        trigger.focus();
      }
    });
  });

  document.addEventListener("click", function (e) {
    var within = e.target.closest(".header__action--has-branches, .header__nav-item--has-branches");
    if (!within) closeAll();
  });
})();
