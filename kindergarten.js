//validateform for formprogram
function validateForm(){
    let description=(document.formprogram.description.value).trim();
    if (description == null ||description== "") {
        alert("Please enter a valid description.");
        return false;
      }
    else if(description.length<3){
        alert("Bdescription must have more than 3 characters");
        return false;
      }
    let capacity=(document.formprogram.capacity.value).trim();
    if (capacity == null ||capacity== "") {
        alert("Please enter a valid capacity.");
        return false;
      }
      let kidsid=(document.formprogram.kidsid.value).trim();
    if (kidsid == null ||kidsid== "") {
        alert("Please enter a valid kidsid.");
        return false;
        }
      let teid=(document.formprogram.teid.value).trim();
      if (teid == null ||teid== "") {
        alert(" Please enter a valid teid.");
        return false;
            }

}

//validateform for formindex
function validateForm(){
  let lname=(document.form1.fname.value).trim();
  if (fname==null){
      alert("First Name must be entered.");
      return false;
  }
}

function fname(){  
  let fname=(document.form1.fname.value).trim();
  if (fname.length<5){
      alert("First Name must have at least 5 character");
      return false;
  }



}

function fname(){  let fname=(document.form1.fname.value).trim();
  if (fname.length<5){
      alert("First Name must have at least 5 character");
      return false;
  }



}
  
  <input type="email" id="email" name="email" />

//validateform for forkidsinfo


function formkval(){
  
let kidsname=(document.formk.kidsname.value).trim();
if (kidsname==null||kidsname== ""){
  alert("Please enter a valid Kids Name.");
  return false;
}
else if(kidsname.length<5){
    alert("Kids Name must have at least 5 character");
    return false;
}
else if(kidsname.length>20){  
      alert("Kids Name can't more than 20 characters");  
      return false;  
    }
  
  let phone=(document.formk.phone.value).trim();
 if(phone.length<10){
      alert("Enter 10 digits phone number");
    return false;
  }
  else if(phone.length>10){
      alert("Enter 10 digits phone number");
    return false;
  }
  let email=(document.formk.email.value).trim();
  if (email==null || email==""){  
      alert("Email must be entered");  
      return false;  
    }
    let address=(document.formk.address.value).trim();
    if(address==null || address==""){
      alert("Address can not be blank");
      return false;
    }
 
    let parentsname=(document.formk.parentsname.value).trim();
    if(parentsname==null || parentsname==""){
      alert("Please enter a valid Parents Name");
      return false;
    }
    else if(parentsname.length<5){
      alert("Parent nName must have at least 5 character");
      return false;
    }
    else if(parentsname.length>20){  
      alert("Parents Name can't more than 20 characters");  
      return false;  
    }

}
//validateform for forteachersinfo
function formtval(){
  
let tname=(document.formt.tname.value).trim();
if (tname==null||tname== ""){
  alert("Please enter a valid Teachers Name.");
  return false;
}
else if(tname.length<5){
    alert("Teacher Name must have at least 5 character");
    return false;
}
else if(tname.length>20){  
      alert("Teachers Name can't more than 20 characters");  
      return false;  
    }
   
  let phone=(document.formt.phone.value).trim();
  if(phone.length<10){
      alert("Enter 10 digits phone number");
    return false;
  }
  else if(phone.length>10){
      alert("Enter 10 digits phone number");
    return false;
  }
  let email=(document.formt.email.value).trim();
  if (email==null || email==""){  
      alert("Email must be entered");  
      return false;  
    }
    let address=(document.formt.address.value).trim();
    if(address==null || address==""){
      alert("Address can not be blank");
      return false;
    }
    else if(address.length<15){
      alert("Address must have 15 characters");
      return false;
    }
    let bio=(document.formt.bio.value).trim();
    if(bio==null || bio==""){
      alert("Please enter a valid bio.");
      return false;
    }
    else if(bio.length<3){
      alert("Bio must have more than 3 characters");
      return false;
    }
    
}

//validateform for forenrollmentlist