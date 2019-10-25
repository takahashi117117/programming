//分岐の練習（母と子供のワンシーン）


const child = Math.floor(Math.random() * 2) ? "やだやだ！買ってよ〜〜〜。" : "買ってくれるまで動かない！！";

document.write("母親：おもちゃは買わないから。もう、帰るわよ！！" + "<br>");
document.write("子供：" + child + "<br>");

if ( child === "やだやだ！買ってよ〜〜〜。" ) {
  document.write("母親：ダメ！！！" + "<br>");
} else if (child === "買ってくれるまで動かない！！") {
  for (let i = 0; i <= 30; i++) {
    document.write("母親：コッチ来なさい！！（怒）" + "<br>");
  }
  document.write("子供：え〜〜〜ん（泣）" + "<br>");
}

/*
function num() {
  document.write("母親：コッチ来なさい！！（怒）" + "<br>");
}
setInterval(num,100);
*/
