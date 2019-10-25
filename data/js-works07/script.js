//分岐の練習（何のご飯を食べようか？？）

/*
let friendA = "じゃ〜お寿司とかどうかな？？";

document.write("友達A：" + "晩ごはん何食べたい？");
document.write("自分：" + friendA);

if (friendA === "イタリアンが良くね？") {
  document.write("友達A：え〜あんまり気分じゃない。。");
  document.write("自分：・・・・");
} else if (friendA === "じゃ〜お寿司とかどうかな？？") {
  document.write("友達A：え〜高いじゃん！おごってくれるの？");
  document.write("自分：・・・・");
}
*/

let friendA = Math.floor(Math.random() * 2)? "じゃ〜お寿司とかどうかな？？": "イタリアンが良くね？";

document.write("友達A：" + "晩ごはん何食べたい？");
document.write("自分：" + friendA);

if (friendA === "イタリアンが良くね？") {
  document.write("友達A：え〜あんまり気分じゃない。。");
  document.write("自分：・・・・");
} else if (friendA === "じゃ〜お寿司とかどうかな？？") {
  document.write("友達A：え〜高いじゃん！おごってくれるの？");
  document.write("自分：・・・・");
}
