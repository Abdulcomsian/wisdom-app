<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    function showLoader() {
        document.getElementById('loader').classList.remove('hidden');
    }

    function hideLoader() {
        document.getElementById('loader').classList.add('hidden');
    }
</script>
<script>
    @if(Session::has('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif

    @if(Session::has('info'))
        toastr.info("{{ session('info') }}");
    @endif
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      const profileToggle = document.getElementById("profileToggle");
      const profileModal = document.getElementById("profileModal");
      const closeModal = document.getElementById("closeModal");

      // Open Modal
      profileToggle.addEventListener("click", () => {
        profileModal.classList.remove("hidden");
      });

      // Close Modal
      closeModal.addEventListener("click", () => {
        profileModal.classList.add("hidden");
      });

      // Close when clicking outside
      window.addEventListener("click", (event) => {
        if (event.target === profileModal) {
          profileModal.classList.add("hidden");
        }
      });
    });
    // ===============//
    // Mobile Sidebar Toggle
    const hamburgerBtn = document.getElementById("hamburgerBtn");
    const sidebar = document.getElementById("sidebar-btn");

    hamburgerBtn.addEventListener("click", () => {
      sidebar.classList.toggle("hidden");
    });

    // Toggle Password Visibility
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", () => {
      const isPassword = passwordInput.type === "password";
      passwordInput.type = isPassword ? "text" : "password";
    });
  </script>

