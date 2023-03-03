//validateform for formprogram
function validateForm(){
    let description=(document.formprogram.description.value).trim();
    if (description == null ||description== "") {
        alert("Please enter a valid description.");
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
  if (fname==null||fname== ""){
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
//validateform for forteachersinfo

//validateform for forenrollmentlist