function professional_portfolio_open_tab(evt, cityName) {
    var professional_portfolio_i, professional_portfolio_tabcontent, professional_portfolio_tablinks;
    professional_portfolio_tabcontent = document.getElementsByClassName("tabcontent");
    for (professional_portfolio_i = 0; professional_portfolio_i < professional_portfolio_tabcontent.length; professional_portfolio_i++) {
        professional_portfolio_tabcontent[professional_portfolio_i].style.display = "none";
    }
    professional_portfolio_tablinks = document.getElementsByClassName("tablinks");
    for (professional_portfolio_i = 0; professional_portfolio_i < professional_portfolio_tablinks.length; professional_portfolio_i++) {
        professional_portfolio_tablinks[professional_portfolio_i].className = professional_portfolio_tablinks[professional_portfolio_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});