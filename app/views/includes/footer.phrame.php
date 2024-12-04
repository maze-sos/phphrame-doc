    <footer id="contact">
        <p>&copy; <?= date('Y') ?> PHPhrame Framework. All Rights Reserved.</p>
        <p>
            <a href="#hero" style="color: white; text-decoration: none;">Back to Top</a>
        </p>
    </footer>

    <!-- Scripts -->
    <script>
        const burger = document.getElementById('burger');
        const navLinks = document.querySelector('.nav-links');

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>

</body>

</html>
