var database={
    "menu":{
        "dropdown":{
            "value":{
                "Redmi Note 9 Pro":["#9pro"],
                "Samsung Galaxy Fold":["#galaxy"],
                "OPPO A 83":["#a83"],
                "XIAOMI I 8 SE":["#i8se"],
                "Relme 50":["#50"],
                "VIVO V 19":["#19"],
                "Samsung A 20 ":["#20"],
                "VIVO X 50 PRO":["#50p"]

            }
        },
        "link":{
            "value":{
                "home":["#home"],
                "produk terpopuler":["#popular"],
                "produk terlaris":["#terlaris"],
                "rekomendasi":["#recomendasi"]

            }
        },
    }
};

//============================== dropdown menu

var menu_dropdown_temp="";

var menu_dropdown_key=Object.keys(database.menu.dropdown.value);


for(x=0;x<menu_dropdown_key.length;x++){

    menu_dropdown_temp+=`<a class="dropdown-item link-smooth" href="`+database.menu.dropdown.value[menu_dropdown_key[x]]+`">`+menu_dropdown_key[x]+`</a>`;
}

$('#menu_dropdown').html(menu_dropdown_temp);

//============================== link mmenu

var menu_link_temp="";

var menu_link_key=Object.keys(database.menu.link.value);


for(x=0;x<menu_link_key.length;x++){


    menu_link_temp+=`<li class="nav-item">
    <a class="nav-link  link-smooth"  href="`+database.menu.link.value[menu_link_key[x]]+`">`+menu_link_key[x]+`</a>
    </li>`;
}

$('#menu_link').append(menu_link_temp);
