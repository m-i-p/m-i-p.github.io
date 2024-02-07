function scrollToTop() {
    scrollTo(0, 0);
   }

   var form = document.forms.myform;
    form.myfile.addEventListener( 'change', function(e) {

      var result = e.target.files[0];
  
      //FileReaderのインスタンスを作成する
      var reader = new FileReader();
    
      //読み込んだファイルの中身を取得する
      reader.readAsText( result );
    
      //ファイルの中身を取得後に処理を行う
      reader.addEventListener( 'load', function() {
      
          //ファイルの中身をtextarea内に表示する
          form.output.textContent = reader.result;    
      })
  
  })