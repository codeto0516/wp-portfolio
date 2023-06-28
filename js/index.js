
smooth = (className) => {

    window.addEventListener('DOMContentLoaded', () => {

        // 指定クラスのオブジェクトを取得
        const elements = document.querySelectorAll(className);

        // アニメーション関数
        const AnimationFunc = () => {

            // 取得したオブジェクトを1つずつ取り出す
            elements.forEach(element => {

                // どれくらい現れたら出現させるか
                const triggerMargin = 0; 

                // 要素が画面内にあるか判定
                if (window.innerHeight > element.getBoundingClientRect().top + triggerMargin) {
                    // あればonクラスを追加する
                    element.classList.add('on');
                } else {
                    element.classList.remove('on');
                }
            })
        }
        window.addEventListener('load', AnimationFunc);    // ロードした際にイベント発火
        window.addEventListener('scroll', AnimationFunc);  // スクロールした際にイベント発火
    });

}

smooth(".smooth_up");
smooth(".smooth_up_slow");
smooth(".smooth_left");
smooth(".smooth_right");


