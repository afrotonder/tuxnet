<?php
//  fills menu area with respective items
    function fillmenu(){
        $menuItems = ['Wargames', 'Hacking', 'Open Source', 'Free Software', "Liscenses"] ;
        $menuLinks = ['https://overthewire.org/wargames/', 
                    'https://null-byte.wonderhowto.com/', 
                    'https://opensource.com/resources/what-open-source', 
                    'https://www.gnu.org/philosophy/free-software-intro.en.html', 
                    'https://fosslawyers.org/permissive-foss-licenses-bsd-apache-mit/'] ; 

        for($item = 0 ; $item < count($menuItems); $item++) {
            echo "<a href='".$menuLinks[$item]."' target=_blank><li>".$menuItems[$item]."</li></a>" ;
        }
    } 
?>

<header>
    <section id="logo-section">
        <a href="https://www.wired.com/2001/03/the-story-behind-tux-the-penguin/" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/TUX_G2.svg/163px-TUX_G2.svg.png" id="logo" alt="TuxNet Logo"  />
        </a>
        <h2 id="title"> TuxNet </h2>
    </section> 

    <div id="menu-sm">
                   
        <ul id="myLinks">
            <?php fillmenu(); ?>
        </ul>
        <a href="javascript:void(0);" onclick="toggleMenu()" >
            <i class="fa fa-bars fa-5x" id="hamburger-menu" aria-hidden="true"></i>
        </a>
    </div>
    <section id="menu-section">
              
        <ul id="menu">
        <?php fillmenu() ; ?>
        </ul>
                
    </section>
</header>