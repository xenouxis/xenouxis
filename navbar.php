<nav>
    <div id="logo">logo</div>
    <ul class="desktop-menu">
        <li><a href="index.php#accueil">Accueil</a></li>
        <li><a href="index.php#travaux">Travaux</a></li>
        <li id="menucontact"><a href="index.php#contact" id="contactnav">Contact</a></li>
    </ul>
    <div id="menuburger">
        <div id="menu">
            <div class="ligne" id="l1"></div>
            <div class="ligne" id="l2"></div>
            <div class="ligne" id="l3"></div>
        </div>
    </div>
</nav>
<div class="contentmenutab" id="menutab">
    <div id="closemenu" class="close-btn">&times;</div>
    <ul>
        <li><a href="index.php#accueil">Accueil</a></li>
        <li><a href="index.php#travaux">Travaux</a></li>
        <li id="menucontact"><a href="index.php#contact" id="contactnav">Contact</a></li>
    </ul>
</div>
<script>
    const menuburger = document.querySelector('#menuburger')
    const menutab = document.querySelector('#menutab')
    const links = document.querySelectorAll('#menutab a')
    menuburger.addEventListener('click',()=>{
        menuburger.classList.toggle('active-menu')
        menutab.classList.toggle('open')
    })
    const closebtn = document.querySelector('#closemenu')
    links.forEach(link=>{
        link.addEventListener('click',()=>{
            menuburger.classList.remove('active-menu')
            menutab.classList.remove('open')
        })
    })
    closebtn.addEventListener('click',()=>{
        menuburger.classList.remove('active-menu')
        menutab.classList.remove('open')
    })
</script> 