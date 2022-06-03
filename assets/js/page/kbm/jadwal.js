function get_jadwal(element) {
    const dis_notif = document.querySelectorAll("#display_jadwal .zoom-filter");
    dis_notif.forEach((div) => {
        let display_value = div.getAttribute("data-page");
        if ((display_value == 'jadwal-' + element.value)) {
            div.classList.remove("hiding");
            div.classList.add("showing");
        } else {
            div.classList.add("hiding");
            div.classList.remove("showing");
        }
    });
}