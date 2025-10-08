// .s_06 .accordion_one
jQuery(function(){
  //.accordion_oneの中の.accordion_headerがクリックされたら
  jQuery('.s_06 .accordion_one .accordion_header').click(function(){
    //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
    jQuery(this).next('.accordion_inner').slideToggle();
    jQuery(this).toggleClass("open");
      //クリックされた.accordion_oneの中の.accordion_header以外の.accordion_oneの中の.accordion_headerに隣接する.accordion_oneの中の.accordion_innerを閉じる
    jQuery('.s_06 .accordion_one .accordion_header').not(jQuery(this)).next('.accordion_one .accordion_inner').slideUp();
    jQuery('.s_06 .accordion_one .accordion_header').not(jQuery(this)).removeClass("open");
  });
  //閉じるボタンがクリックされたら
  jQuery('a.close_btn').click(function () {
    //クリックされたa.close_btnの親要素の.accordion_oneの.accordion_innerを閉じる。
    jQuery(this).parents('.s_06 .accordion_one .accordion_inner').slideUp();
    jQuery('.s_06 .accordion_one .accordion_header').removeClass("open");
  });
});

// ページ内リンク
jQuery(function(){
  // 閉じるボタンをクリックした場合に処理
  jQuery('.s_06 a.close_btn').click(function() {
    // 移動先を0px上にずらす
    var adjust = 0;
    // スクロールの速度
    var speed = 500; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    var position = target.offset().top - adjust;
    // スムーススクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});


/* =================================================== */
// slideUp, slideDown, slideToggle関数を定義
/* =================================================== */

// 要素をスライドしながら非表示にする関数(jQueryのslideUpと同じ)
const slideUp = (el, duration = 300) => {
  el.style.height = el.offsetHeight + "px";
  el.offsetHeight;
  el.style.transitionProperty = "height, margin, padding";
  el.style.transitionDuration = duration + "ms";
  el.style.transitionTimingFunction = "ease";
  el.style.overflow = "hidden";
  el.style.height = 0;
  el.style.paddingTop = 0;
  el.style.paddingBottom = 0;
  el.style.marginTop = 0;
  el.style.marginBottom = 0;
  setTimeout(() => {
    el.style.display = "none";
    el.style.removeProperty("height");
    el.style.removeProperty("padding-top");
    el.style.removeProperty("padding-bottom");
    el.style.removeProperty("margin-top");
    el.style.removeProperty("margin-bottom");
    el.style.removeProperty("overflow");
    el.style.removeProperty("transition-duration");
    el.style.removeProperty("transition-property");
    el.style.removeProperty("transition-timing-function");
    el.classList.remove("is-open");
  }, duration);
};

// 要素をスライドしながら表示する関数(jQueryのslideDownと同じ)
const slideDown = (el, duration = 300) => {
  el.classList.add("is-open");
  el.style.removeProperty("display");
  let display = window.getComputedStyle(el).display;
  if (display === "none") {
    display = "block";
  }
  el.style.display = display;
  let height = el.offsetHeight;
  el.style.overflow = "hidden";
  el.style.height = 0;
  el.style.paddingTop = 0;
  el.style.paddingBottom = 0;
  el.style.marginTop = 0;
  el.style.marginBottom = 0;
  el.offsetHeight;
  el.style.transitionProperty = "height, margin, padding";
  el.style.transitionDuration = duration + "ms";
  el.style.transitionTimingFunction = "ease";
  el.style.height = height + "px";
  el.style.removeProperty("padding-top");
  el.style.removeProperty("padding-bottom");
  el.style.removeProperty("margin-top");
  el.style.removeProperty("margin-bottom");
  setTimeout(() => {
    el.style.removeProperty("height");
    el.style.removeProperty("overflow");
    el.style.removeProperty("transition-duration");
    el.style.removeProperty("transition-property");
    el.style.removeProperty("transition-timing-function");
  }, duration);
};

// 要素をスライドしながら交互に表示/非表示にする関数(jQueryのslideToggleと同じ)
const slideToggle = (el, duration = 300) => {
  if (window.getComputedStyle(el).display === "none") {
    return slideDown(el, duration);
  } else {
    return slideUp(el, duration);
  }
};

/* =================================================== */
// DOM操作
/* =================================================== */

// アコーディオンを全て取得
const accordions = document.querySelectorAll(".js-accordion");
// 取得したアコーディオンをArrayに変換(IE対策)
const accordionsArr = Array.prototype.slice.call(accordions);

accordionsArr.forEach((accordion) => {
  // Triggerを全て取得
  const accordionTriggers = accordion.querySelectorAll(".js-accordion-trigger");
  // TriggerをArrayに変換(IE対策)
  const accordionTriggersArr = Array.prototype.slice.call(accordionTriggers);

  accordionTriggersArr.forEach((trigger) => {
    // Triggerにクリックイベントを付与
    trigger.addEventListener("click", () => {
      // '.is-active'クラスを付与or削除
      trigger.classList.toggle("is-active");
      // 開閉させる要素を取得
      const content = trigger.querySelector(".accordion__content");
      // 要素を展開or閉じる
      slideToggle(content);
    });
  });
});