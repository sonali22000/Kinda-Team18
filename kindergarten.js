

//validateform for formindex
function formindex(){  

  let fname=(document.form1.fname.value).trim();
if (fname==null||fname== ""){
  alert("Please enter a valid Kids Name.");
  return false;
}
else if(fname.length<5){
    alert("Kids Name must have at least 5 character");
    return false;
}
else if(fname.length>20){  
      alert("Kids Name can't more than 20 characters");  
      return false;  
    }
  
    let lname=(document.form1.lname.value).trim();
if (lname==null||lname== ""){
  alert("Please enter a valid Kids Name.");
  return false;
}
else if(lname.length<5){
    alert("Kids Name must have at least 5 character");
    return false;
}
else if(lname.length>20){  
      alert("Kids Name can't more than 20 characters");  
      return false;  
    }
  
  let contactno=(document.form1.contactno.value).trim();
 if(contactno.length<10){
      alert("Enter 10 digits phone number");
    return false;
  }
  else if(contactno.length>10){
      alert("Enter 10 digits phone number");
    return false;
  }

  let emailid=(document.form1.emailid.value).trim();
  if (emailid==null || emailid==""){  
      alert("Email must be entered");  
      return false;  
    }
    let address=(document.form1.address.value).trim();
    if(address==null || address==""){
      alert("Address can not be blank");
      return false;
    }
    else if(address.length<15){
      alert("Address must have 15 characters");
      return false;
    }

//validateform for formprogram
function formproramval(){  
let description=document.formprogram.description.value;  

if (description==null || description==""){  
  alert("Please enter a valid description");  
  return false;  
}
else if(description.length<3){
  alert("description must have more than 3 characters");
  return false;
}

let capacity=document.formprogram.capacity.value;  

if (capacity==null || capacity==""){  
  alert("Please enter a valid capacity");  
  return false;  
}
else if(capacity.length<2){
  alert("capacity can not be more than 99");
  return false;
}
let kidsid=document.formprogram.kidsid.value;  

if (kidsid==null || kidsid==""){  
  alert("Please enter a valid kidsid");  
  return false;  
}
let teid=document.formprogram.teid.value;  

if (teid==null || teid==""){  
  alert("Please enter a valid teid");  
  return false;  
}
}


//validateform for forteachersinfo

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
    else if(address.length<15){
      alert("Address must have 15 characters");
      return false;
    }
 
    let parentsname=(document.formk.parentsname.value).trim();
    if(parentsname==null || parentsname==""){
      alert("Please enter a valid Parents Name");
      return false;
    }
    else if(parentsname.length<5){
      alert("Parent Name must have at least 5 character");
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

function formkval(){
  
  let kidsname=(document.formk.kidsname.value).trim();
  if(kidsname.length<5){
      alert("Kids name must have 6 characters");
      return false;
  }
  else if(kidsname.length>20){  
        alert("Name can't more than 50 characters");  
        return false;  
      }
    
    let phone=(document.formk.phone.value).trim();
   if(phone.length<10){
        alert("Enter 13 digits phone number");
      return false;
    }
    else if(phone.length>10){
        alert("Enter 13 digits phone number");
      return false;
    }
    let email=(document.formk.email.value).trim();
    if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }
      let address=(document.formk.address.value).trim();
      if(address==null || address==""){
        alert("Address can not be blank");
        return false;
      }
      else if(address.length<15){
        alert("Address must have 15 characters");
        return false;
      }
      let pnameandrelationship=(document.formk.parentsname.value).trim();
      if(pname==null || pname==""){
        alert("Parent name and relationship can not be blank");
        return false;
      }
      else if(pname.length<10){
        alert("Parent name must have 10 characters");
        return false;
      }
  
  }