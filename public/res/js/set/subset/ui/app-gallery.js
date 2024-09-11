(function(){

var d = document;
var app_gallery = [];
var app_gallery_item_index = 0;

app_gallery["lightbox"] = d.querySelector(".app_gallery_subset_lightbox");
app_gallery["lightbox_button_close"] = d.querySelector(".app_gallery_subset_lightbox_button_close");
app_gallery["lightbox_button_next"] = d.querySelector(".app_gallery_subset_lightbox_button_next");
app_gallery["lightbox_button_prev"] = d.querySelector(".app_gallery_subset_lightbox_button_prev");
app_gallery["item"] = d.querySelectorAll(".app_gallery_subset_content_item");
app_gallery["lightbox_preview_item"] = d.querySelector(".app_gallery_lightbox_preview_item");


function app_gallery_item____set_index() {
	for(i = 0; i < app_gallery["item"].length; i++) {
		app_gallery["item"][i].firstElementChild.setAttribute("data-item-index", i);
	}
}


function app_gallery_lightbox_preview____open() {
	app_gallery["lightbox"].classList.remove("app_element_display_hidden");
	app_gallery["lightbox"].classList.add("app_element_display_flex_visible");

	app_gallery["lightbox_button_prev"].classList.remove("app_element_display_hidden");
	app_gallery["lightbox_button_prev"].classList.add("app_element_display_flex_visible");

	app_gallery["lightbox_button_next"].classList.remove("app_element_display_hidden");
	app_gallery["lightbox_button_next"].classList.add("app_element_display_flex_visible");

    app_gallery_item_index = this.firstElementChild.getAttribute("data-item-index");
    app_gallery["lightbox_preview_item"].src = this.firstElementChild.src;

    if(app_gallery_item_index >= (app_gallery["item"].length - 1) ) {
    	app_gallery["lightbox_button_next"].classList.add("app_element_display_hidden");
		app_gallery["lightbox_button_next"].classList.remove("app_element_display_flex_visible");
    }


    if(app_gallery_item_index <= 0) {
    	app_gallery["lightbox_button_prev"].classList.add("app_element_display_hidden");
		app_gallery["lightbox_button_prev"].classList.remove("app_element_display_flex_visible");
    }

    window.addEventListener("click", app_gallery_lightbox_preview__area_match_close);

}



function app_gallery_lightbox_preview____close() {
	app_gallery["lightbox"].classList.remove("app_element_display_flex_visible");
	app_gallery["lightbox"].classList.add("app_element_display_hidden");
	app_gallery_item_index = 0;

	window.removeEventListener("click", app_gallery_lightbox_preview__area_match_close);
}


function app_gallery_lightbox_preview__area_match_close(event) {

	if(
		(!event.target.matches('.app_gallery_subset_content_item')) &&
		(!event.target.matches('.app_gallery_lightbox_preview_item')) &&
		(!event.target.matches('.app_gallery_subset_lightbox_button_close')) &&
		(!event.target.matches('.app_gallery_subset_lightbox_button_prev')) &&
		(!event.target.matches('.app_gallery_subset_lightbox_button_next'))
	){
		app_gallery["lightbox"].classList.remove("app_element_display_flex_visible");
		app_gallery["lightbox"].classList.add("app_element_display_hidden");
		app_gallery_item_index = 0;

		window.removeEventListener("click", app_gallery_lightbox_preview__area_match_close);
	}

}


function app_gallery_lightbox_preview____prev() {

	if(app_gallery_item_index <= 1) {
		app_gallery_item_index = 1;
		app_gallery["lightbox_button_prev"].classList.add("app_element_display_hidden");
		app_gallery["lightbox_button_prev"].classList.remove("app_element_display_flex_visible");
	}

	app_gallery_item_index--;
	app_gallery["lightbox_preview_item"].src = app_gallery["item"][app_gallery_item_index].firstElementChild.src;

	app_gallery["lightbox_button_next"].classList.remove("app_element_display_hidden");
	app_gallery["lightbox_button_next"].classList.add("app_element_display_flex_visible");
}


function app_gallery_lightbox_preview____next() {
	app_gallery_item_index++;
	app_gallery["lightbox_preview_item"].src = app_gallery["item"][app_gallery_item_index].firstElementChild.src;

	if(app_gallery_item_index >= (app_gallery["item"].length - 1) ) {
		app_gallery["lightbox_button_next"].classList.add("app_element_display_hidden");
		app_gallery["lightbox_button_next"].classList.remove("app_element_display_flex_visible");
	}

	app_gallery["lightbox_button_prev"].classList.remove("app_element_display_hidden");
	app_gallery["lightbox_button_prev"].classList.add("app_element_display_flex_visible");


}


try{
	window.addEventListener("load", app_gallery_item____set_index);
}
catch(error){
	console.info(error);
}

try {
	for(i = 0; i < app_gallery["item"].length; i++) {
		app_gallery["item"][i].addEventListener("click", app_gallery_lightbox_preview____open);
	}
}
catch(error){
	console.info(error);
}

try{
	app_gallery["lightbox_button_close"].addEventListener("click", app_gallery_lightbox_preview____close);
}
catch(error){
	console.info(error);
}

try{
	app_gallery["lightbox_button_prev"].addEventListener("click", app_gallery_lightbox_preview____prev);
}
catch(error){
	console.info(error);
}

try{
	app_gallery["lightbox_button_next"].addEventListener("click", app_gallery_lightbox_preview____next);
}
catch(error){
	console.info(error);
}



})();