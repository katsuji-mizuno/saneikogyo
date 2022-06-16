  /* 監視対象指定 */
  var boxes = document.querySelectorAll(".js-monitored");
  var boxesArray = Array.prototype.slice.call(boxes, 0);
  var options = {
    root: null,
    rootMargin: "0px 50%",
    threshold: 0,
  };
  var observer = new IntersectionObserver(doWhenIntersect, options);
  boxesArray.forEach(function (box) {
    observer.observe(box);
  }); // 交差したときに呼び出す関数
  // @param entries

  function doWhenIntersect(entries) {
    var entriesArray = Array.prototype.slice.call(entries, 0);
    entriesArray.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  }
  /* 監視対象指定 */

  /* ドット　ページネーション */
  var nodelist = document.querySelectorAll(".js-section");
  var node = Array.prototype.slice.call(nodelist, 0);
  var options = {
    root: null,
    // 今回はビューポートをルート要素とする
    rootMargin: "-50% 0px",
    // ビューポートの中心を判定基準にする
    threshold: 0, // 閾値は0
  };
  var observer = new IntersectionObserver(doWhenIntersect1, options); //console.log(doWhenIntersect1);
  // それぞれのboxを監視する

  node.forEach(function (section) {
    observer.observe(section);
  }); // 交差したときに呼び出す関数
  // @param entries

  function doWhenIntersect1(entries) {
    //console.log(entries);
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        activateIndex(entry.target);
      }
    });
  } // 目次の色を変える関数
  // @param element

  function activateIndex(element) {
    // すでにアクティブになっている目次を選択
    var currentActiveIndex = document.querySelector("#indexList .active"); // すでにアクティブになっているものが0個の時（=null）以外は、activeクラスを除去

    if (currentActiveIndex !== null) {
      currentActiveIndex.classList.remove("active");
    } // 引数で渡されたDOMが飛び先のaタグを選択し、activeクラスを付与

    var newActiveIndex = document.querySelector("#indexList a[href='#" + element.id + "']");
    newActiveIndex.classList.add("active");
  }
  /* ドット　ページネーション */