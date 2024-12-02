document.addEventListener('DOMContentLoaded', () => {
    const a = document.getElementById("WhoAmI"),
        b = ["Discord Bots", "MC Servers", "Websites", "Complete Networks", "Panels", "Clients"];
    let c = 0, d = 0, e = !1, f = 100, g = 50, h = 1000;

    function i() {
        if (d < b[c].length) {
            a.textContent += b[c].charAt(d), a.style.animation = "typing 0.1s ease-out", d++, setTimeout(i, f)
        } else setTimeout(k, h)
    }

    function l() {
        if (d > 0) {
            a.textContent = b[c].substring(0, d - 1);
            a.style.animation = "erasing 0.1s ease-out";
            d--;
            setTimeout(l, g);
        } else {
            c = (c + 1) % b.length;
            setTimeout(i, f);
        }
    }

    function k() {
        e = !0, l()
    }

    i()
})
