<script>
    document.querySelector(".fa-eye").addEventListener("click", function() {
        let passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            this.classList.remove("fa-eye-slash");
            this.classList.add("fa-eye");
        }
    });
</script>
@yield('script')
@yield('script-bottom')
