<footer class="site-footer">
    <div class="social">
        <p class="titre-section">Réseaux sociaux</p>
        <div class="media">
            <a href="https://github.com/xenouxis/" target="_blank"><img src="images/github.png" alt="GitHub"></a>
            <a href="https://www.linkedin.com/in/lisa-sluys-607973230/" target="_blank"><img src="images/linkedin.png" alt="LinkedIn"></a>
        </div>
    </div>
    <div class="footerinfo">
        <div class="footera">
            <a href="index.php#accueil">Accueil</a>
            <a href="index.php#travaux">Travaux</a>
            <a href="index.php#contact">Contact</a>
        </div>
        <a href="mentions.php" id="mentions">Mentions légales</a>
        <div id="signature">Portfolio • Lisa Sluys</div>
    </div>
    <div id="vide"></div>
</footer>

<script>
const f=document.querySelector('.site-footer');
const p=f.previousElementSibling;
if(p){
  const st=getComputedStyle(p);
  const bg=st.backgroundImage;
  const bgc=st.backgroundColor;
  if(bg && bg!=='none' && bg.includes('linear-gradient')){
    const match=bg.match(/linear-gradient\((.*)\)/i);
    if(match){
      let content=match[1].trim();
      let newGrad='';
      if(content.startsWith('to')){
        if(content.startsWith('to top')) newGrad=content.replace('to top','to bottom');
        else if(content.startsWith('to bottom')) newGrad=content.replace('to bottom','to top');
        else if(content.startsWith('to left')) newGrad=content.replace('to left','to right');
        else if(content.startsWith('to right')) newGrad=content.replace('to right','to left');
        else newGrad=content;
        f.style.backgroundImage=`linear-gradient(${newGrad})`;
        f.style.backgroundPosition='top -1px';
        f.style.backgroundSize='100% calc(100% + 1px)';
      }else if(/^[0-9.]+deg/.test(content)){
        const parts=content.split(',');
        const angle=parseFloat(parts.shift());
        const newAngle=(angle+180)%360;
        f.style.backgroundImage=`linear-gradient(${newAngle}deg,${parts.join(',')})`;
        f.style.backgroundPosition='top -1px';
        f.style.backgroundSize='100% calc(100% + 1px)';
      }else{
        f.style.backgroundImage=`linear-gradient(to top,${content})`;
        f.style.backgroundPosition='top -1px';
        f.style.backgroundSize='100% calc(100% + 1px)';
      }
    }
  }else{
    f.style.backgroundColor=bgc;
  }
}
</script> 