$(function () {
  $("h1").fadeIn(1000);
});

//ショップでの消費税の計算
const cache = 1000;
document.write("あなたのお会計は、"+cache+"です。"+"<br>");
document.write("消費税をいれると、"+cache*1.1+"になります。");

//九九の計算
document.write("<table border>");

for (let i = 1; i <= 9; i++) {
  document.write("<tr>");

  for (let x = 1; x <= 9; x++) {
    document.write("<td>", i * x,"</td>");
  }

  document.write("</tr>");
}
document.write("</table");
