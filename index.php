<?php
$faqs = [
    [
        'question' =>'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer' =>'La recente <a href="#"> decisione della Corte di giustizia dell\'Unione europea </a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br/><br/>

        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br/><br/>
        
        Per presentare una richiesta di rimozione, compila questo <a href="#"> modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.<br/><br/>
        
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br/><br/>
        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.',
    ],
    [
        'question' =>'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'answer' =>'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br/><br/>

        Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br/><br/>
        
        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href="#"> Centro Google per la sicurezza online</a>.<br/><br/>
        
        Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.',
    ],
    [
        'question' =>'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
        'answer' =>'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href="#"> contattare il webmaster </a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href="#"> fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href="#"> visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.',
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Link css-->
    <link rel="stylesheet" href="./style.css">
    <title>Google Faq</title>
</head>
<body>
    <!--Header-->
    <header>
        <!--Logo and Link Lists-->
        <div class="left-section">
            <a href="#"><img class="logo" src="./img/LogoGoogle.png" alt="Google Logo"></a>
            <a href="#"><h2>Privacy e termini</h2></a>
            <ul class="link">
                <li><a href="#">Introduzione</a></li>
                <li><a href="#">Norme sulla privacy</a></li>
                <li><a href="#">Termini di servizio</a></li>
                <li><a href="#">Tecnologie</a></li>
                <li><a href="#">Domande frequenti</a></li>
            </ul>
        </div>
        <!--Menu and Button-->
        <div class="right-section">
            <button class="blue">Accedi</button>
        </div>
    </header>

    <!--Main-->
    <main>
        <div class="container">
            <?php foreach ($faqs as $content) {?>
                <h2> <?php echo $content['question']; ?> </h2>
                <p><?php echo $content['answer']; ?></p>
            <?php } ?>
        </div>
    </main>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="left">
                <ul class="link-footer">
                    <li><a href="#">Google . </a></li>
                    <li><a href="#">Tutto su Google . </a></li>
                    <li><a href="#">Privacy . </a></li>
                    <li><a href="#">Termini</a></li>
                </ul>
            </div>

            <div class="right">
                
                <div>
                    <a href="#"><img class="chat" src="./img/chat.png" alt="chat"></a>
                    <select>
                        <option value="0">Italiano</option>
                        <option value="1">Deutsch</option>
                        <option value="2">Filipino</option>
                        <option value="3">Polski</option>
                        <option value="4">Français</option>
                        <option value="5">Español</option>
                    </select>
                </div>
            </div>



        </div>
    </footer>




    

</body>
</html>