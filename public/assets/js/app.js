/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!******************************************!*\
  !*** ./public/assets/front/js/script.js ***!
  \******************************************/
var images = document.querySelectorAll(".lazy-img");
var options = {
  rootMargin: "0px",
  threshold: 0.5
};
var observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      var image = entry.target;
      var imgSrc = image.dataset.src;
      var imgLoader = new Image();
      imgLoader.onload = function () {
        image.removeAttribute("data-src");
        observer.unobserve(image);
      };
      imgLoader.src = imgSrc;
    }
  });
}, options);
images.forEach(function (image) {
  observer.observe(image);
});
$(document).ready(function () {
  var navbar = $("#navbar");
  var stickyTop = navbar.offset().top;
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyTop) {
      navbar.addClass("sticky");
      $("body").css("padding-top", navbar.outerHeight() + "px"); /* Add padding to body to prevent content from jumping up */
    } else {
      navbar.removeClass("sticky");
      $("body").css("padding-top", 0); /* Remove padding from body */
    }
  });

  // sidebar
  $(function () {
    $(".sb-sticky").theiaStickySidebar({
      additionalMarginTop: 60
    });
    // $('.sb-sticky').theiaStickySidebar({additionalMarginTop: 60 });
  });

  $(".ds-content iframe, .bp-content iframe").each(function () {
    $(this).addClass("embed-responsive-item");
    if ($(this).height() < 400) {
      $(this).parent().addClass("embed-responsive");
    } else {
      var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
      var pad = parseInt($(this).height()) / parseInt($(this).width()) * 100;
      if (isMobile || $(this).width() > 336) {
        $(this).parent().addClass("embed-responsive").css({
          "padding-bottom": pad + "%"
        });
      } else {
        $(this).parent().addClass("embed-responsive").css({
          "padding-bottom": pad / 2 + "%",
          width: "50%"
        });
      }
    }
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./public/assets/front/js/sharer.min.js ***!
  \**********************************************/
(function (m, r) {
  "use strict";

  var s = function s(t) {
    this.elem = t;
  };
  s.init = function () {
    var t = r.querySelectorAll("[data-sharer]"),
      e,
      a = t.length;
    for (e = 0; e < a; e++) {
      t[e].addEventListener("click", s.add);
    }
  };
  s.add = function (t) {
    var e = t.currentTarget || t.srcElement;
    var a = new s(e);
    a.share();
  };
  s.prototype = {
    constructor: s,
    getValue: function getValue(t) {
      var e = this.elem.getAttribute("data-" + t);
      if (e && t === "hashtag") {
        if (!e.startsWith("#")) {
          e = "#" + e;
        }
      }
      return e === null ? "" : e;
    },
    share: function share() {
      var t = this.getValue("sharer").toLowerCase(),
        e = {
          facebook: {
            shareUrl: "https://www.facebook.com/sharer/sharer.php",
            params: {
              u: this.getValue("url"),
              hashtag: this.getValue("hashtag"),
              quote: this.getValue("quote")
            }
          },
          linkedin: {
            shareUrl: "https://www.linkedin.com/shareArticle",
            params: {
              url: this.getValue("url"),
              mini: true
            }
          },
          twitter: {
            shareUrl: "https://twitter.com/intent/tweet/",
            params: {
              text: this.getValue("title"),
              url: this.getValue("url"),
              hashtags: this.getValue("hashtags"),
              via: this.getValue("via")
            }
          },
          email: {
            shareUrl: "mailto:" + this.getValue("to"),
            params: {
              subject: this.getValue("subject"),
              body: this.getValue("title") + "\n" + this.getValue("url")
            }
          },
          whatsapp: {
            shareUrl: this.getValue("web") === "true" ? "https://web.whatsapp.com/send" : "https://wa.me/",
            params: {
              phone: this.getValue("to"),
              text: this.getValue("title") + " " + this.getValue("url")
            }
          },
          telegram: {
            shareUrl: "https://t.me/share",
            params: {
              text: this.getValue("title"),
              url: this.getValue("url")
            }
          },
          viber: {
            shareUrl: "viber://forward",
            params: {
              text: this.getValue("title") + " " + this.getValue("url")
            }
          },
          line: {
            shareUrl: "http://line.me/R/msg/text/?" + encodeURIComponent(this.getValue("title") + " " + this.getValue("url"))
          },
          pinterest: {
            shareUrl: "https://www.pinterest.com/pin/create/button/",
            params: {
              url: this.getValue("url"),
              media: this.getValue("image"),
              description: this.getValue("description")
            }
          },
          tumblr: {
            shareUrl: "http://tumblr.com/widgets/share/tool",
            params: {
              canonicalUrl: this.getValue("url"),
              content: this.getValue("url"),
              posttype: "link",
              title: this.getValue("title"),
              caption: this.getValue("caption"),
              tags: this.getValue("tags")
            }
          },
          hackernews: {
            shareUrl: "https://news.ycombinator.com/submitlink",
            params: {
              u: this.getValue("url"),
              t: this.getValue("title")
            }
          },
          reddit: {
            shareUrl: "https://www.reddit.com/submit",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title")
            }
          },
          vk: {
            shareUrl: "http://vk.com/share.php",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              description: this.getValue("caption"),
              image: this.getValue("image")
            }
          },
          xing: {
            shareUrl: "https://www.xing.com/social/share/spi",
            params: {
              url: this.getValue("url")
            }
          },
          buffer: {
            shareUrl: "https://buffer.com/add",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              via: this.getValue("via"),
              picture: this.getValue("picture")
            }
          },
          instapaper: {
            shareUrl: "http://www.instapaper.com/edit",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              description: this.getValue("description")
            }
          },
          pocket: {
            shareUrl: "https://getpocket.com/save",
            params: {
              url: this.getValue("url")
            }
          },
          mashable: {
            shareUrl: "https://mashable.com/submit",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title")
            }
          },
          mix: {
            shareUrl: "https://mix.com/add",
            params: {
              url: this.getValue("url")
            }
          },
          flipboard: {
            shareUrl: "https://share.flipboard.com/bookmarklet/popout",
            params: {
              v: 2,
              title: this.getValue("title"),
              url: this.getValue("url"),
              t: Date.now()
            }
          },
          weibo: {
            shareUrl: "http://service.weibo.com/share/share.php",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              pic: this.getValue("image"),
              appkey: this.getValue("appkey"),
              ralateUid: this.getValue("ralateuid"),
              language: "zh_cn"
            }
          },
          blogger: {
            shareUrl: "https://www.blogger.com/blog-this.g",
            params: {
              u: this.getValue("url"),
              n: this.getValue("title"),
              t: this.getValue("description")
            }
          },
          baidu: {
            shareUrl: "http://cang.baidu.com/do/add",
            params: {
              it: this.getValue("title"),
              iu: this.getValue("url")
            }
          },
          douban: {
            shareUrl: "https://www.douban.com/share/service",
            params: {
              name: this.getValue("name"),
              href: this.getValue("url"),
              image: this.getValue("image"),
              comment: this.getValue("description")
            }
          },
          okru: {
            shareUrl: "https://connect.ok.ru/dk",
            params: {
              "st.cmd": "WidgetSharePreview",
              "st.shareUrl": this.getValue("url"),
              title: this.getValue("title")
            }
          },
          mailru: {
            shareUrl: "http://connect.mail.ru/share",
            params: {
              share_url: this.getValue("url"),
              linkname: this.getValue("title"),
              linknote: this.getValue("description"),
              type: "page"
            }
          },
          evernote: {
            shareUrl: "https://www.evernote.com/clip.action",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title")
            }
          },
          skype: {
            shareUrl: "https://web.skype.com/share",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title")
            }
          },
          delicious: {
            shareUrl: "https://del.icio.us/post",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title")
            }
          },
          sms: {
            shareUrl: "sms://",
            params: {
              body: this.getValue("body")
            }
          },
          trello: {
            shareUrl: "https://trello.com/add-card",
            params: {
              url: this.getValue("url"),
              name: this.getValue("title"),
              desc: this.getValue("description"),
              mode: "popup"
            }
          },
          messenger: {
            shareUrl: "fb-messenger://share",
            params: {
              link: this.getValue("url")
            }
          },
          odnoklassniki: {
            shareUrl: "https://connect.ok.ru/dk",
            params: {
              st: {
                cmd: "WidgetSharePreview",
                deprecated: 1,
                shareUrl: this.getValue("url")
              }
            }
          },
          meneame: {
            shareUrl: "https://www.meneame.net/submit",
            params: {
              url: this.getValue("url")
            }
          },
          diaspora: {
            shareUrl: "https://share.diasporafoundation.org",
            params: {
              title: this.getValue("title"),
              url: this.getValue("url")
            }
          },
          googlebookmarks: {
            shareUrl: "https://www.google.com/bookmarks/mark",
            params: {
              op: "edit",
              bkmk: this.getValue("url"),
              title: this.getValue("title")
            }
          },
          qzone: {
            shareUrl: "https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey",
            params: {
              url: this.getValue("url")
            }
          },
          refind: {
            shareUrl: "https://refind.com",
            params: {
              url: this.getValue("url")
            }
          },
          surfingbird: {
            shareUrl: "https://surfingbird.ru/share",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              description: this.getValue("description")
            }
          },
          yahoomail: {
            shareUrl: "http://compose.mail.yahoo.com",
            params: {
              to: this.getValue("to"),
              subject: this.getValue("subject"),
              body: this.getValue("body")
            }
          },
          wordpress: {
            shareUrl: "https://wordpress.com/wp-admin/press-this.php",
            params: {
              u: this.getValue("url"),
              t: this.getValue("title"),
              s: this.getValue("title")
            }
          },
          amazon: {
            shareUrl: "https://www.amazon.com/gp/wishlist/static-add",
            params: {
              u: this.getValue("url"),
              t: this.getValue("title")
            }
          },
          pinboard: {
            shareUrl: "https://pinboard.in/add",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              description: this.getValue("description")
            }
          },
          threema: {
            shareUrl: "threema://compose",
            params: {
              text: this.getValue("text"),
              id: this.getValue("id")
            }
          },
          kakaostory: {
            shareUrl: "https://story.kakao.com/share",
            params: {
              url: this.getValue("url")
            }
          },
          yummly: {
            shareUrl: "http://www.yummly.com/urb/verify",
            params: {
              url: this.getValue("url"),
              title: this.getValue("title"),
              yumtype: "button"
            }
          }
        },
        a = e[t];
      if (a) {
        a.width = this.getValue("width");
        a.height = this.getValue("height");
      }
      return a !== undefined ? this.urlSharer(a) : false;
    },
    urlSharer: function urlSharer(t) {
      var e = t.params || {},
        a = Object.keys(e),
        r,
        s = a.length > 0 ? "?" : "";
      for (r = 0; r < a.length; r++) {
        if (s !== "?") {
          s += "&";
        }
        if (e[a[r]]) {
          s += a[r] + "=" + encodeURIComponent(e[a[r]]);
        }
      }
      t.shareUrl += s;
      var l = this.getValue("link") === "true";
      var i = this.getValue("blank") === "true";
      if (l) {
        if (i) {
          m.open(t.shareUrl, "_blank");
        } else {
          m.location.href = t.shareUrl;
        }
      } else {
        console.log(t.shareUrl);
        var h = t.width || 600,
          u = t.height || 480,
          o = m.innerWidth / 2 - h / 2 + m.screenX,
          p = m.innerHeight / 2 - u / 2 + m.screenY,
          g = "scrollbars=no, width=" + h + ", height=" + u + ", top=" + p + ", left=" + o,
          n = m.open(t.shareUrl, "", g);
        if (m.focus) {
          n.focus();
        }
      }
    }
  };
  if (r.readyState === "complete" || r.readyState !== "loading") {
    s.init();
  } else {
    r.addEventListener("DOMContentLoaded", s.init);
  }
  m.Sharer = s;
})(window, document);
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************************************!*\
  !*** ./public/assets/front/js/theia-sticky-sidebar.min.js ***!
  \************************************************************/
