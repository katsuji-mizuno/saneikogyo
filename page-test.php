<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>フルページスクロール for IE11</title>
    <script src="<?php bloginfo('template_directory'); ?>/js/smoothscroll1.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/intersection-observer.js"></script>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      h1 {
        margin-bottom: 1.8em;
      }

      p {
        margin-bottom: 2em;
      }

      .fullPageScroll {
        width: 100%;
        height: 100vh;
        scroll-snap-type: mandatory;
        scroll-snap-points-y: repeat(100vh);
        -ms-scroll-snap-type: mandatory;
        -ms-scroll-snap-points-y: repeat(100vh);
        -webkit-scroll-snap-type: mandatory;
        -webkit-scroll-snap-points-y: repeat(100vh);
        scroll-snap-type: y mandatory;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
      }

      .section {
        width: 100%;
        height: 100vh;
        padding: 10%;
        scroll-snap-align: start;
      }

      .section1 {
        background-color: #ffba49;
      }

      .section2 {
        background-color: #212124;
        position: relative;
      }

      .imageWrapper{
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
      }

      .section2 img {
        display: block;
        position: absolute;
        width: 100%;
        height: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .section2 h1 {
        position: absolute;
        left: 0;
        top: 88%;
        width: 100%;
        color: #ffffff;
        text-align: center;
      }

      .section3 {
        background-color: #ef5b5b;
      }

      .section3 .innerScroll {
        height: 80%;
        overflow-y: scroll;
      }

      .section4 {
        background-color: #a4a9ad;
        padding: 0;
      }

      .section4 iframe {
        width: 100%;
        height: 100%;
      }

      .section5 {
        background-color: #20a39e;
      }

      .pagination {
        position: fixed;
        top: 50%;
        right: 32px;
        transform: translateY(-50%);
      }

      .pagination a {
        display: block;
        width: 12px;
        height: 12px;
        margin: 24px 0;
        border-radius: 50%;
        background-color: #fcfcfc;
        transition: transform 0.2s;
      }

      .pagination a.active {
        transform: scale(1.8);
      }
    </style>
  </head>
  <body>
    <div class="fullPageScroll">
      <section id="section1" class="section section1">
        <h1>Section 1</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
          at dolorem, eveniet fugit iste maxime nihil sint. Aperiam dolor in
          ipsam nesciunt, nihil odio rem, sit suscipit totam velit voluptate?
        </p>
      </section>
      <section id="section2" class="section section2">
        <div class="imageWrapper">
          <img src="../photo.jpg" alt="" width="800" height="534" />
        </div>
        <h1>Tokyo Gate Bridge by SONY a7R3</h1>
      </section>
      <section id="section3" class="section section3">
        <h1>Section 3</h1>
        <div class="innerScroll">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
            at dolorem, eveniet fugit iste maxime nihil sint. Aperiam dolor in
            ipsam nesciunt, nihil odio rem, sit suscipit totam velit voluptate?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Dignissimos distinctio eius laborum laudantium optio qui vero. A
            aspernatur cupiditate dolore enim ipsam magni necessitatibus nemo
            quae, repudiandae rerum soluta voluptatum.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi
            asperiores consequatur cum deserunt, dignissimos ea excepturi fugiat
            id in labore libero odit quasi quis quisquam quo quod sint voluptas.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
            at dolorem, eveniet fugit iste maxime nihil sint. Aperiam dolor in
            ipsam nesciunt, nihil odio rem, sit suscipit totam velit voluptate?
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Dignissimos omnis, repudiandae! At atque aut deserunt facilis fugit
            hic ipsa labore molestiae nemo numquam placeat provident quidem quos
            repellendus reprehenderit, sit. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Asperiores at dolorem, eveniet fugit
            iste maxime nihil sint. Aperiam dolor in ipsam nesciunt, nihil odio
            rem, sit suscipit totam velit voluptate?
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
            incidunt nam sint ullam. Beatae consequuntur placeat saepe ullam
            vero. Assumenda aut autem dolor enim optio repellat sunt. Facere
            laboriosam, quo? Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Asperiores, quas unde. At, blanditiis dicta dolore doloribus,
            exercitationem facilis fugiat inventore ipsam libero, maiores
            officiis praesentium quae ratione rem repellat vitae? Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Asperiores at dolorem,
            eveniet fugit iste maxime nihil sint. Aperiam dolor in ipsam
            nesciunt, nihil odio rem, sit suscipit totam velit voluptate?
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cumque
            doloremque laudantium neque obcaecati saepe tempora, temporibus
            voluptate? Corporis culpa illum incidunt, ipsum obcaecati officiis
            quae quaerat qui reiciendis sunt. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Asperiores at dolorem, eveniet fugit
            iste maxime nihil sint. Aperiam dolor in ipsam nesciunt, nihil odio
            rem, sit suscipit totam velit voluptate?
          </p>
        </div>
      </section>
      <section id="section4" class="section section4">
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/Vk6rbXQK7Qc"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </section>
      <section id="section5" class="section section5">
        <h1>Section 5</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
          at dolorem, eveniet fugit iste maxime nihil sint. Aperiam dolor in
          ipsam nesciunt, nihil odio rem, sit suscipit totam velit voluptate?
        </p>
      </section>
    </div>
    <nav id="pagination" class="pagination">
      <a id="pagination1" data-id="section1" href="#section1"></a>
      <a id="pagination2" data-id="section2" href="#section2"></a>
      <a id="pagination3" data-id="section3" href="#section3"></a>
      <a id="pagination4" data-id="section4" href="#section4"></a>
      <a id="pagination5" data-id="section5" href="#section5"></a>
    </nav>
    <script>
      // スムーススクロール
      const pagersNodeList = document.querySelectorAll(".pagination a");
      const pagers = Array.prototype.slice.call(pagersNodeList, 0);
      pagers.forEach(function(pager) {
        pager.addEventListener("click", function(e) {
          e.preventDefault();
          const targetId = e.target.hash;
          const target = document.querySelector(targetId);
          target.scrollIntoView({ behavior: "smooth" });
        });
      });

      // Intersection Observer
      const sectionsNodeList = document.querySelectorAll(".section");
      const sections = Array.prototype.slice.call(sectionsNodeList, 0);
      const observerRoot = document.querySelector(".fullPageScroll");
      const options = {
        root: observerRoot,
        rootMargin: "-50% 0px",
        threshold: 0
      };
      const observer = new IntersectionObserver(doWhenIntersect, options);
      sections.forEach(function(section) {
        observer.observe(section);
      });

      /**
       * 交差したときに呼び出す関数
       * @param entriesNodeList - IntersectionObserverEntry IntersectionObserverが交差したときに渡されるオブジェクトです。
       */
      function doWhenIntersect(entriesNodeList) {
        const entries = Array.prototype.slice.call(entriesNodeList, 0);
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            activatePagination(entry.target);
          }
        });
      }

      /**
       * ページネーションの大きさを変える関数
       * @param element - HTMLElement 現在表示中のスライドのHTML要素を引数に取ります。
       */
      function activatePagination(element) {
        const currentActiveIndex = document.querySelector(
          "#pagination .active"
        );
        if (currentActiveIndex !== null) {
          currentActiveIndex.classList.remove("active");
        }
        const newActiveIndex = document.querySelector(
          "a[href='#" + element.id + "']"
        );
        newActiveIndex.classList.add("active");
      }
    </script>
  </body>
</html>
