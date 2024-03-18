'use strict'

//ドロワー実装
const DRAWER       = document.querySelector('#nav');
const DRAWER_OPEN  = document.querySelector('#drawer_open');
const DRAWER_CLOSE = document.querySelector('#drawer_close');
const MASK =         document.querySelector('#mask');       

DRAWER_OPEN.addEventListener('click',()=>{
    DRAWER.classList.add('show');
});
DRAWER_CLOSE.addEventListener('click',()=>{
    DRAWER.classList.remove('show');
});
MASK.addEventListener('click',()=>{
    DRAWER_CLOSE.click();
});

//お気に入りボタン　web-font
//クリックされたら、webフォントを差し替えてお気に入りに追加する
/* <i class="fa-solid fa-heart"></i> */
// const FAVORITE = document.querySelector('.fa-heart')

// FAVORITE.addEventListener('click',()=>{

// })