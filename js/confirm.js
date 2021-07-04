function confirmation(event) {
    if (confirm("Are you sure to scrap the vehicle? Can not be recovered once scrapped"))  {
        return true;
    }else{
        event.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".safety");

for (var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click',confirmation);
}