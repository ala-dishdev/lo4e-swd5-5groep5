    
function change_body_class(class_name){
    var element = document.body;
    var old_class_name = element.className;

    element.classList.add(class_name);
    element.classList.remove(old_class_name);
}