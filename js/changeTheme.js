function blueTheme(index){
    elem = document.getElementById('themeCss');
    
    switch(index)
    {
        case 2:
            elem.href = "css/themes/blue.css";
            break;
        case 3:
            elem.href = "css/themes/singleBlue.css";
            break;
    }
    
};

function darkTheme(index){
    elem = document.getElementById('themeCss');
    oldElem = document.getElementById('theme');
    switch(index)
    {
        case 2:
            elem.href = "css/themes/darkmode.css";
            oldElem.href = "";
            break;
        case 3:
            elem.href = "css/themes/singleBlack.css";
            break;
    }
};