!function (i) {
  i.fn.theiaStickySidebar = function (t) {
    function e(t, e) {
      var a = o(t, e);
      a || (console.log("TSS: Body width smaller than options.minWidth. Init is delayed."), i(document).on("scroll." + t.namespace, function (t, e) {
        return function (a) {
          var n = o(t, e);
          n && i(this).unbind(a);
        };
      }(t, e)), i(window).on("resize." + t.namespace, function (t, e) {
        return function (a) {
          var n = o(t, e);
          n && i(this).unbind(a);
        };
      }(t, e)));
    }
    function o(t, e) {
      return t.initialized === !0 || !(i("body").width() < t.minWidth) && (a(t, e), !0);
    }
    function a(t, e) {
      t.initialized = !0;
      var o = i("#theia-sticky-sidebar-stylesheet-" + t.namespace);
      0 === o.length && i("head").append(i('<style id="theia-sticky-sidebar-stylesheet-' + t.namespace + '">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style>')), e.each(function () {
        function e() {
          a.fixedScrollTop = 0, a.sidebar.css({
            "min-height": "1px"
          }), a.stickySidebar.css({
            position: "static",
            width: "",
            transform: "none"
          });
        }
        function o(t) {
          var e = t.height();
          return t.children().each(function () {
            e = Math.max(e, i(this).height());
          }), e;
        }
        var a = {};
        if (a.sidebar = i(this), a.options = t || {}, a.container = i(a.options.containerSelector), 0 == a.container.length && (a.container = a.sidebar.parent()), a.sidebar.parents().css("-webkit-transform", "none"), a.sidebar.css({
          position: a.options.defaultPosition,
          overflow: "visible",
          "-webkit-box-sizing": "border-box",
          "-moz-box-sizing": "border-box",
          "box-sizing": "border-box"
        }), a.stickySidebar = a.sidebar.find(".theiaStickySidebar"), 0 == a.stickySidebar.length) {
          var s = /(?:text|application)\/(?:x-)?(?:javascript|ecmascript)/i;
          a.sidebar.find("script").filter(function (i, t) {
            return 0 === t.type.length || t.type.match(s);
          }).remove(), a.stickySidebar = i("<div>").addClass("theiaStickySidebar").append(a.sidebar.children()), a.sidebar.append(a.stickySidebar);
        }
        a.marginBottom = parseInt(a.sidebar.css("margin-bottom")), a.paddingTop = parseInt(a.sidebar.css("padding-top")), a.paddingBottom = parseInt(a.sidebar.css("padding-bottom"));
        var r = a.stickySidebar.offset().top,
          d = a.stickySidebar.outerHeight();
        a.stickySidebar.css("padding-top", 1), a.stickySidebar.css("padding-bottom", 1), r -= a.stickySidebar.offset().top, d = a.stickySidebar.outerHeight() - d - r, 0 == r ? (a.stickySidebar.css("padding-top", 0), a.stickySidebarPaddingTop = 0) : a.stickySidebarPaddingTop = 1, 0 == d ? (a.stickySidebar.css("padding-bottom", 0), a.stickySidebarPaddingBottom = 0) : a.stickySidebarPaddingBottom = 1, a.previousScrollTop = null, a.fixedScrollTop = 0, e(), a.onScroll = function (a) {
          if (a.stickySidebar.is(":visible")) {
            if (i("body").width() < a.options.minWidth) return void e();
            if (a.options.disableOnResponsiveLayouts) {
              var s = a.sidebar.outerWidth("none" == a.sidebar.css("float"));
              if (s + 50 > a.container.width()) return void e();
            }
            var r = i(document).scrollTop(),
              d = "static";
            if (r >= a.sidebar.offset().top + (a.paddingTop - a.options.additionalMarginTop)) {
              var c,
                p = a.paddingTop + t.additionalMarginTop,
                b = a.paddingBottom + a.marginBottom + t.additionalMarginBottom,
                l = a.sidebar.offset().top,
                f = a.sidebar.offset().top + o(a.container),
                h = 0 + t.additionalMarginTop,
                g = a.stickySidebar.outerHeight() + p + b < i(window).height();
              c = g ? h + a.stickySidebar.outerHeight() : i(window).height() - a.marginBottom - a.paddingBottom - t.additionalMarginBottom;
              var u = l - r + a.paddingTop,
                S = f - r - a.paddingBottom - a.marginBottom,
                y = a.stickySidebar.offset().top - r,
                m = a.previousScrollTop - r;
              "fixed" == a.stickySidebar.css("position") && "modern" == a.options.sidebarBehavior && (y += m), "stick-to-top" == a.options.sidebarBehavior && (y = t.additionalMarginTop), "stick-to-bottom" == a.options.sidebarBehavior && (y = c - a.stickySidebar.outerHeight()), y = m > 0 ? Math.min(y, h) : Math.max(y, c - a.stickySidebar.outerHeight()), y = Math.max(y, u), y = Math.min(y, S - a.stickySidebar.outerHeight());
              var k = a.container.height() == a.stickySidebar.outerHeight();
              d = (k || y != h) && (k || y != c - a.stickySidebar.outerHeight()) ? r + y - a.sidebar.offset().top - a.paddingTop <= t.additionalMarginTop ? "static" : "absolute" : "fixed";
            }
            if ("fixed" == d) {
              var v = i(document).scrollLeft();
              a.stickySidebar.css({
                position: "fixed",
                width: n(a.stickySidebar) + "px",
                transform: "translateY(" + y + "px)",
                left: a.sidebar.offset().left + parseInt(a.sidebar.css("padding-left")) - v + "px",
                top: "0px"
              });
            } else if ("absolute" == d) {
              var x = {};
              "absolute" != a.stickySidebar.css("position") && (x.position = "absolute", x.transform = "translateY(" + (r + y - a.sidebar.offset().top - a.stickySidebarPaddingTop - a.stickySidebarPaddingBottom) + "px)", x.top = "0px"), x.width = n(a.stickySidebar) + "px", x.left = "", a.stickySidebar.css(x);
            } else "static" == d && e();
            "static" != d && 1 == a.options.updateSidebarHeight && a.sidebar.css({
              "min-height": a.stickySidebar.outerHeight() + a.stickySidebar.offset().top - a.sidebar.offset().top + a.paddingBottom
            }), a.previousScrollTop = r;
          }
        }, a.onScroll(a), i(document).on("scroll." + a.options.namespace, function (i) {
          return function () {
            i.onScroll(i);
          };
        }(a)), i(window).on("resize." + a.options.namespace, function (i) {
          return function () {
            i.stickySidebar.css({
              position: "static"
            }), i.onScroll(i);
          };
        }(a)), "undefined" != typeof ResizeSensor && new ResizeSensor(a.stickySidebar[0], function (i) {
          return function () {
            i.onScroll(i);
          };
        }(a));
      });
    }
    function n(i) {
      var t;
      try {
        t = i[0].getBoundingClientRect().width;
      } catch (i) {}
      return "undefined" == typeof t && (t = i.width()), t;
    }
    var s = {
      containerSelector: "",
      additionalMarginTop: 0,
      additionalMarginBottom: 0,
      updateSidebarHeight: !0,
      minWidth: 0,
      disableOnResponsiveLayouts: !0,
      sidebarBehavior: "modern",
      defaultPosition: "relative",
      namespace: "TSS"
    };
    return t = i.extend(s, t), t.additionalMarginTop = parseInt(t.additionalMarginTop) || 0, t.additionalMarginBottom = parseInt(t.additionalMarginBottom) || 0, e(t, this), this;
  };
}(jQuery);
})();

/******/ })()
;