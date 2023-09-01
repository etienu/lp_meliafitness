//----------------------------------------
//  モーダルボタン
//----------------------------------------
export default class buttonModal {
    constructor(i_btnclass, i_modal, i_background) {
        //        this.init();
        //console.log(i_btnclass + "/[modal]" + i_modal);

        this.btn = document.querySelector(i_btnclass);
        this.modal = document.querySelector(i_modal);
        this.background = document.querySelector(i_background);
        if (!this.btn) return;
        if (!this.modal) return;
    }

    // スクロールを禁止にする関数
    disableScroll(event) {
        event.preventDefault();
    }
    addScrollStop() {
        document.addEventListener('touchmove', this.disableScroll, { passive: false });
        document.addEventListener('mousewheel', this.disableScroll, { passive: false });
    }
    removeScrollStop() {
        document.removeEventListener('touchmove', this.disableScroll, { passive: false });
        document.removeEventListener('mousewheel', this.disableScroll, { passive: false });
    }

    //  ハンバーガー開く
    open() {
        if (!this.btn) return;
        if (!this.modal) return;
        this.btn.classList.toggle("open");
        this.modal.classList.toggle("open");
        //this.header.classList.toggle("open");
        //  開いた スクロール停止
        if (this.btn.classList.contains("open")) {
            //console.log("stopしてる？");
            this.addScrollStop();
        }
        //  閉じた スクロール解除
        else {
            this.removeScrollStop();
        }
    }

    //  ハンバーガー閉じる( 主にメニュークリック時 )
    close() {
        if (!this.btn) return;
        if (!this.modal) return;
        this.btn.classList.remove("open");
        this.modal.classList.remove("open");
        //this.header.classList.remove("open");
        // スクロール解除
        this.removeScrollStop();
    }

    //  各種イベントの登録
    eventRegistration(i_inner, i_ullia, i_contact) {
        //  元
        //let spmenu_li_a = document.querySelectorAll('.p-spmenu__inner ul li a');
        //let spmenu_contact = document.querySelectorAll('.p-spmenu__inner .l-header__buttonswrapper a');
        if (!this.btn) return;
        //  クリックイベントセット
        this.btn.addEventListener("click", () => { this.open(); });
        //  ul liのメニューがクリックされたら閉じる
        let str_ullia = i_inner + " " + i_ullia;
        //console.log(str_ullia);
        let modal_li_a = document.querySelectorAll(str_ullia);
        modal_li_a.forEach((lia) => {
            lia.addEventListener("click", () => { this.close(); });
        });

        //  コンタクトボタンが押されたら閉じる
        let str_contact = i_inner + " " + i_contact;
        //console.log(str_contact);
        let modal_contact = document.querySelectorAll(str_contact);
        modal_contact.forEach((lia) => {
            lia.addEventListener("click", () => { this.close(); });
        });

        //  背景がクリックされたら閉じる
        this.background.addEventListener("click", () => { this.close(); });
    }
}