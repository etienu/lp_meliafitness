const pHeader = document.querySelector('header');
let headerHeight = (pHeader ? pHeader.offsetHeight : 0);
const adjustHeader = 0;
const smoothScrollSpeed = 500;
//  全てのa href="#"を取得
let alinks = document.querySelectorAll('a[href^="#"]');
//  全てのaにクリックイベント設定
alinks.forEach((anchor) => {
    anchor.addEventListener('click', function(e) {
        // クリックされたときのデフォルトの挙動を防ぐ
        e.preventDefault();
        let href = anchor.getAttribute("href");
        headerHeight = (pHeader ? pHeader.offsetHeight : 0);
        //console.log('[a]:' + headerHeight);
        //console.log('[a]:' + href);

        // href属性の#を取り除いた部分と一致するIDを取得
        const target = document.getElementById(href.replace('#', ''));
        let targetPosition = 0;
        if (target != null) {
            //取得した要素の位置を取得するために、getBoundingClientRect()を呼び出し、ページ上の位置を計算。
            //headerの高さを引いて、スクロール位置がヘッダーの下になるように調整します。
            targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

        }


        // window.scrollTo()を呼び出して、スクロール位置を設定します。behaviorオプションをsmoothに設定することで、スムーズなスクロールを実現します。
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    });
});