const menuIcon = document.querySelector('.js-hamburger');
const menu = document.querySelector('.js-menu');
const cover = document.querySelector('.js-cover');
const body = document.querySelector('body');

menuIcon.addEventListener('click', () => {
  menuIcon.classList.toggle('is-open'); /* ×印に変更 */
  cover.classList.toggle('is-open'); /* 背景グレー */
  menu.classList.toggle('is-open'); /* メニュー表示 */
  body.classList.toggle('is-open'); /* 背景スクロールさせない */
});
