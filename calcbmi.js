function addNumbers()
{
  if((document.getElementById("height").value <=2) && (document.getElementById("height").value >0)){
          var heightsquare = document.getElementById("height").value*document.getElementById("height").value;
          var weight = parseInt(document.getElementById("weight").value);
          var bmi = document.getElementById("answer");
          var status = document.getElementById("status");
          bmi.value = (weight/heightsquare).toFixed(2);
          if( bmi.value > 18.4 ){
            status.value="Normal"
          }
          if( bmi.value > 25 ){
            status.value="Overweight"
          }
          if( bmi.value < 18.4 ){
            status.value="Underweight"
          }
        }else{
        alert("Please input correct values!");
      }
}
