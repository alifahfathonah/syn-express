<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery.min.js"></script>
<script src="./js/propper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- animasi -->
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    function lihatPassword() {
        var temp = document.getElementById("password");
        if (temp.type === "password") {
            temp.type = "text";
        } else {
            temp.type = "password";
        }
    }
    // banner
    ScrollReveal().reveal('.a-banner', {
        distance: '100px',
        delay: '500',
        origin: 'bottom',
        duration: '5000',
        rotate: {
            x: 200,
            z: 200
        }
    });
</script>