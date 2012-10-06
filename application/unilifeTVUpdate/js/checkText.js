function clearText(thefield){
if (thefield.defaultValue==thefield.value)
thefield.value = ""
} 

function checkText(checkField){
if (checkField.value=="")
checkField.value = checkField.defaultValue
}