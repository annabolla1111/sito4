<nav>
            <a href="home.php"><img src="img/logo.png">Accordo</a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul id="menu_lista">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="chi_siamo.php">Chi siamo</a></li>
                    <li><a href="cosa_facciamo.php">Cosa facciamo</a></li>
                    <li><a href="eventi.php">Eventi</a></li>
                    <li><a href="donazioni.php">Donazioni</a></li>
                    <li><a href="contatti.php">Contatti</a></li>
                    <li class="accessibility-container">
                        <i class="fa fa-universal-access" onclick="toggleAccessibilityMenu(event)"></i>
                        <div id="accessibilityDropdown" class="accessibility-dropdown">
                            <button onclick="changeFontSize('increase')">A+ Ingrandisci testo</button>
                            <button onclick="changeFontSize('decrease')">A- Riduci testo</button>
                            <button onclick="toggleSimpleLanguage()">Linguaggio semplice</button>
                        </div>
                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>


<script>
    var navLinks = document.getElementById("navLinks")
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

    window.addEventListener("scroll", function(){
        var nav = document.querySelector("nav");
        nav.classList.toggle("scrolled", window.scrollY > 50);
    });

</script>

<script>
    function toggleAccessibilityMenu(event){
        event.stopPropagation();
        var dropdown = document.getElementById("accessibilityDropdown");
        dropdown.classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.fa-universal-access')) {
            var dropdowns = document.getElementsByClassName("accessibility-dropdown");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    let currentFontSize = 100;

    function changeFontSize(action){
        if(action === 'increase'){
            currentFontSize += 10;
        }else if(action === 'decrease'){
            if(currentFontSize>70){
                currentFontSize -= 10;}
            
        }
        document.documentElement.style.fontSize = currentFontSize + '%';
    }

    function toggleSimpleLanguage(){
        const isSimple = document.body.classList.toggle("simple-language-mode");
        const btn = document.getElementById("btnSimpleLang");

        if(btn){
            btn.setAttribute("aria-expanded", isSimple)
            btn.textContent = isSimple ? "Linguaggio dettagliato" : "Linguaggio semplice";
        }
    }
</script>
