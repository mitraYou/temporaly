
$('.choose_items').click(function () { // ボタンがクリックされたら
  $(this).removeClass('.items_img')
  $(this).toggleClass('active')// ボタン自身に activeクラスを付与し
  // $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
  $('.items_img').toggleClass('mainblur')// ぼかしたいエリアにmainblurクラスを付与
})

// $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
//     $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
//     $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去し
//     $("#container").removeClass('mainblur');//ぼかしているエリアのmainblurクラスを除去
// });
// $(".choose_items").click(function () {//ボタンがクリックされたら
//     $(this). removeClass('.tive');
// 	$(this).toggleClass('items_img');//ボタン自身に activeクラスを付与し
//     // $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
//     // $(".items_img").toggleClass('mainblur');//ぼかしたいエリアにmainblurクラスを付与
// });
