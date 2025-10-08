jQuery.noConflict();
// 線が出てテキスト表示＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
(function ($) {
  // 動きのきっかけの起点となるアニメーションの名前を定義
  function BgFadeAnime() {
    // 背景色が伸びて出現（左から右）
    jQuery(".bgLRextendTrigger").each(function () {
      //bgLRextendTriggerというクラス名が
      var elemPos = jQuery(this).offset().top - 50; //要素より、50px上の
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll >= elemPos - windowHeight) {
        jQuery(this).addClass("bgLRextend"); // 画面内に入ったらbgLRextendというクラス名を追記
      } else {
        jQuery(this).removeClass("bgLRextend"); // 画面外に出たらbgLRextendというクラス名を外す
      }
    });

    // 文字列を囲う子要素
    jQuery(".bgappearTrigger").each(function () {
      //bgappearTriggerというクラス名が
      var elemPos = jQuery(this).offset().top - 50; //要素より、50px上の
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll >= elemPos - windowHeight) {
        jQuery(this).addClass("bgappear"); // 画面内に入ったらbgappearというクラス名を追記
      } else {
        jQuery(this).removeClass("bgappear"); // 画面外に出たらbgappearというクラス名を外す
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  jQuery(window).scroll(function () {
    BgFadeAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on("load", function () {
    BgFadeAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

  // TYPING モーション＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
  // eachTextAnimeにappeartextというクラス名を付ける定義
  function EachTextAnimeControl() {
    jQuery(".eachTextAnime").each(function () {
      var elemPos = jQuery(this).offset().top - 50;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll >= elemPos - windowHeight) {
        jQuery(this).addClass("appeartext");
      } else {
        jQuery(this).removeClass("appeartext");
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  jQuery(window).scroll(function () {
    EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on("load", function () {
    //spanタグを追加する
    var element = jQuery(".eachTextAnime");
    element.each(function () {
      var text = jQuery(this).text();
      var textbox = "";
      text.split("").forEach(function (t, i) {
        if (t !== " ") {
          if (i < 30) {
            textbox += '<span style="animation-delay:.' + i + 's;">' + t + "</span>";
          } else {
            var n = i / 30;
            textbox += '<span style="animation-delay:' + n + 's;">' + t + "</span>";
          }
        } else {
          textbox += t;
        }
      });
      jQuery(this).html(textbox);
    });

    EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

  //scroll_effect
  jQuery(window).scroll(function () {
    var scrollAnimationElm = document.querySelectorAll(".scroll_up , .scroll_left , .scroll_right");
    var scrollAnimationFunc = function () {
      for (var i = 0; i < scrollAnimationElm.length; i++) {
        var triggerMargin = 250;
        if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
          scrollAnimationElm[i].classList.add("on");
        }
      }
    };
    window.addEventListener("load", scrollAnimationFunc);
    window.addEventListener("scroll", scrollAnimationFunc);
  });

  //scroll_effect
  jQuery(window).scroll(function () {
    var scrollAnimationElm02 = document.querySelectorAll(".scroll_up02 , .scroll_left02 , .scroll_right02");
    var scrollAnimationFunc02 = function () {
      for (var i = 0; i < scrollAnimationElm02.length; i++) {
        var triggerMargin = 250;
        if (window.innerHeight > scrollAnimationElm02[i].getBoundingClientRect().top + triggerMargin) {
          scrollAnimationElm02[i].classList.add("on02");
        }
      }
    };
    window.addEventListener("load", scrollAnimationFunc02);
    window.addEventListener("scroll", scrollAnimationFunc02);
  });

  //scroll_effect
  jQuery(window).scroll(function () {
    var scrollAnimationElm03 = document.querySelectorAll(".scroll_up03 , .scroll_left03 , .scroll_right03");
    var scrollAnimationFunc03 = function () {
      for (var i = 0; i < scrollAnimationElm03.length; i++) {
        var triggerMargin = 280;
        if (window.innerHeight > scrollAnimationElm03[i].getBoundingClientRect().top + triggerMargin) {
          scrollAnimationElm03[i].classList.add("on03");
        }
      }
    };
    window.addEventListener("load", scrollAnimationFunc03);
    window.addEventListener("scroll", scrollAnimationFunc03);
  });

  //テキストランダム
  var arr = [];
  //初期値の設定
  // function TypingInit() {
  //   jQuery('.js_typing').each(function (i) { //js_typingクラスを全て処理をおこなう
  //     arr[i] = new ShuffleText(this);//動作させるテキストを配列に格納
  //   });
  // }
  //スクロールした際のアニメーションの設定
  function TypingAnime() {
    jQuery(".js_typing").each(function (i) {
      var elemPos = jQuery(this).offset().top - 0; //要素より、50px上の
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll >= elemPos - windowHeight) {
        if (!jQuery(this).hasClass("endAnime")) {
          //endAnimeのクラスがあるかチェック
          arr[i].start(); //配列で登録テキストのアニメーションをおこなう
          arr[i].duration = 700; //テキストが最終変化するまでの時間※規定値600
          jQuery(this).addClass("endAnime"); //１度アニメーションした場合はendAnimeクラスを追加
        }
      } else {
        jQuery(this).removeClass("endAnime"); //範囲外にスクロールした場合はendAnimeのクラスを削除
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  jQuery(window).scroll(function () {
    TypingAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on("load", function () {
    TypingInit(); //初期設定
    TypingAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述
})(jQuery);
