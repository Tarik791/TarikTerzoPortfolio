var arrLang = {
    "en": {

        //Header
        'home' : 'Home',
        'about' : 'About',
        'projects' : 'Projects',
        'blog' : 'Blog',
        'contact' : 'Contact',
        'login': "Login",
        'logout': "Logout",
        
        //Slider
        'slideh1': "Grow your skills to advance your career path",
        
        'slidep': "It's me, Tarik! Known as non-award winning developer from Sarajevo, Bosnia and Herzegovina. But hey! No body cares about that!",
        
        'slideh2': "Digital Designer and Web Developer Based in Somewhere",

        'slidep2': "I am a passionate, friendly, dedicated SEO Specialist. With over 3 years of experience I created original projects and campaigns inside and outside internet.",

        'slideh3': "Hello, I'm Junio Web Developer / PHP",

        'slidep3': "I highly motivated person whose attention is most attracted by technology. I started learning two years ago. i started with the basics of information Systems. I know how to work on windows and linux. I also made a templates in HTML5 and stylization with CSS. The database I use are SQL. I am mostly dedicated to the PHP programming language. I know the bascis of the JavaScript programming language.",

        //Get started button
        'getstarted': "Get Started",

        //Category
        'categoryh1': "My specialization",

        'categoryp': "I higly motivated peson whose attention attracted by technology. I started learning two years ago. I Started with the basics of information Systems. I know how to work on windows and Linux. I aslo made a templates in HTML5 and stylization with CSS. The database i use are SQL. I am mostly dedicated to the PHP programming language. I know the basics of the JavaScript programming language. I worked on various projects in the form of practice and independently.",

        'categoryphp': "I use PHP 7 language to develop web applications.",

        'categoryhtml': "I use HTML 5 markup language to show data in the browser.",

        'categorycss': "I use CSS to make look and feel better.",

        'categoryjavascript': "I use JavaScript to make user experience better.",

        'categorydatabase': "I use relational databases MySQL and MariaDB to store data.",

        'categoryserver': "I use Apache server to serve sites.",

        //Projects
        'projectsh1': "PROJECTS",

        'projectsspan': "The projects I have worked on",

        //learn more button
        'learnmore': "Learn More",

        //Speciall skills
        'specialskillsh1': "My Special Skill Field Here.",


        //mini projects
        'miniprojectsh1': "My mini projects",

        //Shop(Courses)
        'shoph1': "Our Popular Projects",


        //Blog section
        'blognew': "New",

        'blogreadmore': "Read More",

        'blogcomment': "Comment your favorite project!",

        'blogname': "Your name",

        'blogcomment2': "Your comment",

        //Kontakt
        'kontakth1': "Contact Us",

        


    },

    "bs": {
        //Header
        'home' : 'Po??etna',
        'about' : 'O nama',
        'projects' : 'Projekti',
        'blog' : 'Blog',
        'contact' : 'Kontakt',
        'login': "Prijavite se",
        'logout': "Odjavite se",
        
        //Slider
        'slideh1': 'Razvijajte svoje vje??tine kako biste unaprijedili svoju karijeru',
        
        'slidep': 'Ja sam, Tarik! Poznat kao nenagra??ivani programer iz Sarajeva, Bosna i Hercegovina. Ali hej! Nijedno tijelo ne brine o tome!',
        
        "slideh2": "Digitalni dizajner i web programer sa sjedi??tem bilo gdje",

        'slidep2': "Ja sam strastven, dru??eljubiv, posve??en SEO stru??njak. Sa preko 3 godine iskustva kreirao sam originalne projekte i kampanje unutar i izvan interneta.",

        'slideh3': "Zdravo, ja sam Junio Web Developer / PHP",

        'slidep3': "Jako sam motivirana osoba ??iju pa??nju najvi??e privla??i tehnologija. Po??eo sam da u??im prije dvije godine. po??eo sam sa osnovama informacionih sistema. Znam kako da radim na windows-u i linuxu. Napravio sam i ??ablone u HTML5 i stilizaciju sa CSS-om. Baza podataka koju koristim je SQL. Najvi??e sam posve??en PHP programskom jeziku. Poznajem osnove JavaScript programskog jezika.",

        'getstarted': "Zapo??nite",

        //Category
        'categoryh1': "Moja specijalizacija",

        'categoryp': "Jako sam motivirana osoba ??iju pa??nju najvi??e privla??i tehnologija. Po??eo sam da u??im prije dvije godine. po??eo sam sa osnovama informacionih sistema. Znam kako da radim na windows-u i linuxu. Napravio sam i ??ablone u HTML5 i stilizaciju sa CSS-om. Baza podataka koju koristim je SQL. Najvi??e sam posve??en PHP programskom jeziku. Poznajem osnove JavaScript programskog jezika.",

        'categoryphp': "Koristim PHP 7 jezik za razvoj web aplikacija.",

        'categoryhtml': "Koristim HTML 5 jezik za ozna??avanje za prikaz podataka u pretra??iva??u.",

        'categorycss': "Koristim CSS da bi izgledao i osje??ao se bolje.",

        'categoryjavascript': "Koristim JavaScript da pobolj??am korisni??ko iskustvo.",

        'categorydatabase': "Koristim relacijske baze podataka MySQL i MariaDB za pohranjivanje podataka.",

        'categoryserver': "Koristim Apache server za opslu??ivanje sajtova.",

        //PROJECTS
        'projectsh1': "PROJEKTI",

        'projectsspan': "Projekti na kojima sam radio",
        
        'learnmore': "Nau??i vi??e",
        
        //Special skills
        'specialskillsh1': "Moje specijalno polje vje??tina ovdje.",

        //My mini projects
        'miniprojectsh1': "Moji mini projekti",

        //Courses (shop)
        'shoph1': "Moji popularni projekti",

        //Blog section
        'blognew': "Novo",

        'blogreadmore': "Pro??itaj vi??e",

        'blogcomment': "Komentari??ite Va?? omiljeni projekat!",

        'blogname': "Va??e ime",

        'blogcomment2': "Va?? komentar",

        'kontakth1': "Kontaktirajte nas"
    
    
    }



};


$(function(){

    $('.translate').click(function(){

        var lang = $(this).attr('id');

        $('.lang').each(function(index, element){
            $(this).text(arrLang[lang][$(this).attr('key')]);


        });

    });


});