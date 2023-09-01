//  ライブラリ js-cookie使用
//  <head>で読み込み
//--------------------------------------------------
//  アイテム
//--------------------------------------------------
class buttonCookie {
    constructor(i_parentgroup, i_btnclass, i_cookiename, i_cookietype) {
        this.parentgroup = i_parentgroup;
        this.btn = i_btnclass;
        this.cookiename = i_cookiename;
        this.cookietype = i_cookietype;

        //this.setInit();
        this.get();
        //  cssにデータをセット
        this.setcssdata();
    }

    // スクロールを禁止にする関数
    disableScroll(event) {
        event.preventDefault();
    }

    //  初期値で上書き
    setInit() {
        //document.cookie = 'name=' + this.cookiename;
        //document.cookie = 'checked=' + this.cookiestate;
        switch (this.cookietype) {
            case "bool":
                Cookies.set(this.cookiename, "false");
                //console.log("setInit : bool : false");
                break;

            default:
                Cookies.set(this.cookiename, "false");
                //console.log("setInit : default : false");
                break;
        }
    }

    set(i_state) {
        Cookies.set(this.cookiename, i_state);
    }

    get() {
        //  クッキーがなければ初期値をセット
        let ret = Cookies.get(this.cookiename);
        if (typeof ret === "undefined") {
            //console.log("get : 未定義です : [type]" + this.cookietype);
            this.setInit();
        } else {
            //console.log("get : " + ret);
        }
        return ret;
    }
    checktype_bool() {
        if (this.cookietype == "bool") return true;
        return false;
    }
    setcssdata() {
        this.btn.dataset.data = Cookies.get(this.cookiename);
    }

    //  グループに、このデータ名と同じデータ名があればdataを同じにする
    groupupdate() {
        let name = this.cookiename;
        this.parentgroup.forEach((target) => {
            if (target.cookiename == name) {
                target.btn.dataset.data = Cookies.get(this.cookiename);
            }
        });
    }

    toggle() {
        //  クッキー取得
        let cook = Cookies.get(this.cookiename, this.cookiestate);
        //  クッキーの
        switch (cook) {
            case "true":
                Cookies.set(this.cookiename, "false");
                //  データ属性の追加
                //this.btn.dataset.data = "false";
                this.setcssdata();
                break;

            case "false":
                Cookies.set(this.cookiename, "true");
                //  データ属性の追加
                //this.btn.dataset.data = "true";
                this.setcssdata();
                break;
        }
        return this.get();
    }
}



//--------------------------------------------------
//  エンジン
//--------------------------------------------------
export default class buttonCookieEngine {
    // パララックスアイテム
    constructor() {
        this.items = [];
    }

    //  アイテムの追加
    add(i_item) {
        //  クリックイベントセット
        i_item.btn.addEventListener("click", () => {
            //console.log("cookie click [name]" + i_item.cookiename + "[type]" + i_item.cookietype);
            if (i_item.checktype_bool()) {
                i_item.toggle();
            }
            //  クリックした時に同ネームのdata-nameを連動させるには？
            //  アイテムにグループを保存して参照する
            i_item.groupupdate();
        });
        this.items.push(i_item);

    }

    //  処理
    task() {
        /*
            this.scroll = window.pageYOffset;
            for (var i = 0; i < this.items.length; i++) {
                var itm = this.items[i];
                //console.log("[eeParallaxEngine::task()][%d/%d][item]", i, this.items.length, itm);
                this.taskItem(itm);
            }
        */
    }

    //  個別アイテム処理
    taskItem(i_Item) {
        //      var itm = i_Item.getTarget();
    }

    //  指定クラスがあれば全部登録
    eventRegistration() {
        let jsbtns = document.querySelectorAll('.js-cookiebutton');
        let itemgroup = this.items;
        //console.log("cookiebuttonクラスの初期化 : 数 : " + jsbtns.length);
        jsbtns.forEach((target) => {
            let name = target.dataset['name'] || "dummy";
            let type = target.dataset['type'] || "default";
            let data = target.dataset['data'] || "false";
            //console.log("[target]" + target + " [name]" + name + " [type]" + type + " [data]" + data);
            const btn = new buttonCookie(itemgroup, target, name, type);
            this.add(btn);
        });
    }
}