function shareFoodSubmit(){
    var fullName, mobileNo, email, city, pickUpAddress, mealQuantity;
    var checkbox1 = document.getElementById("checkbox1").value
    var validFlag = false;
    var termsflag = false;
    var surplusFlag = false;
    console.log(surplusFood)
  console.log(surplusFlag) 
    if(surplusFood === undefined || surplusFood === ''){
        toastr.error('Select the surplus food option*')
    }else{

    var obj = {}
    if(checkbox1.length === 0){
        termsflag = true
        toastr.error('select the checkbox')
      }


      if(termsflag === false){
        fullName = document.getElementById('fname').value
        mobileNo = document.getElementById('Mobilenumber').value
        email = document.getElementById('email').value
        city = document.getElementById('city').value
        pickUpAddress = document.getElementById('pickupAddress').value
        mealQuantity = document.getElementById('meal').value
      }
                
      if(fullName === '' || mobileNo === '' || pickUpAddress === '' || mealQuantity === '' || mealQuantity === undefined  || mealQuantity === 'Meal Quantity*' || city === '' || city === undefined || city === 'Select City*' || email === ''){
        validFlag = true;
        toastr.error('form field cannot be empty')
      }
    }
}