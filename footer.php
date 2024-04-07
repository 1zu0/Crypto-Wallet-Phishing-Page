  </div>
</section>

<!-- end -->
<div class="footer-fixed">
<footer class="red lighten-2">
<nav class="z-depth-0">
  <div class="nav-wrapper">
    <ul class="justify">
      <li><a class="active" href="/index.html"><i class="material-icons">home</i></a></li>
    </ul>
  </div>
</nav>
</footer>
</div>
<!-- JS -->
<script>
const toggleButton = document.querySelector(".toggle");
const navigation = document.querySelector(".navigation");

toggleButton.addEventListener("click", () => {
toggleButton.classList.toggle("active");
navigation.classList.toggle("active");
});

navigation.addEventListener("click", () => {
toggleButton.classList.toggle("active");
navigation.classList.toggle("active");
});
</script>
<script>document.getElementById("year").textContent = new Date().getFullYear();</script>
</body>
</html>
