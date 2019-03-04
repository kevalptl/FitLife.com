function showVideo(){

  var g_select=document.getElementById('gender_select').value;
  console.log(g_select);
  var b_select=document.getElementById('body_select').value;
      console.log(b_select);
//  var g_index = g_select.selectedIndex;
//  var b_index = b_select.selectedIndex;

      if(g_select=="male" && b_select=="upper"){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/o3lpSXRt7dA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'


      }
      if(g_select=="male" && b_select=="core" ){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/ykJmrZ5v0Oo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/TwD-YGVP4Bk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/1V4RXxLHNCY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

      }  if((g_select=="male")&&(b_select=="lower")){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

      }  if((g_select=="male")&&(b_select=="total")){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

      }  if((g_select=="female")&&(b_select=="upper")){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/sxrlGM2hU2Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

      }  if((g_select=="female")&&(b_select=="core")){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/av7-8igSXTs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/EdWCF9-ZAJI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/Xyd_fa5zoEU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

      }  if((g_select=="female")&&(b_select=="lower")){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

      }  if((g_select=="female")&&(b_select=="total")){
          var videocode1='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode2='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
          var videocode3='<iframe width="560" height="315" src="https://www.youtube.com/embed/tpLLst4-3fw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'

}


}
