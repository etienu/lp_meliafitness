//new Splide(".splide").mount();

var splide__planner = null;
var splide__report = null;

//--------------------------------------------------------
//  プランナー
//--------------------------------------------------------
var ret = null;
ret = document.querySelector("#splide__planner");
if (ret) {
    splide__planner = new Splide('#splide__planner', {
        arrows: false,
        pagination: false,
        fixedWidth: 'auto',
        autoplay: true, // 自動再生
        type: "loop", // ループ
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
        pauseOnFocus: false, // 矢印をクリックしてもスクロールを停止させない
        interval: 4000, // 自動再生の間隔
        speed: 5000, // スライダーの移動時間
        /*
        autoScroll: {
            speed: 1.0,
            pauseOnHover: false,
            pauseOnFocus: false,
        },*/

        ///    padding: "0%", // スライダーの左右の余白
        padding: "20px", // スライダーの左右の余白(SP)
        gap: 48, // スライド間の余白

    });

    splide__planner.mount();

    //splide__planner.mount(window.splide.Extensions); //拡張機能をセットする
}


//--------------------------------------------------------
//  リポート
//--------------------------------------------------------
ret = document.querySelector("#splide__report");
if (ret) {
    splide__report = new Splide('#splide__report', {
        arrows: false,
        //fixedWidth: 'auto',
        pagination: false,
        autoplay: true,
        type: "loop",
        pauseOnHover: false,
        pauseOnFocus: false,
        interval: 3500,
        speed: 2000,
        //padding: "0px",
        gap: 16,

        mediaQuery: 'min',
        fixedWidth: 'auto',
        arrows: false,
        //drag: 'free',
        flickPower: 300,

        autoScroll: {
            speed: 0.5,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    });

    splide__report.mount();
}

//--------------------------------------------------------
//  whats プランナー画像
//--------------------------------------------------------
/*
var splide__whats = new Splide('#splide__whats', {
    arrows: false,
    pagination: false,
    autoplay: true,
    type: "loop",
    pauseOnHover: false,
    pauseOnFocus: false,
    interval: 2000,
    speed: 1000,
    gap: 3,
    perPage: 1,

});

splide__whats.mount();
*/
const target_whats = '#splide__whats';
if (document.querySelector(target_whats)) {
    const options_whats = {
        mediaQuery: 'min',
        fixedWidth: 'auto',
        gap: 3,
        type: 'loop',
        arrows: false,
        //drag: 'free',
        flickPower: 300,
        pagination: false,

        autoScroll: {
            speed: 0.5,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
        /*
            breakpoints: {
                1025: {
                    gap: 3,
                    fixedWidth: '36rem',
                }
            },*/
    }

    const splide__whats = new Splide(target_whats, options_whats);

    splide__whats.mount(window.splide.Extensions); //拡張機能をセットする
    //splide__whats.mount();
}
//--------------------------------------------------------
//  reports new
//--------------------------------------------------------
const target_reports_ranking_sp = '#splide__reports__ranking__sp';
if (document.querySelector(target_reports_ranking_sp)) {
    const options_reports_ranking_sp = {
        mediaQuery: 'min',
        fixedWidth: 'auto',
        padding: { left: 16 },
        gap: 16,
        //type: 'loop',
        arrows: false,
        //drag: 'free',
        flickPower: 300,
        pagination: false,
        autoScroll: {
            speed: 0.0,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    }

    const splide_reports_ranking_sp = new Splide(target_reports_ranking_sp, options_reports_ranking_sp);

    splide_reports_ranking_sp.mount(window.splide.Extensions); //拡張機能をセットする
    //splide_reports_ranking_sp.mount();
}

//--------------------------------------------------------
//  reports new
//--------------------------------------------------------
const target_reports_new = '#splide__reports__new';
if (document.querySelector(target_reports_new)) {
    const options_reports_new = {
        mediaQuery: 'min',
        //    fixedWidth: '24rem',
        fixedWidth: 'auto',
        //fixedWidth: '348px',
        padding: { left: 15 },
        gap: 16,
        type: 'loop',
        arrows: false,
        drag: 'free',
        flickPower: 300,
        pagination: false,
        autoScroll: {
            speed: 0.0,
            pauseOnHover: false,
            pauseOnFocus: false,
        },

        breakpoints: {
            768: {
                gap: 32,
                //fixedWidth: '36rem',
            }
        },


    }

    const splide_reports_new = new Splide(target_reports_new, options_reports_new);

    splide_reports_new.mount(window.splide.Extensions); //拡張機能をセットする
    //splide_reports_new.mount();
}

//--------------------------------------------------------
//  reccomend ranking
//--------------------------------------------------------
const target_reccomend_ranking = '#splide__reccomend__ranking';
if (document.querySelector(target_reccomend_ranking)) {
    const options_reccomend_ranking = {

        arrows: false,
        fixedWidth: 'auto',
        pagination: false,
        autoplay: "pause", // 自動再生
        //type: "loop", // ループ
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
        pauseOnFocus: false, // 矢印をクリックしてもスクロールを停止させない
        interval: 2000, // 自動再生の間隔
        speed: 1000, // スライダーの移動時間
        padding: "15px", // スライダーの左右の余白
        gap: 16, // スライド間の余白
        autoStart: false,
        /*
            autoScroll: {
                speed: 0.5,
                pauseOnHover: false,
                pauseOnFocus: false,
            },
        */
    }

    const splide_reccomend_ranking = new Splide(target_reccomend_ranking, options_reccomend_ranking);

    splide_reccomend_ranking.mount();
}
//--------------------------------------------------------
//  reccomend new
//--------------------------------------------------------
const target_reccomend_new = '#splide__reccomend__new';
if (document.querySelector(target_reccomend_new)) {

    const options_reccomend_new = {

        arrows: false,
        fixedWidth: 'auto',
        //fixedWidth: 397,
        pagination: false,
        autoplay: "pause", // 自動再生
        type: "loop", // ループ
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
        pauseOnFocus: false, // 矢印をクリックしてもスクロールを停止させない
        interval: 2000, // 自動再生の間隔
        speed: 1000, // スライダーの移動時間
        padding: "22.5%", // スライダーの左右の余白
        gap: 35,
        autoStart: false,
        breakpoints: {
            768: {
                padding: "14px", // スライダーの左右の余白
                gap: 16, // スライド間の余白
                //fixedWidth: '36rem',
            }
        },
        /*
            mediaQuery: 'min',
            fixedWidth: '24rem',
            gap: 35,
            type: 'loop',
            arrows: false,
            drag: 'free',
            flickPower: 300,
            pagination: false,
        */

        autoScroll: {
            speed: 0.5,
            pauseOnHover: false,
            pauseOnFocus: false,
        },

    }

    const splide_reccomend_new = new Splide(target_reccomend_new, options_reccomend_new);

    splide_reccomend_new.mount(window.splide.Extensions); //    拡張機能をセットする
    //splide_reccomend_new.mount(); //  引数入れると絶対オートスクロールが始まってしまう
    /*
    var splide__reccomend_new2 = new Splide('#splide__reccomend__new', {
        arrows: false,
        pagination: false,
        //autoplay: true, // 自動再生
        type: "loop", // ループ
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
        pauseOnFocus: false, // 矢印をクリックしてもスクロールを停止させない
        interval: 2000, // 自動再生の間隔
        speed: 1000, // スライダーの移動時間
        padding: "0%", // スライダーの左右の余白
        gap: 48, // スライド間の余白

    });

    splide__reccomend_new2.mount();
    */
}
//--------------------------------------------------------
//  voices new
//--------------------------------------------------------
const target_voices_new = '#splide__voices__new';
if (document.querySelector(target_voices_new)) {

    const options_voices_new = {
        mediaQuery: 'min',
        fixedWidth: 'auto',
        //fixedWidth: 1175, //'24rem',
        padding: "0", // スライダーの左右の余白
        //padding: { left: 38 },
        gap: 16,
        type: 'loop',
        arrows: false,
        drag: 'free',
        flickPower: 100,
        pagination: false,

        autoScroll: {
            speed: 0.0,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
        breakpoints: {
            768: {
                //fixedWidth: 'auto',
                padding: "0px", // スライダーの左右の余白
                gap: 24, // スライド間の余白
                //fixedWidth: '36rem',
            }
        },
    }

    const splide_voices_new = new Splide(target_voices_new, options_voices_new);

    splide_voices_new.mount(window.splide.Extensions); //    拡張機能をセットする
    //splide_voices_new.mount();
}

//--------------------------------------------------------
//  voices planner ranking
//--------------------------------------------------------
const target_voices_ranking = '#splide__voices__ranking';
if (document.querySelector(target_voices_ranking)) {

    const options_voices_ranking = {
        mediaQuery: 'min',
        fixedWidth: 'auto',
        //fixedWidth: 1175, //'24rem',
        padding: "0", // スライダーの左右の余白
        //padding: { left: 38 },
        gap: 16,
        //type: 'loop',
        arrows: false,
        drag: 'free',
        flickPower: 300,
        pagination: false,
        /*
            autoScroll: {
                speed: 0.5,
                pauseOnHover: false,
                pauseOnFocus: false,
            },*/
        breakpoints: {
            768: {
                //fixedWidth: 'auto',
                padding: "0px", // スライダーの左右の余白
                gap: 24, // スライド間の余白
                //fixedWidth: '36rem',
            }
        },
    }

    const splide_voices_ranking = new Splide(target_voices_ranking, options_voices_ranking);

    splide_voices_ranking.mount(window.splide.Extensions);
    //splide_voices_ranking.mount();
}