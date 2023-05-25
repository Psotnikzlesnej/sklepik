function toggleElementVisibility1() {
    let x = document.getElementById("footer__mobileView1");
    if (x.style.display === "block") {
        document.getElementById("changeIcon1").classList.add('footer-plus');
        document.getElementById("changeIcon1").classList.remove('footer-minus');
        if ( document.getElementById("changeIcon1").classList.contains('footer-minus') )
        document.getElementById("changeIcon1").classList.toggle('footer-plus');

        x.style.display = "none";
    } else {
        document.getElementById("changeIcon1").classList.add('footer-minus');
        document.getElementById("changeIcon1").classList.remove('footer-plus');
        if ( document.getElementById("changeIcon1").classList.contains('footer-plus') )
        document.getElementById("changeIcon1").classList.toggle('footer-minus');

        x.style.display = "block";
    }
}

function toggleElementVisibility2() {
    let x = document.getElementById("footer__mobileView2");
    if (x.style.display === "block") {
        document.getElementById("changeIcon2").classList.add('footer-plus');
        document.getElementById("changeIcon2").classList.remove('footer-minus');
        if ( document.getElementById("changeIcon2").classList.contains('footer-minus') )
        document.getElementById("changeIcon2").classList.toggle('footer-plus');

        x.style.display = "none";
    } else {
        document.getElementById("changeIcon2").classList.add('footer-minus');
        document.getElementById("changeIcon2").classList.remove('footer-plus');
        if ( document.getElementById("changeIcon2").classList.contains('footer-plus') )
        document.getElementById("changeIcon2").classList.toggle('footer-minus');

        x.style.display = "block";
    }
}

function toggleElementVisibility3() {
    let x = document.getElementById("footer__mobileView3");
    if (x.style.display === "block") {
        document.getElementById("changeIcon3").classList.add('footer-plus');
        document.getElementById("changeIcon3").classList.remove('footer-minus');
        if ( document.getElementById("changeIcon3").classList.contains('footer-minus') )
        document.getElementById("changeIcon3").classList.toggle('footer-plus');

        x.style.display = "none";
    } else {
        document.getElementById("changeIcon3").classList.add('footer-minus');
        document.getElementById("changeIcon3").classList.remove('footer-plus');
        if ( document.getElementById("changeIcon3").classList.contains('footer-plus') )
        document.getElementById("changeIcon3").classList.toggle('footer-minus');

        x.style.display = "block";
    }
}

function toggleElementVisibility4() {
    let x = document.getElementById("footer__mobileView4");
    if (x.style.display === "block") {
        document.getElementById("changeIcon4").classList.add('footer-plus');
        document.getElementById("changeIcon4").classList.remove('footer-minus');
        if ( document.getElementById("changeIcon4").classList.contains('footer-minus') )
        document.getElementById("changeIcon4").classList.toggle('footer-plus');

        x.style.display = "none";
    } else {
        document.getElementById("changeIcon4").classList.add('footer-minus');
        document.getElementById("changeIcon4").classList.remove('footer-plus');
        if ( document.getElementById("changeIcon4").classList.contains('footer-plus') )
        document.getElementById("changeIcon4").classList.toggle('footer-minus');

        x.style.display = "block";
    }
}
