
function acceptCookies() {
    document.cookie = "cookieConsent=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
    document.getElementById("banner-cookie").style.display = "none";
    console.log('Cookie saved');
}

function checkCookies() {

    if (document.cookie.includes("cookieConsent=true")) {
        document.getElementById("banner-cookie").style.display = "none";
    } else {
        document.getElementById("banner-cookie").style.display = "flex";

    }
}

// Run the checkCookies function when the page loads
window.addEventListener('load', function (){
    checkCookies();
});