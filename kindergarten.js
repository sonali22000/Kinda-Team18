//validateform for formprogram
function validateForm(){
    let description=(document.formprogram.description.value).trim();
    if (description == "") {
        alert("Please enter a description.");
        return false;
      }
    }
function validateForm(){
    let capacity=(document.formprogram.capacity.value).trim();
    if (capacity == "") {
        alert("Please enter a valid capacity.");
        return false;
      }
}
function validateForm(){
  let kidsid=(document.formprogram.kidsid.value).trim();
  if (kidsid == "") {
      alert("Please enter a valid kidsid.");
      return false;
    }
}
function validateForm(){
  let teid=(document.formprogram.teid.value).trim();
  if (teid == "") {
      alert("Please enter a valid teid.");
      return false;
    }
}