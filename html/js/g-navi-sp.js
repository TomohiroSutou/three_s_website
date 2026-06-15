$(".openbtn1").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
      $(".g-navi-sp").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
  });
  
  $(".openbtn1 a").click(function () {//ナビゲーションのリンクがクリックされたら
      $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
      $(".g-navi-sp").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
  });