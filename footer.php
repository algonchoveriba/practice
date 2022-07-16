<footer id="footer">
  Copyright <a href="http://webukatu.com/">ウェブカツ！！WEBサービス部</a>. All Rights Reserved.
</footer>
<!-- jquery読み込み -->
<script src="js/vender/jquery-3.6.0.min.js"></script>
<script>
  $(function(){
    //フッターをページの長さに合わせて下部に固定する関数(お決まり)
    var $ftr = $('#footer');
    if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
      $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) + 'px;' });
    }
    //メッセージ表示(登録など成功した時上から数秒出てくるやつ)
    var $jsShowMsg = $('#js-show-msg');
    var msg = $jsShowMsg.text();
    if(msg.replace(/^[\s　]+|[\s　]+$/g, "").length){
      $jsShowMsg.slideToggle('slow');
      setTimeout(function(){ $jsShowMsg.slideToggle('slow'); }, 5000);
    }
  })
</script>
</body>
</html>